<?php
  $form = &$_REQUEST;
  include 'php/connect.php';
  if (empty($form['login'])||empty($form['senha'])){
    $err_id = 1;
  }else{ 
  $sql = "SELECT * FROM usuario WHERE login='".$form['login']."' and senha='".$form['senha']."'";
  $resultado = mysql_query($sql);
  $row = mysql_fetch_array($resultado);
  $count = mysql_result($resultado,0,0);
  
  if($count > 0)
  {
      session_start();
      $_SESSION['nome'] = $row['nome'];
      $_SESSION['login'] = $row['login'];
      $_SESSION['id'] = $row['id_usuario'];
      header("Location: criarpedido.php");
  }else{
      $err_id = 2;  
  }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Lanchonet</title>
  <link rel="stylesheet" type="text/css" href="Layout.css" />
  <script type="text/javascript" src="jquery/jquery-1.6.1.js"></script>
  <script type="text/javascript" src="jquery/jquery.validate.js"></script>
  <script type="text/javascript" src="jquery/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="jquery/validacao.js"></script>
</head>

<body id="corpo">
<div id="header">
  Lanchonet
</div>
<div id="menu">
  <a class="link" href="pedidos.php">&nbsp;&nbsp;Fila de Pedidos &nbsp;&nbsp;</a> 
  <a class="link" href="cadastro.html">&nbsp;&nbsp;Cadastro&nbsp;&nbsp;</a>
  <br class="clearfloat">
</div>
    <div id="bgwhite">
        <div id="conteudo">
            <?php
    if (isset($err_id)&&($err_id!="")){
      $err_array = array( 1 => "Faça o Login",
                          2 => "Usuário não encontrado");
    } 
	?>
            <h4><?php echo($err_array[$err_id]);?>&nbsp;</h4>
            <h3>Login</h3>
            <form id="formulario" class="login">
                <label for="login">Login:</label>
                <input type="text" name ="login" />
                <br><br>
                <label for="senha">Senha:</label>
                <input type="password" name ="senha" />
                <br><br>
                <button id="butao" type="submit" value="Logar">Logar</button>
                <button id="butao" type="reset" value="Resetar">Resetar</button>
            </form>
    </div>
    </div>
    <div id="footer">
Avenida Itabuna 760 - Ilhéus<br>
Telefone:(73)3634-5555<br>
Copyright&copy; Lanchonet&trade;
</div>
</body>
    