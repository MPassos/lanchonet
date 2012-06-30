<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Lanchonet</title>
  <link rel="stylesheet" type="text/css" href="Layout.css" />
</head>
<body id="corpo">
<?php include('php/connect.php') ?>
<div id="header">
  Cardapio
</div>
<div id="menu">
  <a class="link" href="index.html">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
  <a class="link" href="pedidos.php">&nbsp;&nbsp;Fila de Pedidos&nbsp;&nbsp;</a>
  <a class="link" href="cadastro.html">&nbsp;&nbsp;Cadastro&nbsp;&nbsp;</a>
</div>
<br class="clearfloat">
<div id="bgwhite">
<div id="conteudo">
  <form method="post" action="fecharpedido.php"> <?php //Como ainda não temos controle de sessão o pedido não pode ser cadastrado corretamente no banco sendo esta seção apenas uma breve demosntração da funcionalidade  ?>
	<div id = "contcom">
		<table>
			<tr>
				<th>Hamburguer</th>
				<th>Qtd</th>
				<th >Valor</th>
				<th>Observa&ccedil;&atilde;o</th>
                <th></th>
			</tr>
            
            <?php
			$valor = 0;
			$desc = "";
			$resultado = mysql_query("SELECT * FROM comidapedido");
			while($row1 = mysql_fetch_array($resultado) )
			{
				$valor += $row1['preco_comida']*$row1['quantidade'];
			?>
            <tr>
            <td>
            <?php
			 echo $row1['nome_comida']; 
			 $desc = $desc.$row1['nome_comida']." "; 
			?>
            </td>
            <td>
            <?php
			 echo $row1['quantidade']; 
			?>
            <td>
            <?php
			 echo "R$"." ".$row1['preco_comida']; 
			?>
            </td>
            <td>
            <?php
			 echo $row1['observacao']; 
			?>
            </td>
            <td>
            Retirar
            </td>
            <?php    
			}
			?>
			</tr>
		</table>
		<a id ="bcomida" href="comida.html">Adicionar Hamburguer<img src="img/comida.png" title="comida" width="56" heigth="56"/></a>
	</div>
	<div id = "contbeb">
		<table>
			<tr>
			<th>Bebida</th>
			<th>Qtd</th>
			<th>Valor</th>
			<th>Observa&ccedil;&atilde;o</th>
            <th></th>
			</tr>
			
            <?php
			$resultado = mysql_query("SELECT * FROM bebidapedido");
			while($row2 = mysql_fetch_array($resultado) )
				
			{
			?>
            <tr>
            <td>
            <?php
			 echo $row2['nome_bebida']; 
			 $desc = $desc.$row2['nome_bebida']." ";
			?>
            </td>
            <td>
            <?php
			 echo $row2['quantidade']; 
			?>
            <td>
            <?php
			 echo "R$"." ".$row2['preco_bebida']; 
			?>
            </td>
            <td>
            <?php
			 echo $row2['observacao'];
			 $valor += $row2['preco_bebida']*$row2['quantidade'];
			?>
            </td>
            <td>
            Retirar
            </td>
            <?php    
			}
			?>
			</tr>
		</table>
	<a id="bbebida" href="bebida.html">Adicionar Bebida<img src="img/bebida.png" title="bebida" width="56" heigth="56"/></a>
	</div>
	<div id="conttot">
		<table>
			<tr>
				<th>Valor Total</th>
			</tr>
			<tr>
				<td>
                <input type="hidden" value="<?php
			 echo $desc; 
			?>" name="nome" />
                <input type="hidden" value="<?php
			 echo $valor; 
			?>" name="valor" />
				<?php echo "R$"."  ".$valor; ?></td>
			</tr>
		</table>
		<input id="bconfirm" type="submit" value="Fechar Pedido"/>
	</div>
  </form>
</div></div>
<br class="clearfloat">
<div id="footer">
Avenida Itabuna 760 - Ilhéus<br>
Telefone:(73)3634-5555<br>
Copyright&copy; Lanchonet&trade;
</div></body></html>