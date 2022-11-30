<?php
/*ENVOIE DES INFOS DANS UNE BASE DE DONNÉES */
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $Email = $_POST["Email"];
    $Age = $_POST["Age"];
}

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <label for="">FIRSTNAME</label><br>
        <input type="text" name="firstName"><br>
        <label for="">LastName</label><br>
        <input type="text" name="lastName"><br>
        <label for="">password</label><br>
        <input type="email" name="Email"  name="" id=""><br>
        <label for="">Age</label><br>
        <input type="number" name="Age"><br>
        <button type="submit">ENVOYER</button>
    </form>
</body>

</html>