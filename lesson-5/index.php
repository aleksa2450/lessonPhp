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






?>


<div style="width:1000px;margin:150px auto 0 auto;">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="test"><br>
        <button type="submit">Отправить</button>
    </form>

</div>
