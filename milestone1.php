<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        require_once __DIR__ . "/databaseDischi.php";
    ?>

    <nav>
    </nav>

    <main>
        <div class="container">

            <?php
                foreach($albums as $albums) {
            ?>
            
            <div class="album-container">
                
                <div class="album-box">
                    <img class="poster" src="<?php echo "{$albums['poster']}";?>" alt="<?php echo "{$albums['title']} Poster";?>">
                    
                    <div class="album-title">
                        <h2><?php echo "{$albums['title']}";?></h2>
                    </div>
                    
                    <div class=album-info>
                        <?php echo "{$albums['author']}";?>
                        <?php echo "{$albums['year']}";?>
                    </div>
                </div>
    
            </div>
            
            <?php 
            }; 
            ?>
            
            

        </div>

    </main>

</body>
</html>

</body>
</html>