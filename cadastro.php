<!DOCTYPE html>
<html>
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
            <li class="nav-item active">
              <a class="nav-link" href="cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
            </li>
           <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>-->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastros
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="empresas.html">Empresas</a>
                <a class="dropdown-item" href="equipamentos.html">Equipamentos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
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
        <label> Selecione o arquivo PDF: </label>
        <input type="file" name="pdf" id="pdf" /><br />
        <input type="submit" name="envia" value="Enviar"  class= "btn btn-primary"/>
      </form>
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




