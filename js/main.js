const app = new Vue(
    {
        el: '#root',
        data{
            album:[],
        },
        created(){
            axios.get('http://localhost/php-ajax-dischi/api/index.php')
		    .then((response) => {
			// handle success
			this.album = response.data;
		})
        }
    }
);