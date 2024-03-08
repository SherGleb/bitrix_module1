<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous">
    <!-- Дополнительные стили Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha512-iy8EXLW01a00b26BaqJWaCmk9fJ4PsMdgNRqV96KwMPSH+blO82OHzisF/zQbRIIi8m0PiO10dpS0QxrcXsisw==" crossorigin="anonymous">
</head>
<body>
<form action="action.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class = "form-group row">
            <label for="name">Ваше имя:</label>
            <input required class="form-control" name="name" id="name" type="text" placeholder="Имя пользователя">
        </div>

        <div class = "form-group row">
            <label for="email">Ваш email:</label>
        <input required class="form-control" name="email" id="email" type="email" placeholder="Эл. адрес">
        </div>

        <div class = "form-group row">
            <label for="message">Введите сообщение:</label>
            <input required class="form-control" name="message" id="message" type="text" placeholder="Сообщение">
        </div>

        <div class = "form-group row">
            <label for="fileToUpload">Загрузка файла:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <p class="help-block">Загрузите изображение формата png или jpg</p>
        </div>  
        <button type="submit" class="btn btn-default row">Отправить</button>
    </div>
</form>
</body>
</html>