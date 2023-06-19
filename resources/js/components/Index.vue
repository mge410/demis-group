<template>
    <div>
        <header>
            <nav>
                <ul>
                    <li>
                        <router-link :to="{ name: 'home.index'  }">Home</router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'news.index'  }">News</router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'feedback.index'  }">Feedback</router-link>
                    </li>
                </ul>
            </nav>
        </header>
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
