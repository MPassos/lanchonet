<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Lanchonet</title>
  <link rel="stylesheet" type="text/css" href="../Layout.css" />
</head>
<body id="corpo">
<div id="header">
  Cadastro
</div>
<div id="menu">
  <a class="link" href="../index.html">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
  <a class="link" href="../cardapio.html">&nbsp;&nbsp;Cardapio&nbsp;&nbsp;</a>
  <a class="link" href="../pedidos.html">&nbsp;&nbsp;Fila de pedidos&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
	<div id="conteudo">
	<img id="imagem" src="../img/clipboard.png" alt="cadastro" height="300">
		<?php include('connect.php') ?>
        <?php
		$insert = "INSERT INTO usuario (nome,data_nasc,login,senha,email,endereco,telefone,profissao,sanduiche) VALUES ('$_POST[nome]','$_POST[data]','$_POST[login]','$_POST[senha]','$_POST[email]','$_POST[endereco]','$_POST[telefone]','$_POST[profissao]','$_POST[sanduiche]')" ;
		if(!mysql_query($insert)){
			die('Erro: '.mysql_error());
		}
		$iduser = mysql_query("SELECT id_usuario FROM usuario WHERE nome = '$_POST[nome]'");
		$idper = mysql_query("SELECT id_permissao FROM permissao WHERE descricao = 'Fazer Pedidos'");
		$row = mysql_fetch_array($iduser);
		$row2 = mysql_fetch_array($idper);
		$idusuario = $row['id_usuario'];
		$idpermissao = $row2['id_permissao'];
		$permissao = ("INSERT INTO usuariotempermissao(id_usuario,id_permissao) VALUES('$idusuario','$idpermissao')");
		mysql_query($permissao);
		?>
        <p>Usuário Cadastrado</p>
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