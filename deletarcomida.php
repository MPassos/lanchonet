<?php
session_start();
include 'php/connect.php';
$delete = "DELETE FROM pedidotemcomida WHERE id_pedido = '$_SESSION[idpedido]' AND id_comida = '$_REQUEST[id]' ";
mysql_query($delete);
header("Location: cardapio.php");
?>
