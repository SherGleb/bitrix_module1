<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <?php
        $target_dir = "csv_files/";
        $target_file = "";

        // Проверка загрузки файла.
        if ($_FILES["fileToUpload"]["name"] != ''){

            $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

            // Проверка расширения файлов.
            if($imageFileType != "csv") {
                echo "Загружать можно только файлы с расширением csv.";
            }
            else {

                // Создание уникального имени для файла.
                do {
                    $target_file = $target_dir . uniqid() . basename($_FILES["fileToUpload"]["name"]);
                } while (file_exists($target_file));

                // Загрузка файла на сервер.
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "<table class='table table-striped'>\n\n";

                    // Вывод csv файла в виде таблицы.
                    $f = fopen($target_file, "r");
                    while (($line = fgetcsv($f)) !== false) {
                            echo "<tr>";
                            foreach ($line as $cell) {
                                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                            }
                            echo "</tr>\n";
                    }
                    fclose($f);
                    echo "\n</table>";

                } else {
                    echo "Возникла ошибка при загрузке файла. ";
                }
            }
        }
    ?>
</body>
</html>