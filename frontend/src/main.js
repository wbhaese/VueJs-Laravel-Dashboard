import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

import LoginComponent from './pages/Login/LoginComponent' 
const Bar = { template: '<div>bar</div>' }

Vue.config.productionTip = false
Vue.use(VueRouter)

const routes = [
  { path: '/', component: LoginComponent  },
  { path: '/oi', component: Bar  },
  
]

const router = new VueRouter({
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
