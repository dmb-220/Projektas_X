// Axios & Echo global
require('./bootstrap');

/* Core */
import Vue from 'vue'

import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//import VueHtmlToPaper from 'vue-html-to-paper';
 
//const options = {
  //name: '_blank',
  //specs: [
   // 'fullscreen=yes',
  //],
  //styles: [
   // 'https://unpkg.com/buefy/dist/buefy.min.css',
   // 'http://app.test/css/print.css',
 // ]
//}
 
//Vue.use(VueHtmlToPaper, options);
// or, using the defaults with no stylesheet
//Vue.use(VueHtmlToPaper);


/* Router & Store */
import router from './router'
//import store from './store'

/* Vue. Main component */
import App from './App.vue'

Vue.config.productionTip = false

/* Main component */
Vue.component('App', App)

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')