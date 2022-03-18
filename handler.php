<?php
declare(strict_types=1);
error_reporting(-1);

session_start();

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

