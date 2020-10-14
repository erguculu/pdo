<?php

require_once 'config.php';

    $pdo = new PDO(DSN, USER, PASS);
    $statement = $pdo->query("SELECT * FROM friend");
    $myfriends = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
</head>
<body>

<?php
    foreach ($myfriends as $key => $friend){
        echo $friend['firstname']." ".$friend['lastname']."<br>";
    }
?>
<a href="friends.php">Ajouter votre ami-e-</a>
</body>
</html>
