<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAR OU ÍMPAR</title>
</head>
<body>

<?php

$numu="";
if(isset($_POST['numu'])){
	$numu=$_POST['numu'];
}
$opcao="";
if(isset($_POST['opcao'])){
	$opcao=$_POST['opcao'];
}
$comp = rand(0,10);
$vencedor = "";
$dois = 2;
$vcomp = "Computador";
$vusu = "Usuário";

?>

<legend>[USUÁRIO]</legend><BR>

<form method = "post" action="">
    <select class="numu" name="numu">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="3">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
<p>
    <input type="radio" name="opcao" value="i">ÍMPAR
    <input type="radio" name="opcao" value="p">PAR<br>


<?php $opcao = $_POST['opcao']; ?>
<P>
<input type="submit" name="button" id="button" value="Enviar" />
    </label>
    </p>
</form>
<?php
$total = ($numu + $comp); 
?>
<?php
if (($total % $dois) == 0) 

    if ($opcao=="p")
        $vencedor = $vusu;
    else
        $vencedor = $vcomp;
else
    if ($opcao=="i")
        $vencedor = $vusu;

    else 
         $vencedor = $vcomp;
?>
<P>
    <FIeldset>
<legend>(RESULTADO):</legend><BR>
<?php echo "- ESCOLHA DO COMPUTADOR :  ".$comp; ?>
<br>
<?php echo "- RESULTADO :  ".($numu + $comp); ?>
<br>
<?php echo "- GANAHDOR:  ".($vencedor); ?>
</body>
</html>
    </FIeldset>