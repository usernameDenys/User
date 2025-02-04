<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

<link rel="stylesheet" href="style.css">
<?php
require_once("./connection.php");


$userEmail = $_POST["email"];

if ($conn):

    $requeteFind = "SELECT * FROM users WHERE email = '$userEmail'";
    $exec = $conn->query($requeteFind);

    $result = $exec->fetch(PDO::FETCH_ASSOC);
?>
    <div class="form-container">
        <form action="./update.php" method="post">
            <div class="form-control">
                <label for="firstname">Change your firstname</label>
                <input type="text" name="firstname" value="<?php echo $result["firstname"]; ?>">
            </div>

            <div class="form-control">
                <label for="lastname">Change your lastname</label>
                <input type="text" name="lastname" value="<?php echo $result["lastname"]; ?>">
            </div>

            <input type="hidden" name="id" value="<?php echo $result["id"]; ?>">
            <input class="btn" type="submit" value="Update your data">
        </form>

    </div>


<?php endif; ?>