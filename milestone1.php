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
        require_once __DIR__ . "/albums.php";
    ?>

    <nav>
    </nav>

    <main>
        <div class="container">

            
            <?php
                foreach($albums as $albums) {
                
                    echo
            
                    "<div class=album-container>" . 
                
                        "<div class=album-box>".
                            "<img class=poster src= {$albums['poster']} <alt= {$albums['title']} >" .
                    
                            "<div class=album-title>" . 
                                "<h2>" . "{$albums['title']}" . "</h2>" .
                            "</div>" .
                    
                            "<div class=album-info>" .
                                "{$albums['author']}" .
                                "{$albums['year']}" .
                            "</div>" .
                        "</div>" .
    
                    "</div>" ;
                }; 
            ?>
            
            

        </div>

    </main>

</body>
</html>

</body>
</html>