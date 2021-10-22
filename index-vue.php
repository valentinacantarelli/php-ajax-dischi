<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi vue</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
       <img class="logo" src="./spotify-logo.png" alt="logo"> 
    </header>
    <main>
    <div id="root">
    <div class="container">
            
                <div class="card" v-for="(album,index) in albums">        
                    <img class="copertina"  :src="album.poster" alt="copertina">
                    <h3>{{album.title}}</h3>
                    <p class="sottotitolo">{{album.author}}</p>   
                    <p class="sottotitolo">{{album.year}}</p>
                </div>
               
        </div>
    </div>
    </main>
    


    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>