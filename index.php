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
                </div>
            <?php }?>    
        </div>

    </main>
    
</body>
</html>