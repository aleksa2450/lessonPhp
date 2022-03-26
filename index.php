<?php
declare(strict_types=1);
error_reporting(-1);

require __DIR__ . '/lib/function.php';

$dbh = createCommand();

if (!empty($_POST)) {
    $data = validate($_POST);
    //print_r($data);
    //search($data, $dbh);
 /*   foreach($data as $key => $value) {
        echo $key;die;
    }*/
    print_r(search($data, $dbh));
    //$products = search($data, $dbh);
}














?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div style="margin:100px 0 0 0"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post">
                <div class="mb-3">
                    <label for="from_data" class="form-label">Дата от</label>
                    <input name="from_data" value="" type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="to_data" class="form-label">Дата до</label>
                    <input name="to_data" value="" type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="from_price" class="form-label">Цена от</label>
                    <input name="from_price" value="" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="to_price" class="form-label">Цена до</label>
                    <input name="to_price" value="" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="from_quantity" class="form-label">Количество от</label>
                    <input name="from_quantity" value="" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="to_quantity" class="form-label">Количество до</label>
                    <input name="to_quantity" value="" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <table class="table">
                <tbody>
                <?php if (!is_null($products)): ?>
                    <?php foreach ($products as $value): ?>
                        <tr>
                            <th scope="row"><?php echo $value['id']; ?></th>
                            <td><?php echo $value['title']; ?></td>
                            <td><?php echo $value['price']; ?></td>
                            <td><?php echo $value['quantity']; ?></td>
                            <td><?php echo $value['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<!-- Необязательный JavaScript; выберите один из двух! -->

<!-- Вариант 1: пакет Bootstrap с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Вариант 2: отдельные JS для Popper и Bootstrap -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>
















