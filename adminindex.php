<?php
        session_start();
        if($_SESSION['funcao'] != 'Admnistrador')
        {
            header("Location: index.php?msg=1");
        }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Lanchonet</title>
  <link rel="stylesheet" type="text/css" href="Layout.css" />
</head>
<body id="corpo">
<div id="header">
  Lanchonet
</div>
<div id="menu">
  <a class="link" href="gerenciapedido.php">&nbsp;&nbsp;Gerenciar Pedidos &nbsp;&nbsp;&nbsp;</a>
  <a class="link" href="logout.php">&nbsp;&nbsp;Sair &nbsp;&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
<div id="conteudo">
  <p>Bem vindo ao sistema de gerencimento da LanchoNet</p>
  <p>Você está logado como <?php echo $_SESSION['nome']; ?> </p>
  <br>
  <br>
</div>
</div>
<br class="clearfloat">
<div id="footer">
Avenida Itabuna 760 - Ilhéus<br>
Telefone:(73)3634-5555<br>
Copyright&copy; Lanchonet&trade;
</div>
</body>
</html>