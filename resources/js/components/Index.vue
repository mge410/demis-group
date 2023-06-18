<template>
    <div>
        <router-link :to="{ name: 'home.index'  }">Home</router-link>
        <router-link :to="{ name: 'news.index'  }">News</router-link>
        <router-link :to="{ name: 'feedback.index'  }">Feedback</router-link>
        <router-view/>
    </div>
</template>

<script>
    export default {
        name: 'Index',
    }
</script>

<style scoped>

</style>
