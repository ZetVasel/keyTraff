<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Something</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="table table-hover table_quest" border="2">
    <thead>
    <tr>
        <th>Номер задание </th>
        <th>Пример выполнения</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>1) Номер заказа, имя товара, цена, количество, имя оператора
            который за которым числится заказ ГДЕ количество товара >2 И id оператора 10 ИЛИ 12</td>
        <td><button class="btn btn-success" id="first">Результат</button></td>

    </tr>
    <tr>
        <td>2) Имя товара, количество товара, и сумма (price) по каждому товару (сгруппировать)</td>
        <td><button class="btn btn-success" id="second">Результат</button></td>

    </tr>

    </tbody>
</table>
<hr>

<div id="result"></div>
</body>
</html>