const app = new Vue(
    {
        el: '#root',
        data:{
            albums:[],
        },
        created(){
            axios.get('http://localhost/php-ajax-dischi/api/index.php')
		    .then((response) => {
			this.albums = response.data;
            console.log(this.albums);
		})
        }
    }
);