import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler'
import Index from './components/Index.vue'

import router from './router.js'

const app = createApp({
    components: {
        Index,
    }
});

app.use(router)
app.mount("#app")
