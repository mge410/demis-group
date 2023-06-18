<template>
    <div class="container">
        <p class="text-success" v-if="successMessage">{{ successMessage }}</p>

        <h1 class="feedback_title">Форма обратной связи</h1>
        <form id="feedback-form">
            <div class="form-group">
                <label for="name">*ФИО:</label>
                <input :class="errors && errors.name ? 'error' : ''" v-model="name" type="text" id="name" name="name" required>
                <span v-if="errors && errors.name" class="error-message">Пожалуйста, введите ФИО.</span>
            </div>
            <div class="form-group">
                <label for="address">Адрес:</label>
                <input type="text" v-model="address" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">*Телефон:</label>
                <input :class="errors && errors.phone ? 'error' : ''" type="tel" v-model="phone" id="phone" name="phone" required>
                <span v-if="errors && errors.phone" class="error-message">Пожалуйста, введите корректный телефон.</span>
            </div>
            <div class="form-group">
                <label for="email">*E-mail:</label>
                <input :class="errors && errors.email ? 'error' : ''" type="email" v-model="email" id="email" name="email" required>
                <span v-if="errors && errors.email" class="error-message">Пожалуйста, введите корректный e-mail.</span>
            </div>
            <button @click.prevent="store" type="submit">Отправить</button>
        </form>
    </div>
</template>

<script>

export default {
    name: 'CreateComponent',

    data(){
        return {
            name: null,
            address: null,
            phone: null,
            email: null,

            errors: {},

            successMessage: '',
        }
    },

    methods: {
        store(){
            this.successMessage = ''

            axios.post('/api/feedback/store', {
                name: this.name,
                address: this.address,
                phone: this.phone,
                email: this.email,
            }).then((response) => {
                this.$parent.printData(response.data)

                this.name = null
                this.address = null
                this.phone = null
                this.email = null
                this.errors = {}
                this.successMessage = 'Спасибо! Мы обязательно с вами свяжемся!'
            }).catch((error) => {
                if (error.response.status === 422){
                    this.errors = error.response.data.errors
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
