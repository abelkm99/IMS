<html>
    <h1>
        HI
        <button onclick="clickme()">click me</button>
    </h1>
</html>
<script>
    function clickme(){
        var myHeaders = new Headers();
        myHeaders.append("Cookie", "name=abel");

        var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
        };

        fetch("http://localhost/ims/api/v1/login", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
    }
</script>