<?php
declare(strict_types=1);
error_reporting(-1);



//1. Создать файл, записать в него текст построчно.
$handler = fopen("file.txt", 'w+');
$filePath = __DIR__ . '/file.txt';
for ($i = 1; $i <= 100; $i++) {
    file_put_contents($filePath, "product {$i}\n", FILE_APPEND);
}
fclose($handler);

/*
2. Открыть файл, проверить на существование,
считать файл. (тремя способами).
*/

//1 вариант
/*if (file_exists($filePath)) {
    $handler = fopen($filePath, 'rb+') or die ('Error open file');
    if ($handler) {
        while (false !== ($buffer = fgets($handler, 4096))){
            echo $buffer;
        }
    }
}*/

//2 вариант
/*if (file_exists($filePath)) {
    $data = file_get_contents($filePath);
    //$string = explode("\t\n", trim($data));
    print_r($data);
}*/

//3 вариант
/*if (file_exists($filePath)) {
    $fileRead = file($filePath);
    foreach ($fileRead as $line) {
        echo $line;
    }
}*/





?>


<div style="width:1000px;margin:150px auto 0 auto;">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="test"><br>
        <button type="submit">Отправить</button>
    </form>

</div>
