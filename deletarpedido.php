<?php
include 'php/connect.php';
$sql1 = "DELETE FROM pedidotembebida WHERE id_pedido = '$_POST[id]'";
$sql2 = "DELETE FROM pedidotemcomida WHERE id_pedido = '$_POST[id]'";
$sql3 = "DELETE FROM usuariofazpedido WHERE id_pedido = '$_POST[id]'";
$sql4 = "DELETE FROM pedido WHERE id_pedido = '$_POST[id]'";
mysql_query($sql1);
mysql_query($sql2);
mysql_query($sql3);
mysql_query($sql4);
header("Location: gerenciapedido.php?msg=1");
?>
