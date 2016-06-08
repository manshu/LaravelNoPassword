var vm =  new Vue({
    el: '#post',
    methods: {
      showPost: function () {

      }  
    },
    ready: function () {
        var resource = this.$resource('/api/v1/pages/:id');
        resource.get({id: 1}, function (item) {
            console.log(item)
        })

        this.showPost()
    }
})