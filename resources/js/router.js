import { createRouter, createWebHistory } from 'vue-router';
import CourrierEntrants from './components/CourrierEntrants.vue';
import CourrierSortants from './components/CourrierSortants.vue';
import Users from './components/Users.vue';
import Login from './components/Login.vue';

const routes = [
  { path: '/courrier-entrants', component: CourrierEntrants },
  { path: '/courrier-sortants', component: CourrierSortants },
  { path: '/users', component: Users },
  { path: '/login', component: Login },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
