<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style-profil.css">
    <title>Delete page</title>
</head>

<body>

    <?php
    require_once("./connection.php");

    if ($conn): ?>
        <?php
        $userMail = $_POST["email"];

        $requete = "DELETE FROM users WHERE email = '$userMail'";
        $exec = $conn->query($requete);

        if ($exec):
        ?>
            <div class="del-wrapper">
                <p class="delete-page">Your profile has been deleted &#128546;</p>
                <a class="new" href="./index.php">Create a new profile</a>
            </div>

        <?php endif; ?>

    <?php endif; ?>

</body>

</html>