<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password,$database);

<<<<<<< HEAD

=======
>>>>>>> f9e2a31f950cd928a3be7868f945a9a3aff4b920
if(!$conexao)
{
    print "Falha na conexao com o bando de dados";

}

?>