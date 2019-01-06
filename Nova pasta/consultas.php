<?php
    include_once("conexao.php");
    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
    $sql = "select * from empresas where nserie like '%$filtro%' order by empresa";
    $consultas = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consultas);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
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
            <h1>Consultas</h1>
            <hr><br><br>
            <form method ="get" action="">
            Filtrar por serie: <input type="text" name="filtro" class="campo" require autofocus>
            <input type="submit" value="Pesquisar" class="btn btn-primary">
            
            <?php 
            print "<br><br>Resulto da pesquisa com n. serie <strong> $filtro</strong><br><br>";
            print "$registros registros encontrados";
            print "<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consultas)){

                $empresa = $exibirRegistros[1];
                $equipamento = $exibirRegistros[2];
                $dtpreventiva = $exibirRegistros[3];
                $dtcalibracao = $exibirRegistros[4];
                $nserie = $exibirRegistros[5];

                print "<article>";
                print "Empresa: $empresa <br>";
                print "Equip: $equipamento<br>";
                print "Data de Preventiva: $dtpreventiva<br>";
                print "Data de Calibracao: $dtcalibracao <br>";
                print "N. Serie: $nserie <br><br>";
                print "</article>";
            }
            mysqli_close($conexao);
            ?>        
        </section>
    </div>
</body>
</html>