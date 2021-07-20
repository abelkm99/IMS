import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VueWindowModal from 'vue-window-modal';
Vue.config.productionTip = false
Vue.use(VueWindowModal);
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
