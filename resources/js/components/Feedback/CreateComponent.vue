<template>
    <div class="container">
        <h1 class="feedback_title">Форма обратной связи</h1>
        <form id="feedback-form">
            <div class="form-group">
                <label for="name">*ФИО:</label>
                <input class="error" type="text" id="name" name="name" required>
                <span class="error-message">Пожалуйста, введите ФИО.</span>
            </div>
            <div class="form-group">
                <label for="address">Адрес:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">*Телефон:</label>
                <input class="error" type="tel" id="phone" name="phone" required>
                <span class="error-message">Пожалуйста, введите корректный телефон.</span>
            </div>
            <div class="form-group">
                <label for="email">*E-mail:</label>
                <input class="error" type="email" id="email" name="email" required>
                <span class="error-message">Пожалуйста, введите корректный e-mail.</span>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</template>

<script>
export default {
    name: 'FeedbackComponent',
}
</script>

<style scoped>

</style>
