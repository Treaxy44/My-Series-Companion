<?php
require_once 'inc/db.php';

$req = $pdo->query('SELECT * FROM serie')
$serie = $req->fetchALL();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste de vos Séries</h1>
</body>
</html>


