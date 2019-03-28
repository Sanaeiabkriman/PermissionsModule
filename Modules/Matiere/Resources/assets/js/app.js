import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './components/app.vue';
import Create from './components/CreateComponent.vue';
import Index from './components/IndexComponent.vue';
import Edit from './components/EditComponent.vue';


const routes = [
  {
    name: "index",
    path: "/chapitres",
    component: Index
  },
  {
    name: "create",
    path: "/chapitres/create",
    component: Create
  },
  {
    name: "edit",
    path: "/edit/:id",
    component: Edit
  },
];


const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
new Vue(Vue.util.extend({ router }, Index)).$mount('#index');