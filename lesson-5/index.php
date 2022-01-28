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
/*$fileTest = __DIR__ . "test.txt";
if (file_exists($filePath)) {
    echo 'Файл найден!' . PHP_EOL;
    $fileRead = file($filePath||$fileTest);
    foreach ($fileRead as $line) {
        echo $line;
    }
} else {
    echo "Файл не обнаружен!" . PHP_EOL;
}*/

//3. Переименовать файл.
$filePath = __DIR__ . "/file2.txt";
$handler = fopen($filePath, "a+");
rename($filePath, "reFile.txt");

//4. Сделать копию файла и скопировать в другую директорию.
$filePath = __DIR__ . "/resource";
copy("file.txt", "{$filePath}/test.txt");


?>


<div style="width:1000px;margin:150px auto 0 auto;">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="test"><br>
        <button type="submit">Отправить</button>
    </form>

</div>
