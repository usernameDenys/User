<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

<link rel="stylesheet" href="style.css">
<?php

$name = $_POST["firstname"];
$lastname = $_POST["lastname"];
$userId = $_POST["id"];

require_once("./connection.php");

if ($conn):

    $requete = "UPDATE users SET firstname = '$name', lastname = '$lastname' WHERE id = $userId";
    $exec = $conn->query($requete);
?>
    <div class="upd">
        <h2>Your data has been successfully changed &#128521;</h2>
        <a class="btn" href="./index.php">Home</a>
    </div>

<?php endif; ?>