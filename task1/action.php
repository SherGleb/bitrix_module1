<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php
    $target_dir = "images/";
    $target_file = "";

    // Проверка загрузки файла.
    if ($_FILES["fileToUpload"]["name"] != ''){

        $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

        // Проверка расширения файлов.
        if($imageFileType != "jpg" && $imageFileType != "png" ) {
            echo "Для загрузки изображения разрешены только типы png и jpg. ";
          }
        else {
            // Создание уникального имени для изображения.
            do {
                $target_file = $target_dir . uniqid() . basename($_FILES["fileToUpload"]["name"]);
            } while (file_exists($target_file));
            
            // Загрузка файла на сервер.
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Файл ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " был загружен. ";
              } else {
                echo "Возникла ошибка при загрузке файла. ";
              }
        }
    }

    // Формирование сообщения.
    $text = $_POST['name'] . "\n" . $_POST['email'] . "\n" . $_POST['message'] . "\n" . $target_file;

    // Создание уникального имени файла с сообщением.
    do {
        $filename = "messages/" . uniqid() . ".txt";
    } while (file_exists($filename));

    // Запись сообщения в файл на сервере.
	$fp = fopen($filename, "w");
	fwrite($fp, $text);
	fclose($fp);
    echo "Сообщение отправлено."
?>
</body>
</html>