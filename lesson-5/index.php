<?php
declare(strict_types=1);
error_reporting(-1);


//1 задание. Создать файл, записать в него текст построчно.

$fileName = 'test.txt' . "\n";

$filePath = __DIR__ . '/test1.txt';

if (!is_writable($filePath)) {
    echo 'Файл ' . " {$filePath} " . ' недоступен для записи';

} else {
    $fp = fopen($filePath, 'a');
    if (!$fp) {
        echo "Не могу открыть файл {$filePath}";
        exit;
    }
    if (fwrite($fp, $fileName) === false) {
        echo "Не могу произвести запись в файл {$filePath}";
    }
    echo "Ура записали {$fileName} в файл {$filePath}";
    fclose($fp);
}

/*
2 задание. Открыть файл, проверить на существование,
считать файл. (тремя способами).
*/

//1 вариант

if (file_exists($filePath)) {
    $handler = fopen($filePath, 'rb+') or die ('Error open file');
    if ($handler) {
        while (false !== ($buffer = fgets($handler, 4096))){
            echo $buffer;
        }
    }
}

//2 вариант

if (file_exists($filePath)) {
    $data = file_get_contents($filePath);
    print_r($data);
}

//3 вариант

$fileTest = __DIR__ . "test.txt";
if (file_exists($filePath)) {
    echo 'Файл найден!' . PHP_EOL;
    $fileRead = file($filePath||$fileTest);
    foreach ($fileRead as $line) {
        echo $line;
    }
} else {
    echo "Файл не обнаружен!" . PHP_EOL;
}

//3 задание. Переименовать файл.

$filePath = __DIR__ . "/file2.txt";
$handler = fopen($filePath, "a+");
rename($filePath, "reFile.txt");


//4 задание. Сделать копию файла и скопировать в другую директорию.
$filePath = __DIR__ . "/resource";
copy("file.txt", "{$filePath}/test.txt");

//5 задание. Получить размер файла, и вывести его.

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$file = $_FILES['test'];
$fileSize = $file['size'];
debug($file);
echo "Размер файла: {$fileSize}";

/*
6 задание. Создать форму загрузки файла, изображения.
(сделать проверки на возможные ошибки загрузки,
допустимый размер файла 1М.). Вывести загруженный файл.
*/

if (!empty($_FILES['image'])) {
    $file = $_FILES['image'];
    $fileName = $file['name'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileTmp = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $whiteList = ['png', 'jpg'];

    $errors = [];

    if ($fileError > 0) {
        $errors['error'] = $fileError;
    }

    if (!in_array($fileExt, $whiteList)) {
        $errors['errorExt'] = 'Неверное расширение файла';
    }

    if ($fileSize > 1024 * 1024) {
        $errors['errorSize'] = 'размер файла превышает 1MB';
        //die ($errors['errorSize']);
    }

    if (!empty($errors)) {
        $_SESSION['error'] = $errors;
    } else {
        $fileName = uniqid('') . '.' . $fileExt;
        $filePath = __DIR__ . "/resource/{$fileName}";
        if (move_uploaded_file($fileTmp, $filePath)) {
            $_SESSION['file'] = $fileName;
            $_SESSION['success'] = 'Файл загружен';
        }
    }
    header("Location: page.php");
    die;
}

?>

<div style="width:1000px;margin:150px auto 0 auto;">
    <?php if (!empty($_SESSION['error'])): ?>
        <?php foreach ($_SESSION['error'] as $value): ?>
            <?php echo $value; ?>
        <?php endforeach; ?>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <?php if (!empty($_SESSION['success'])): ?>

        <?php echo $_SESSION['success']; ?>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br>
        <button type="submit"> Отправить </button>
    </form>
    <?php if (!empty($_SESSION['file'])): ?>
        <img src="resource/<?php echo $_SESSION['file']; ?>" alt=""/>
        <?php unset($_SESSION['file']); ?>
    <?php endif; ?>
</div>