import Vue from 'vue'
import Router from 'vue-router'
//import Pagrindinis from './views/Pagrindinis.vue'
import HomeComponent from './components/HomeComponent.vue';
import Ideti_SkelbimaComponent from './components/Ideti_SkelbimaComponent.vue';

Vue.use(Router)

export default new Router({
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeComponent
    },
    {
      name: 'ideti_skelbima',
      path: '/ideti_skelbima',
      component: Ideti_SkelbimaComponent
    },
  ],
 
})
