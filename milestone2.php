<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>  
    <title>Document</title>
</head>
<body>
    

    <div id="app">

        <div class="album-container">
            <div class="album-box" v-for="album in albums">
                <img class="poster" :src="album.poster" alt="">
                    
                <div class="album-title">
                    <h2> {{album.title}} </h2>
                </div>
                    
                <div class="album-info">
                    {{album.author}}
                    {{album.year}}
                </div>
            </div>
        </div>


    </div>


    <script src=".js/script.js"></script>
    


</body>
</html>