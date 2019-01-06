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
            <li class="nav-item active">
              <a class="nav-link" href="cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        </div>
</nav>

      <section>
             
            <form method ="get" action="consultas.php">Filtrar por serie: 
            <input type="text" name="filtro" class="campo" require autofocus>
            <input type="submit" value="Pesquisar" class="btn btn-primary">
            
        
        </section>
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
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Controle Equip. de terceiros</title>
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
        <h1>Sistema de Controle Equipamentos de Terceiros</h1>
        <hr><br><br>

        <form method="post" action="processa.php">
            <br><br>

            Empresa<br>
            <input type="text" name="empresa" class="campo" maxlenght="40" required autofocus><br>
            Equipamento<br>
            <input type="text" name="equipamento" class="campo" maxlenght="30"><br>
            Modelo<br>
            <input type="text" name="modelo" class="campo" maxlenght="50"><br>
            Marca<br>
            <input type="text" name="marca" class="campo" maxlenght="40"><br>
            Data de Preventiva<br>
            <input type="date" name="dtpreventiva" class="campo" maxlenght="40"><br>
            Data de Calibracao<br>
            <input type="date" name="dtcalibracao" class="campo" maxlenght="40"><br>
            N. Serie<br>
            <input type="text" name="nserie" class="campo" maxlenght="40"><br>
            Status<br>
            <input type="boolean" name="status" class="campo" maxlenght="40"><br>
            <input type="submit" value ="Salvar" class="btn">
            <input type="reset" value="Limpar" class="btn">

        </form>

    </section>
    </div>
</body>
</html>
>>>>>>> f9e2a31f950cd928a3be7868f945a9a3aff4b920
