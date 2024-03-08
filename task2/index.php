<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous">
    <!-- Дополнительные стили Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha512-iy8EXLW01a00b26BaqJWaCmk9fJ4PsMdgNRqV96KwMPSH+blO82OHzisF/zQbRIIi8m0PiO10dpS0QxrcXsisw==" crossorigin="anonymous">
</head>
<body>
    <form action="action.php" method="post" enctype="multipart/form-data">
    <div class = "form-group">
        <label for="fileToUpload">Загрузка файла:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <p class="help-block">Загрузите scv файл</p>
    </div>  
    <button type="submit" class="btn btn-default">Загрузить</button>		
    </form>
    
</body>
</html>