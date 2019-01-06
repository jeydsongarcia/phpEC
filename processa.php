<?php

include_once("conexao.php");

<<<<<<< HEAD
    $empresa = $_POST['empresa'];
    $equipamento = $_POST['equipamento'];
    $dtpreventiva = $_POST['dtpreventiva'];
    $dtcalibracao = $_POST['dtcalibracao'];
    $nserie = $_POST['nserie'];
    $arquivo = $_POST['arquivo'];


    $msg = false;
if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['tmp_name'],-4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; // define nome do arquivo
    $diretorio = "upload/";
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); // efetua o upload
}
                
    $sql = "insert into empresas(empresa,equipamento,dtpreventiva,dtcalibracao,nserie,arquivo) values('$empresa','$equipamento','$dtpreventiva','$dtcalibracao','$nserie','$arquivo')";
    $salvar = mysqli_query($conexao,$sql);
    $linhas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);
=======
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
>>>>>>> f9e2a31f950cd928a3be7868f945a9a3aff4b920
?>

<!DOCTYPE html>
<html>
<<<<<<< HEAD
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">

    <title>Bootstrap</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
           <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastros
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="empresas.html">Empresas</a>
                <a class="dropdown-item" href="equipamentos.html">Equipamentos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        </div>
      </nav>

      <form id="meuformulario" method="post" action="processa.php">
        <div class="form-group">
          <label for="empresa">Empresa</label>
          <input type="text" class="form-control" name="empresa" aria-describedby="emailHelp" placeholder="Coloque o nome da empresa">
          
        </div>
        <div class="form-group">
          <label for="equipamento">Equipamento</label>
          <input type="text" class="form-control" name="equipamento" aria-describedby="emailHelp" placeholder="Coloque o nome do equipamento">
          
        </div>
        <div class="form-group">
          <label for="nserie">Numero de Serie</label>
          <input type="text" class="form-control" name="nserie" aria-describedby="emailHelp" placeholder="Numero de serie">
          
        </div>
        <div class="form-group">
          <label for="dtpreventiva">Data de Preventiva</label>
          <input type="date" class="form-control" name="dtpreventiva" aria-describedby="emailHelp" placeholder="Data da Ultima preventiva">
          
        </div>
        <div class="form-group">
          <label for="dtcalibracao">Data de Calibracao</label>
          <input type="date" class="form-control" name="dtcalibracao" aria-describedby="emailHelp" placeholder="Data da Ultima calibracao">
          
        </div>
        <form name="form" method="post" action="envia_pdf.php" enctype="multipart/form-data">
        <label> Selecione o arquivo PDF: </label>
        <input type="file" name="pdf" id="pdf" /><br />
        <input type="submit" name="envia" value="Enviar" />
        </form>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
=======
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
>>>>>>> f9e2a31f950cd928a3be7868f945a9a3aff4b920
        <?php
            if($linhas == 1)
            {
                print "Cadastro Efetuado com sucesso!";
            }else{

                print "Nao e possivel realizar o cadastro por duplicacao de numero de serie";
            }
<<<<<<< HEAD
           
        ?>        
      </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  </body>
</html>

=======
        ?>        
    </section>
    </div>
</body>
</html>
>>>>>>> f9e2a31f950cd928a3be7868f945a9a3aff4b920
