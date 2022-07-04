import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import producto from '../views/producto.vue'
import carcompras from '../views/carcompras.vue'
import login from '../views/login.vue'
import perfil from '../views/perfil.vue'
import homeView from "@/views/HomeView";
import register from "@/views/register";
import productodetalles from "@/views/productodetalles";

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'login',
    component: login
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
      path: '/productos/:5?',
      name: 'producto',
      component: () => import(/* webpackChunkName: "producto" */ '../views/producto.vue')
  },
  {
      path: '/carritocompras',
      name: 'carritocompras',
      component: carcompras
  },
  {
      path: '/login',
      name: 'login',
      component: login
  },
  {
      path: '/register',
      name: 'register',
      component: register
  },
  {
      path: '/perfil',
      name: 'perfil',
      component: perfil
  },
  {
      path: '/productodetalles',
      name: 'productodetalles',
      component: productodetalles
  }
]

const router = new VueRouter({
  routes
})

export default router
