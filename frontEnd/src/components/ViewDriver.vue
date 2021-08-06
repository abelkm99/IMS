<template>
  <div>
    <div class="router-view-container">
      <SubHeaderControl :links="links" />
      <vue-window-modal
        :active="editVisible"
        title="update Driver Details"
        v-on:clickClose="editVisibleUpdate(false)"
        style="width:auto;height:auto;"
      >
        <form @submit.prevent="updateDriver">
          <table class="view-items">
            <tr class="view-items-header">
              <th>Name</th>
              <th>Phone</th>
              <th>Plate</th>
            </tr>
            <tr>
              <td>
                <input v-model="editName" type="text" placeholder="Name" requried />
              </td>
              <td>
                <input v-model="editPhone" type="text" placeholder="Phone" required />
              </td>
              <td>
                <input v-model="editPlate" type="text" placeholder="Plate" />
              </td>
            </tr>
            <tr>
              <td>
                <button class="btn-submit" type="submit">Confirm</button>
              </td>
            </tr>
          </table>
        </form>
      </vue-window-modal>
      <div class="router-view">
        <div class="add-purchase">
          <fieldset class="view-items-container">
            <legend>
              <h3>Drivers</h3>
            </legend>
            <table class="view-items">
              <tr class="view-items-header">
                <th>Name</th>
                <th>Phone</th>
                <th>Plate</th>
                <th>Change</th>
              </tr>
              <tr :name="x.DriverID" v-bind:key="index" v-for="(x,index) in items">
                <td>{{x.DriverName}}</td>
                <td>{{x.DriverPhoneNumber}}</td>
                <td>{{x.DriverPlate}}</td>
                <td>
                  <button @click="editFormVisible(x.DriverID)" class="btn-submit-mini">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn-err" @click="removeDriver(x.DriverID)">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            </table>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Driver from "@/api_calls/Driver.js";
export default {
  name: "AddPurchase",
  components: {
    SubHeaderControl
  },
  data() {
    return {
      editVisible: false,
      driverEditable:'',
      editName: "",
      editPhone: "",
      editPlate: "",
      DriverName: "",
      DriverPhoneNumber: "",
      DriverPlate: "",
      items: [],
      links: [
        {
          id: 0,
          address: "driver",
          displayText: "Add Driver"
        },
        {
          id: 1,
          address: "viewDriver",
          displayText: "Drivers"
        }
      ]
    };
  },
  methods: {
      getDrivers(){
           Driver.getDrivers().then(item => {
      this.items = item["data"];
    });
      },
    editFormVisible(id) {
      this.editVisible = true;
      this.driverEditable = id;
      const dt = this.items.filter(item => {
        return item.DriverID == id;
      })[0];
      this.editName = dt.DriverName;
      this.editPhone = dt.DriverPhoneNumber || "";
      this.editPlate = dt.DriverPlate || "";
    },
    updateDriver() {
      const data = {
        DriverName: this.editName,
    DriverPhoneNumber: this.editPhone,
        DriverPlate: this.editPlate,
        DriverID: this.driverEditable
      };
      Driver.updateDriver(data)
        .then(res => {
          console.log(res["data"]);
          this.editName = "";
          this.editPhone = "";
          this.editPlate = "";
          this.getDrivers();
          this.editVisible = false;
        })
.catch(err => {
          alert(err.response.data.message);
        });
    },editVisibleUpdate(state){
        this.editVisible = state;
    },removeDriver(id){
        const data = 
            {
    "DriverID":id
}
        Driver.removeDriver(data).then(res=>{
            console.log(res["data"])
            this.items = this.items.filter(item=>{return item.DriverID != id});
            
        }).catch(err=>{
            alert(err.response.data.message);
        })
    }
  },
  created() {
    this.getDrivers();

   
  }
};
</script>
<style>
.router-view-container {
  padding: 20px;
  background: #eee;
  width: 100%;
  height: auto;
}
.router-view-nav a {
  color: black;
  text-decoration: none;
  font-size: 20px;
}
.router-view-nav {
  /* display: grid;
    place-items:center; */
}
.router-view-nav li {
  list-style: none;
  display: inline;
  background: rgb(11, 170, 96);
  color: white;
  padding: 15px;
  text-align: center;
  border-radius: 5px;
}
.add-purchase {
  margin-top: 18px;
}
.add-purchase h3 {
  margin-left: 15px;
}
.txt-input {
  padding: 15px;
  width: 350px;
  border: none;
  display: block;
  margin: 10px;
  cursor: pointer;
  border-bottom: 2px solid rgb(11, 170, 96);
  background: white;
}
.btn-submit {
  margin: 10px;
  width: 120px;
  padding: 15px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  color: white;
  background: rgb(11, 170, 96);
  font-size: 20px;
}
.form-contain {
  display: grid;
  place-items: center;
}
.view-items th {
  padding: 15px;
}
.view-items td {
  padding: 15px;
}
.view-items-header {
  background: rgb(11, 170, 96);
  color: white;
}
.view-items-container {
  display: grid;
  place-items: center;
}
.error {
  background: red;
}
.btn-del {
  width: 30px;
  height: 30px;
  font-weight: bolder;
  color: white;
  border: none;
  background: red;
  cursor: pointer;
  border-radius: 50%;
}
</style>