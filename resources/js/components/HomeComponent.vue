<template>
    <div class="news-container news-block">
        <template v-for="item in news">
            <div class="news-tile">
                <h2 class="news-title">{{ item.title }}</h2>
                <p class="news-text">{{ item.description }}</p>
                <p class="news-date">Дата публикации: {{ item.created_at }}</p>
            </div>
        </template>
    </div>
    <nav>
        <ul>
            <li>
                <router-link :to="{ name: 'news.index'  }">Все новости</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'feedback.index'  }">Форма обратной связи</router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'HomeComponent',

    data(){
        return {
            news: null,
        }
    },

    mounted() {
        this.getNews()
    },

    methods: {
        getNews(){
            axios.get('/api/home/news/')
                .then(response => {
                    this.news = response.data.data
                })
        }
    }
}
</script>

<style scoped>
    li{
        margin-bottom: 15px;
    }
</style>
