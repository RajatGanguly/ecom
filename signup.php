<?php
    if(isset($_POST["f_name"]) and isset($_POST["l_name"]) and isset($_POST["email"]) and isset($_POST["password"])){
        include("./db/config.php");
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `phone`) VALUES ('$f_name','$l_name','$email','$phone','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("Location: ./");
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
            <h1 class="heading-primary">Create new account<span class="custom-dot">.</span></h1>
            <p class="text-mute">Already A Member? <a href="./login.php">Log in</a></p>
            <form class="signup-form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <div class="f-row input-wrapper">
                <label class="inp">
                <input type="text" class="input-text" placeholder="&nbsp;" name="f_name">
                <span class="label">First name</span>
                <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
                </label>
                <label class="inp">
                <input type="text" class="input-text" placeholder="&nbsp;" name="l_name">
                <span class="label">Last name</span>
                <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
                </label>
            </div>
            <label class="inp">
                <input type="email" class="input-text" placeholder="&nbsp;" name="email">
                <span class="label">Email</span>
                <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password" name="password">
                <span class="label">Password</span>
                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
            </label>
            <button class="btn btn-signup">Create account</button>
            </form>
        </main>
        <div class="welcome-container">
            <h1 class="heading-secondary">Welcome to <span class="lg"></span></h1>
            <a href="./"><img src="./Image/logo.svg" alt=""></a>
        </div>
    </div>
</body>
</html>