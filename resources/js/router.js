import {createRouter, createWebHistory} from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'home.index',
        component: () => import('./components/HomeComponent.vue'),
    },
    {
        path: '/news',
        name: 'news.index',
        component: () => import('./components/NewsComponent.vue'),
    },
    {
        path: '/feedback',
        name: 'feedback.index',
        component: () => import('./components/Feedback/IndexComponent.vue'),
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.VITE_BASE_URL),
    routes
});

export default router;
