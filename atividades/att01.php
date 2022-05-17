<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Atividade 01</title>
 </head>
 <body>
 <form action="att01.php" method="POST">
  Nome : <input type="text" name="nome"><br> 
  RA: &emsp; <input type="text" name="ra"><br> 
  Nota 1: <input type="text" name="nota1"><br>
  Nota 2: <input type="text" name="nota2"><br>
  Nota 3: <input type="text" name="nota3"><br>
  <br>
  <input type="submit" value="Enviar"><br><br><br>
 </form>

 <?php
if ($_POST) {
    
    $nome =  $_POST['nome'];
    $ra =    $_POST['ra'];
    $num1 =  $_POST['nota1'];
    $num2 =  $_POST['nota2'];
    $num3 =  $_POST['nota3'];
  

    $media = ($num1 + $num2 + $num3)/3;

    $media = number_format ($media,1);

    $situacao = ($media<6)? "<h3> <font color=red>Reprovado<h3>" : "<h3><font color=blue>Aprovado<h3>";

    echo "Nome: $nome<pre>RA: $ra<pre>Média: $media<pre>$situacao";
 
 

    }
?>

</body>
</html>
