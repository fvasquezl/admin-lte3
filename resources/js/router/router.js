import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Users from '../components/views/Users'

const routes = [
    { 
        path: '/users', component: Users 
    },
];

const router = new VueRouter({
        routes,
        hashbang:false,
        mode:'history'
})

export default router;