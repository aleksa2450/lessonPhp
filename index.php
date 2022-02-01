<?php
declare(strict_types=1);
error_reporting(-1);

session_start();

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo'</pre>';
}

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
       // die ($errors['error']);
    }

    if (!in_array($fileExt, $whiteList)) {
        $errors['errorExt'] = 'Неверное расширение файла';
        //die ($errors['errorExt']);
    }

    if ($fileSize > 1024 * 1024) {
        $errors['errorSize'] = 'размер файла превышает 1MB';
        //die ($errors['errorSize']);
    }

    if (!empty($errors)) {
        $_SESSION['error'] = $errors;
    } else {
        $fileName = uniqid('') . '.' . $fileExt;
        //$fileName = 'myfile.' . $fileExt;
        $filePath = __DIR__ . "/resource/{$fileName}";
        if (move_uploaded_file($fileTmp, $filePath)) {
            $_SESSION['file'] = $fileName;
            $_SESSION['success'] = 'Файл загружен';
        }
    }
    header("Location: page.php");
    die;
}


//1.Задание
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


//5.Задание
/*function debug($data)
{
    echo'<pre>';
    print_r($data);
    echo '</pre>';
};*/



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
    <form action="handler.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br>
        <button type="submit"> Отправить </button>
    </form>
    <?php if (!empty($_SESSION['file'])): ?>
    <img src="resource/<?php echo $_SESSION['file']; ?>" alt=""/>
        <?php unset($_SESSION['file']); ?>
    <?php endif; ?>
</div>




