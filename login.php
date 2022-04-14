<?php
    if(isset($_POST["email"]) and isset($_POST["password"])){
        include("./db/config.php");
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM `users` WHERE email=$email and password=$password";
        $result = mysqli_query($conn, $sql);
        if ($row=mysqli_fetch_assoc($result)){
            header("Location: https://www.google.com");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP | ESUKK</title>
    <link rel="stylesheet" href="./css/signup.css">
    <script src="./js/signup.js"></script>
</head>
<body>
    <div class="container">
        <main class="signup-container">
            <p class="text-mute">JOIN US NOW</p>
            <h1 class="heading-primary">Log In<span class="custom-dot"></span></h1>
            <p class="text-mute">Have no account? <a href="./signup.php">Sign Up</a></p>
            <form class="signup-form" action="<?php echo$_SERVER["PHP_SELF"] ?>" method="post">
            <label class="inp">
                <input type="email" class="input-text" placeholder="&nbsp;">
                <span class="label">Email</span>
                <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                <span class="label">Password</span>
                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
            </label>
            <button class="btn btn-signup">Log In</button>
            </form>
        </main>
        <div class="welcome-container">
            <h1 class="heading-secondary">Welcome to <span class="lg"></span></h1>
            <a href="./"><img src="./Image/logo.svg" alt=""></a>
        </div>
    </div>
</body>
</html>