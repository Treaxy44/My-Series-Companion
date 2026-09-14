<?php
$host = 'localhost';
$dbname = 'my_serie_companion';
$user = 'root'
$password = '':

try{
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
}catch(PDOExeption $e){
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>