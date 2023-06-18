<template>
    <div>
        <CreateComponent/>
        <table v-if="data" class="contact-table">
            <tr v-if="data.name">
                <td>Имя:</td>
                <td>{{ data.name }}</td>
            </tr>
            <tr v-if="data.address">
                <td>Адрес:</td>
                <td>{{ data.address }}</td>
            </tr>
            <tr v-if="data.phone">
                <td>Телефон:</td>
                <td>{{ data.phone }}</td>
            </tr>
            <tr v-if="data.email">
                <td>Email:</td>
                <td>{{ data.email }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent.vue";

export default {
    name: 'FeedbackComponent',
    components: {CreateComponent},

    data() {
        return {
            data: {},
        }
    },

    methods: {
        printData(data) {
            this.data.name = data.name
            this.data.address = data.address
            this.data.phone = data.phone
            this.data.email = data.email
        }
    }
}
</script>

<style scoped>

</style>
