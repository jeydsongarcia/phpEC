<!DOCTYPE html>
<html>
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