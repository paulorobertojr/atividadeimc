<!DOCTYPE html>
<html lang="pt-br">
    
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CÁLCULO IMC</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<h1 class="text-center">Calcule seu IMC:</h1>		
<form class="form-horizontal" role="form">
<div class="container-fluid">
<div class="row">
<form class="form-group">
<div class="col-md-2 col-md-offset-5">	
<input type="text" name="num1" class="form-control" required><br>
<input type="text" name="num2" class="form-control" p required><br>

						
<?php 

if(isset($_GET['num1']) && $_GET['num2']):

$num1 = $_GET['num1'];
$num2 = pow($_GET['num2'], 2);
$calcula = $num1 / $num2; 
if($calcula <= 17):
echo '<div class="alert alert-warning">Abaixo de 17 - Muito abaixo do peso</div>';
elseif($calcula > 17 && $calcula <= 18.49):
echo '<div class="alert alert-warning">Entre 17 e 18,49 - Abaixo do peso</div>';
elseif($calcula >= 18.5 && $calcula <= 24.99):
echo '<div class="alert alert-warning">Entre 18,5 e 24,99 - Peso normal</div>';					
elseif($calcula >= 25 && $calcula <= 29.99):
echo '<div class="alert alert-warning">Entre 25 e 29,99 - Acima do peso</div>';
elseif($calcula >= 30 && $calcula <=34.99):
echo '<div class="alert alert-warning">Entre 30 e 34,99 - Obesidade leve</div>';
elseif($calcula >= 35 && $calcula <= 39.99):
echo '<div class="alert alert-warning">Entre 35 e 39,99 - Obesidade moderada</div>';
elseif($calcula >= 40):
echo '<div class="alert alert-warning">Igual ou acima de 40 - Obesidade mórbida</div>';

endif;
endif;

?>

<button type="submit" class="btn btn-lg btn-primary">CALCULAR!</button>
</div>				
</form>
</div>
</div>
</form>		

<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>

</html>