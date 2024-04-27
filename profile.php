<!DOCTYPE html>
<html lang="ru">

<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цыганов Д.И</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body> 

    <div class="container">
        <div class="row">
            <div class="col-4 nav_logo"></div>
            <div class="nav_text">нажмите win + d и все вкладки свернутся</div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">Привет, ( ͡~ ͜ʖ ͡°) <?php echo $_COOKIE['User']; ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <h2>Спец по ИБ хранит и защищает не только чужую информацию, но и свою</h2>
            </div>
            <div class="col-6">
                <div class="row my_photo"></div>
                <div class="row"><p>База данных должна расти! Цыганов Д.И</p></div>
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

    <div class="container centered-form">
        <div class="row">
            <div class="col-md-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['user:']; ?>
                </h1>
            <div class="col-md-6">
                
                <form method="POST" action="profile.php">
                    <input type="text" class="form" cols="145" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" class="form" cols="145" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
                    <button type="submit" class="btn btn-danger btn-block" name="submit">Сохранить пост!</button>
                </form>
            </div>
        </div>
    </div>
    


    <script type="text/javascript" src="js/js-file.js"></script>
</body>

</html>


<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root' , 'kali' , 'first');

if (isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $main_text =$_POST['text'];
    if(!$title || ! $main_text)die("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if(!mysqli_query($link, $sql)) die("Не удалось добавить пост");

}
?>
