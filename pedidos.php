<?php   
        session_start();
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
    <h5>Você está logado como <?php echo $_SESSION['login']; ?> </h5>
<div id="menu">
    <a class="link" href="criarpedido.php">&nbsp;&nbsp;Novo Pedido&nbsp;&nbsp;</a>
    <a class="link" href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
<div id="conteudo">
	<img id="imagem" src="img/bandeja.png" alt="bandeja" height="189">
	<?php
	include('php/connect.php');
        $selectdesc = "SELECT * FROM pedido WHERE descricao = 'Pedido Novo' OR descricao = ''";
        $desc = mysql_query($selectdesc);
        $row = mysql_fetch_array($desc);
        if($row['descricao'] == 'Pedido Novo' || $row['descricao'] == '' && $row['id_pedido'] == $_SESSION['idpedido'])
        {
        header("Location: cardapio.php?msg=1");   
        }
	$result = mysql_query("SELECT * FROM usuariopedido WHERE Data = CURRENT_DATE");
	while($row = mysql_fetch_array($result)){	
	?>
    <?php if($_SESSION['id'] == $row['Usuario'])
    {
        echo "<b><p>".$row['Descricao']."</b></p>";
    }else
    echo "<p>".$row['Descricao']."</p>"; ?>
    <?php
	}
	?>
  <br><br>
  Seus pedidos estão em negrito !
</div></div>
<br class="clearfloat">
<div id="footer">
Avenida Itabuna 760 - Ilh�us<br>
Telefone:(73)3634-5555<br>
Copyright&copy; Lanchonet&trade;
</div>
</body></html>