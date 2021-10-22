<?php

include __DIR__ ."/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
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
        <div class="container">
            <?php foreach($database as $albums){ ?>
                <div class="card">        
                    <img class="copertina"  src="<?php echo $albums['poster'];?>" alt="">
                    <h3><?php echo $albums['title']?></h3>
                    <p class="sottotitolo"><?php echo $albums['author']?></p>   
                    <p class="sottotitolo"><?php echo $albums['year']?></p>
                </div>
            <?php }?>    
        </div>
        <section>
            <h1> miao miao</h1>
                <ul>
                    <li>ciao</li>
                </ul>
            
        </section>

    </main>
    
</body>
</html>