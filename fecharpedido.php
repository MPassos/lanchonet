<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pedido Concluido</title>
<link rel="stylesheet" type="text/css" href="Layout.css" />
</head>

<body id="corpo">
<div id="header">
  Lanchonet
</div>
<div id="menu">
  <a class="link" href="cardapio.php">&nbsp;&nbsp;Cardapio &nbsp;&nbsp;&nbsp;</a>
  <a class="link" href="pedidos.php">&nbsp;&nbsp;Fila de Pedidos &nbsp;&nbsp;</a> 
</div>
<br class="clearfloat">
<div id="bgwhite">
<div id="conteudo">
<?php
include('php/connect.php');
$selectdesc = "SELECT descricao FROM pedido WHERE descricao = 'Pedido Novo'";
$desc = mysql_query($selectdesc);
if($desc == 'Pedido Novo')
{
 header("Location: cardapio.php");   
}else{
$update = "UPDATE pedido SET descricao = '$_POST[nome]',preco = '$_POST[valor]' WHERE id_pedido = '$_SESSION[idpedido]'";
if(!mysql_query($update)){
	die('Erro'.mysql_error());
}
?>
<p>Pedido Concluído</p>
<a href="pedidos.php">Ver Fila</a>
</div>
</div>
<?php } ?>
</body>
</html>