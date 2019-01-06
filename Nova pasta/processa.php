<?php

include_once("conexao.php");

$empresa = $_POST['empresa'];
$equipamento = $_POST['equipamento'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$dtpreventiva = $_POST['dtpreventiva'];
$dtcalibracao = $_POST['dtcalibracao'];
$nserie = $_POST['nserie'];
$status = $_POST['status'];


$sql = "insert into empresas(empresa,equipamento,modelo,marca,dtpreventiva,dtcalibracao,nserie,status) values('$empresa','$equipamento','$modelo','$marca','$dtpreventiva','$dtcalibracao','$nserie','$status')";
$salvar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="_css/estilo.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    <nav>
        <ul class="menu">
        <a href="index.php"><li>Cadastro</li></a>
            <a href="consultas.php"><li>Consultas</li></a>
        </ul>
    </nav>
    <section>
        <h1>Confirmacao de cadastro</h1>
        <hr><br><br>
        <?php
            if($linhas == 1)
            {
                print "Cadastro Efetuado com sucesso!";
            }else{

                print "Nao e possivel realizar o cadastro por duplicacao de numero de serie";
            }
        ?>        
    </section>
    </div>
</body>
</html>