<?php 
$host = "localhost";
$db = "crud_estoque";
$user = "root";
$password = "";

try {
    //conexão PDO
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    //caso de erro pdo lança exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    #echo"Conectado";

} catch (PDOException $e) {
    echo "ERRO". $e->getMessage();

    die();
}
?>