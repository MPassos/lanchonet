<?php
session_start();
include 'php/connect.php';
$insertpedido = "INSERT INTO pedido (descricao,preco) VALUES ('Pedido Novo','0')";
mysql_query($insertpedido);
$sql = "SELECT * FROM pedido WHERE descricao = 'Pedido Novo'";
$resultado = mysql_query($sql);
$row = mysql_fetch_array($resultado);
$_SESSION['idpedido'] = $row['id_pedido'];
$insert = "INSERT INTO usuariofazpedido (id_usuario,id_pedido) VALUES ('$_SESSION[id]',$_SESSION[idpedido])";
mysql_query($insert);
header("Location: cardapio.php");
?>
