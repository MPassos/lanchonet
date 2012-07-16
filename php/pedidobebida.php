<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pedido Atualizado</title>
<link rel="stylesheet" type="text/css" href="../Layout.css" />
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
<div id="login">	
Login:
Senha:
</div>
<div id="bgwhite">
<div id="conteudo">
<?php
include('connect.php');
$idbeb = mysql_query("SELECT id_bebida FROM bebida WHERE nome = '$_POST[bebida]'");
$row = mysql_fetch_array($idbeb);
$id = $row['id_bebida'];
$insert = "INSERT INTO pedidotembebida (id_pedido,id_bebida,quantidade,observacao) VALUES ('$_SESSION[idpedido]','$id','$_POST[quantidade]','$_POST[observacao]')";
if(!mysql_query($insert)){
			die('Erro: '.mysql_error());
		}
?>
<p>Pedido Atualizado</p>
<a href="../cardapio.php">Voltar ao Cardápio</a>
</div>
</div>
</body>
</html>