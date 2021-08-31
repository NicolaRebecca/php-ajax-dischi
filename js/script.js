new Vue (
    {
        el: '#app',
        data: {
            albums: []            
        },
        created () {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php').then((result) => {
              this.albums = result.data.response;
            })
        }

    }
)