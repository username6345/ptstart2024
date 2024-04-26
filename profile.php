
<!DOCTYPE html>
<html lang="ru">

<head>  <!-- не виден юзерам -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Цыганов Д.И</title>

    <!-- под bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />

    <link rel="stylesheet" href="css/style.css">  <!--  подкл css-->
</head>

<body> <!-- то что будет на сайте -->

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-4 nav_logo"></div>
                <div class="nav_text">нажмите win + d  и все вкладки свернуться </div>
            </div>
       
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, ( ͡~ ͜ʖ ͡°) <?php echo $_COOKIE['User']; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <h2>
                    Спец по ИБ хратит и защищает не только чужую инфу , но и свою 
                </h2>

            </div>
            <div class="col-6">
                <div class="row my_photo"></div>
               <!--  <div class="row"> <img class="img_size" src="photo/photo1.png" alt="my_photo1"</div>-->
                <div class="row"> <p>БАЗА данных должна расти!Цыганов Д.И </div>
            </div>
        </div>
    </div> 


    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton" class="button" style="background-color: #40a74d;">no click on me, I am scam</button>
                <div id="demo"></div>
                
            </div>
        </div>
    </div>

    <div class="col-12">
            <form method="POST" action="profile.php">
                <input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
                <button type="submit" class="btn_red" name="submit">Сохранить пост!<button>
            </form> 
        </div>


    <script type="text/javascript" src="js/js-file.js"> </script>
</body>

</html>