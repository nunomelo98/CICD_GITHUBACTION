<?php
require 'conf.inc.php';
//Fazendo consulta no Banco de Dados
$Qrcreate = "SELECT *  FROM " . PARAGEM4. "";
$create   = mysqli_query($link,$Qrcreate);
while ($row = mysqli_fetch_assoc($create)) {
    $vector[] = $row;
}

echo json_encode($vector);

?>