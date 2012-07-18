<?php
session_start();
include 'php/connect.php';
$delete = "DELETE FROM pedidotembebida WHERE id_pedido = '$_SESSION[idpedido]' AND id_bebida = '$_REQUEST[id]' ";
mysql_query($delete);
header("Location: cardapio.php");
?>
