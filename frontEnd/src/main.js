import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VueWindowModal from 'vue-window-modal';
import VueHtmlToPaper from "vue-html-to-paper";
Vue.config.productionTip = false
Vue.use(VueWindowModal);
Vue.use(VueHtmlToPaper);
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
