ELEMENT.locale(ELEMENT.lang.en)

new Vue({
    el : '#index_app',
    data: function() {
        return {
            testdata : 'hello world'
        }
    },
    methods: {
        onregister: function() {
            window.location.href = "dev_register";
        }
    }
})