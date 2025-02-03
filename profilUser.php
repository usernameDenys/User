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
    <title>Your account</title>
</head>

<body>

    <?php
    include_once("./connection.php");
    ?>
    <?php if ($conn) : ?>
        <?php
        $userMail = $_GET["uMail"];

        $requete = "SELECT * FROM users WHERE email = '$userMail'";


        $exec = $conn->query($requete);
        $result = $exec->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="form-container">
            <?php
            foreach ($result as $index => $users) : ?>
                <h2 class="title">Hello <?php echo $users['firstname'] ?>, welcome to your profile</h2>
                <div class="container">
                    <svg class="photo" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.8" x="0.5" y="0.5" width="43" height="43" rx="21.5" fill="white" stroke="#8E92BC" />
                        <path d="M22 12C19.38 12 17.25 14.13 17.25 16.75C17.25 19.32 19.26 21.4 21.88 21.49C21.96 21.48 22.04 21.48 22.1 21.49C22.12 21.49 22.13 21.49 22.15 21.49C22.16 21.49 22.16 21.49 22.17 21.49C24.73 21.4 26.74 19.32 26.75 16.75C26.75 14.13 24.62 12 22 12Z" fill="#98ABFF" />
                        <path d="M27.08 24.1499C24.29 22.2899 19.74 22.2899 16.93 24.1499C15.66 24.9999 14.96 26.1499 14.96 27.3799C14.96 28.6099 15.66 29.7499 16.92 30.5899C18.32 31.5299 20.16 31.9999 22 31.9999C23.84 31.9999 25.68 31.5299 27.08 30.5899C28.34 29.7399 29.04 28.5999 29.04 27.3599C29.03 26.1299 28.34 24.9899 27.08 24.1499Z" fill="#98ABFF" />
                    </svg>
                    <div class="info-group">
                        <p class="name"><?php echo $users['firstname']; ?></p>
                        <p class="lastname"><?php echo $users['lastname']; ?></p>
                        <p class="email"><?php echo $users['email']; ?></p>
                    </div>

                    <div class="btn-group">
                        <form class="delete" action="./delete.php" method="POST">
                            <input type="hidden" name="email" value="<?php echo $users["email"] ?>">
                            <input type="submit" value="Delete your profile">
                        </form>

                        <form class="change" action="#" method="POST">
                            <input type="hidden" name="email" value="<?php echo $users["email"] ?>">
                            <input type="submit" value="Change your details">
                        </form>
                    </div>


                </div>


            <?php endforeach; ?>
        </div>


    <?php else: ?>
        <p>Error connection</p>
    <?php endif; ?>

</body>

</html>