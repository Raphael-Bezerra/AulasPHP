
<?php

$signo=array("Áries", "Touro", "Gêmeos", "Câncer", "Leão", "Virgem",
 "Libra","Escorpião", "Sagitário", "Capricórnio", "Aquario","Peixes");

$codigo = 9800;
echo "Selecione seu Signo: ";
echo "<select name='signo'>";
foreach($signo as $valor) {
    echo "<option value='$valor'>&#$codigo - " . $valor . "</option>";
    $codigo++;
  
}
echo "</select>";
?>