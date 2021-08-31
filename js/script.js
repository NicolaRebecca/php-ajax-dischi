new Vue (
    {
        el: '#app',
        data: {
            dischi: []            
        },
        created () {
            axios.get('http://localhost:8888/php-ajax-dischi/databaseDischi.php').then((result) => {
              this.albums = result.data.response;
            })
        }

    }
)