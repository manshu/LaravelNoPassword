var vm =  new Vue({
    el: '#app',
    methods: {
        fetchPosts: function () {
            this.$http.get('api/v1/pages', function (data) {
                data.status;
                this.$set('posts', data)
            })
        }
    },
    ready: function () {
        this.fetchPosts()
    }
});
//# sourceMappingURL=app.js.map
