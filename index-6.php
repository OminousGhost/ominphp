<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pdf_path = 'C:\EasyPHP-Devserver-17\eds-www\php\test.pdf';
    if (file_exists($pdf_path)) {
        header('Content-Type: application/pdf');
        readfile($pdf_path);
    } else {
        echo "Файл PDF не найден.";
    }
    ?>
</body>

</html>