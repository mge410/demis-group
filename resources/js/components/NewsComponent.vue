<template>
    <div class="news-container">
        <template v-for="item in news">
            <div class="news-tile">
                <h2 class="news-title">{{ item.title }}</h2>
                <p class="news-text">{{ item.description }}</p>
                <p class="news-date">Дата публикации: {{ item.created_at }}</p>
            </div>
        </template>
    </div>
</template>

<script>
export default {
    name: 'NewsComponent',

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
            axios.get('/api/news/')
            .then(response => {
                this.news = response.data.data
            })
        }
    }
}
</script>

<style scoped>

</style>
