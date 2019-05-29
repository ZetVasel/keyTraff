<?php

function doTable(array $columnName,array $dataArray)
{
    $table="<table class='table table-hover table_response' border='2'><thead><tr>";

    foreach ($columnName as $th)
      {
          $table.="<th>{$th}</th>";
      }
      $table.="</tr></thead><tbody>";


    foreach ($dataArray as $items )
    {
        $table.="<tr>";
        foreach ($items as $item)
        {
            $table.="<td>{$item}</td>";
        }
        $table.="</tr>";
    }

    return $table.=" </tbody></table>";
}

$db=new mysqli('localhost','root','','new_test');

$request=$_POST['type'];
$result='';

switch ($request)
{

    case 1:
        $orderList=$db->query("SELECT requests.id, offers.name,requests.price,requests.count,operators.fio
        FROM requests
        LEFT JOIN offers
        ON requests.offer_id=offers.id
        LEFT JOIN operators
        ON requests.operator_id=operators.id
        WHERE requests.count>2 AND (requests.operator_id=10 OR requests.operator_id=12);")->fetch_all(MYSQLI_ASSOC);
        $result=doTable(['№ заказа','Имя товара','Цена товара','Стоимость товара','ФИО менеджера'],$orderList);
        break;
    case 2:
        $itemOffers=$db->query("
        SELECT  offers.name AS товар, SUM(requests.price*requests.count) AS 'общая сумма по товару'
        FROM requests
        LEFT JOIN offers
        ON requests.offer_id=offers.id
        GROUP BY offers.name;")->fetch_all(MYSQLI_ASSOC);
        $result=doTable(['Наименование товара','Общая сумма по товару'],$itemOffers);
}

echo $result;