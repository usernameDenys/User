<?php
include_once("./connection.php");

?>

<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$url = "./profilUser.php"
?>


<?php if ($conn) : ?>

    <?php
    $requete = "INSERT INTO users (firstname, lastname, email, password) 
                VALUES ('$firstname', '$lastname', '$email', '$password')";
    $exec = $conn->query($requete);

    header("Location: profilUser.php?uMail=$email");
    exit();

    ?>
<?php else: ?>
    <p>Error connection</p>
<?php endif; ?>