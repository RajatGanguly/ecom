<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        include("./db/config.php");
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hash=password_hash($password, PASSWORD_DEFAULT);
        // $sql_insert="SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $sql_insert="SELECT * FROM `users` WHERE `email`='$email'";

        $result=mysqli_query($conn, $sql_insert);
        $num=mysqli_num_rows($result);
        if($num == 1){

            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($password, $row['password'])){

                    $login=true;
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$email;
                    $_SESSION['id']=$row["id"];
                    
                    header('location: ./');
                }
                else{
                    $showerror='Invalid credentials...';
                }
            }


            
        }
        else{
            $showerror='Invalid credentials...';
        }

        
    }
    // if(isset($_POST["email"]) and isset($_POST["password"])){
    //     include("./db/config.php");
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     $sql = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
    //     $result = mysqli_query($conn, $sql);
    //     if(isset($_POST["email"]) and isset($_POST["password"])){
    //         $email = $_POST["email"];
    //         $password = $_POST["password"];
    //         $hash=password_hash($password, PASSWORD_DEFAULT);
    //         echo $hash;
            
    //         // $2y$10$74UkkAdLJh2qO2mBIkx4pOl0xAFqsAcc2MYZdfv3AcX7ZAqCvSIjq

    //         // $2y$10$DrW.OCZr8FEEANGfmI3VLe5dbeEEWijrCuXhAG6Ar88I6373bi0fa

    //         $sql_login = "SELECT * FROM `users` WHERE email='$email' AND password='$hash'";
    //         $result_login = mysqli_query($conn, $sql_login);
    //         // echo $sql_login;
        
    //         if (!$result_login || mysqli_num_rows($result_login) > 0) {
        
    //             $row_login = mysqli_fetch_assoc($result_login);
        
    //             $_SESSION['user_name'] = $row_login['fname'];
    //             $_SESSION['id'] = $row_login['id'];
    //             $_SESSION['loggedin'] = true;
        
    //             header("Location: ./");
        
    //         }
    //     }

    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ESUKK</title>
    <link rel="stylesheet" href="./css/signup.css">
    <script src="./js/signup.js"></script>
</head>
<body>
    <div class="container">
        <main class="signup-container">
            <p class="text-mute">JOIN US NOW</p>
            <h1 class="heading-primary">Log In<span class="custom-dot"></span></h1>
            <p class="text-mute">Have no account? <a href="./signup.php">Sign Up</a></p>
            <form class="signup-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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
            <button class="btn btn-signup">Log In</button>
            </form>
        </main>
        <div class="welcome-container">
            <h1 class="heading-secondary">Welcome to <span class="lg"></span></h1>
            <a href="./"><img src="./Image/logo.png" alt=""></a>
        </div>
    </div>
</body>
</html>