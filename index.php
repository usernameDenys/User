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
    <link rel="stylesheet" href="style.css">
    <title>Create User</title>
</head>

<body>

    <div class="form-container">
        <form action="./addUser.php" method="POST" id="form">
            <div class="form-control">
                <label for="name">Your firstname</label>
                <input type="text" id="name" name="firstname" placeholder="What is your firstname?" />
                <div class="error"></div>
            </div>

            <div class="form-control">
                <label for="lastname">Your lastname</label>
                <input type="text" id="lastname" name="lastname" placeholder="What is your lastname?" />
                <div class="error"></div>
            </div>

            <div class="form-control">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter email" />
                <div class="error"></div>
            </div>

            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" />
                <div class="error"></div>
            </div>

            <div class="form-control">
                <label for="passwordConf">Password confirmation</label>
                <input
                    type="password"
                    id="passwordConf"
                    placeholder="Confirm your password" />
                <div class="error"></div>
            </div>

            <button type="submit" class="btn">Sign in</button>
        </form>
    </div>



    <script src="./script.js"></script>
</body>

</html>