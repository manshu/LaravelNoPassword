var vm =  new Vue({
    el: '#app',
    data: {
        pagination: {
            total: 0,
            per_page: 7,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 5,// left and right padding from the pagination <span>,just change it to see effects
        items: []
    },
    ready: function () {
        this.fetchItems(this.pagination.current_page);
    },
    computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    methods: {
        fetchItems: function (page) {
            var data = {page: page};
            this.$http.get('api/v1/pages', data).then(function (response) {
                //look into the routes file and format your response
                this.$set('items', response.data.data);
                this.$set('pagination', response.data.pagination);
            }, function (error) {

            });
        },
        changePage: function (page) {
            this.pagination.current_page = page;
            this.fetchItems(page);
        }
    }
});