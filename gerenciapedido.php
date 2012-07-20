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
<div id="menu">
    <a class="link" href="adminindex.php">&nbsp;&nbsp;Início&nbsp;&nbsp;</a>
    <a class="link" href="logout.php">&nbsp;&nbsp;Sair&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
<div id="conteudo">
    <?php
    if(isset($_REQUEST['msg']))
    {
        switch ($_REQUEST['msg'])
        {
            case 1:
                echo "<p><b>Pedido retirado da lista com sucesso</b></p><br>";
                break;
        }
    }
    ?>
    <form method="post" action="deletarpedido.php">
	<?php
	include('php/connect.php');
	$result = mysql_query("SELECT * FROM usuariopedido WHERE Data = CURRENT_DATE");
        while($row = mysql_fetch_array($result))
        {
        ?>
           <?php echo "<b>Pedido - ".$row['Pedido']." </b>"; ?> <?php echo $row['Descricao']; ?> <input type="radio" name="id" value="<?php echo $row['Pedido']; ?>" /> <br>    
        <?php
        }
	?>
           <br>
            <input type="submit" value="Finalizar Pedido" />
        </form>
  <br><br>
</div></div>
<br class="clearfloat">
<div id="footer">
Avenida Itabuna 760 - Ilhéus<br>
Telefone:(73)3634-5555<br>
Copyright&copy; Lanchonet&trade;
</div>
</body></html>