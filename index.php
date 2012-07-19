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
  Lanchonet
</div>
<div id="menu">
  <a class="link" href="login.php">&nbsp;&nbsp;Login &nbsp;&nbsp;&nbsp;</a>
  <a class="link" href="cadastro.html">&nbsp;&nbsp;Cadastro&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
    <?php 
    if(isset($_REQUEST['msg']))
    {
      switch($_REQUEST['msg'])
      {
          case 1:
              echo "<b><p>Área restrita a admnistradores do Sistema </b></p>";
              break;
          case 2:
              echo "<b><p>Você efetuou o logout com sucesso </b></p>";
              break;
      }   
    }
?>
<div id="conteudo">
  Nada como um bom lanche sem demora, não é?<br>
  Essa é a proposta da Lanchonet!<br>
  Aqui você faz seu pedido sem sair de casa, direto da internet e então é só esperar pela chegada de seu banquete.<br>
  Não precisa mais ficar esperando na mesa, sofrendo ao observar os outros clientes deliciando-se enquanto seu pedido é preparado.<br>
  Com nosso sistema de estimativa de tempo de preparo, você só precisa sair de casa na hora que seu lanche estiver pronto.<br>
  Com um cardápio diversificado e flexível não há mais nada a esperar, a não ser satisfação e o estômago cheio!<br>
  <br>
  <br>
  <ul>
  <img src="img/hamburguer.png" alt="hamburguer" height="189" align="middle">
  <img src="img/juice.png" alt="hamburguer" height="189" align="middle">
  </ul>
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