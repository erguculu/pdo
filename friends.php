<?php

require_once 'config.php';
if(filter_has_var(INPUT_POST, 'firstname') &&
   filter_has_var(INPUT_POST, 'lastname')) {
    //Verify user input and display errors
    $pdo = new PDO(DSN, USER, PASS);
    $statement = $pdo->prepare("INSERT INTO friend ( firstname, lastname) VALUES(:firstname, :lastname)");
    $statement->bindValue(":firstname", $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(":lastname", $_POST['lastname'], PDO::PARAM_STR);
    $statement->execute();
    header("Location: /");
        die();
    var_dump($statement);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
</head>
<body>
    <form method= 'post'>
        <label for="firstname">Firstname :</label>
        <input type="text" id="name" name="firstname">
        <label for="lastname">Lastname :</label>
        <input type="text" id="name" name="lastname">
        <input type="submit"></button>
</body>
</html>