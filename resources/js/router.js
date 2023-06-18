import {createRouter, createWebHistory} from 'vue-router';

import HomeComponent from "./components/HomeComponent.vue";
import NewsComponent from "./components/NewsComponent.vue";
import FeedbackComponent from "./components/FeedbackComponent.vue";

const routes = [
    {
        path: '/',
        name: 'home.index',
        component: HomeComponent,
    },
    {
        path: '/news',
        name: 'news.index',
        component: NewsComponent,
    },
    {
        path: '/feedback',
        name: 'feedback.index',
        component: FeedbackComponent,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.VITE_BASE_URL),
    routes
});

export default router;
