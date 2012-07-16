<?php   
        session_start();
        unset($_SESSION['nome']);
	unset($_SESSION['login']);
	unset($_SESSION['id']);
	session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Lanchonet</title>
  <link rel="stylesheet" type="text/css" href="Layout.css" />
</head>
<body id="corpo">
<div id="header">
    Pedidos
</div>
<div id="menu">
  <a class="link" href="index.php">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
<div id="conteudo">
	<img id="imagem" src="img/bandeja.png" alt="bandeja" height="189">
	<?php
	include('php/connect.php');
	$result = mysql_query("SELECT descricao FROM pedido");
	while($row = mysql_fetch_array($result)){	
	?>
    <p><?php echo $row['descricao'] ?></p>
    <?php
	}
	?>
  <br><br>
  Tempo Estimado para conclus�o do pedido: 30 min
</div></div>
<br class="clearfloat">
<div id="footer">
Avenida Itabuna 760 - Ilh�us<br>
Telefone:(73)3634-5555<br>
Copyright&copy; Lanchonet&trade;
</div>
</body></html>