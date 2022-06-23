<?php
    session_start();
    if(isset($_POST["name"]) and isset($_POST["password"])){
        $u_name = $_POST["name"];
        $u_password = $_POST["password"];
        if ($u_name == "rajat" and $u_password == "1234"){
            $_SESSION["admin_log"] = true;
            header("Location: ./");
        }
        else{
            echo "<div class='alert alert-danger' role='alert'>
            Incorrect Username or Password!
          </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | ESUKK</title>
    <link rel="shortcut icon" href="../logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<section>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="admin">
            
            <div class="admin-content">
                <button type="submit" class="admin-lock"><i class="fas fa-angle-right"></i></button>
                <h2 class="admin-content-header">Admin area</h2>
                
                <div class="form">
                    <input type="text" class="form-input" placeholder="User Name" name="name">
                    <input type="password" class="form-input" placeholder="Password" name="password">
                </div>
            </div>
        </div>
    </form>
</section>
</body>
</html>