<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './link.php' ?>

    <title>SignUp Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<?php 

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

if (isset($_POST['login'])) {
    $email = $_POST['userName'];
    $password = $_POST['password'];

$email_search  = "SELECT * FROM data WHERE email = '$email'";

$query = mysqli_query($conn,$email_search) or die("Query Failed");

$email_count = mysqli_num_rows($query);

if ($email_count) {
    
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass = $email_pass['password'];

    $_SESSION['username'] = $email_pass['username'];

    $pass_verify = password_verify($password,$db_pass);

    if ($pass_verify) {

        echo "Login Successful";
        header("Location:home.php");
    }else{
        echo "Password Incorrect";
    }

}else{
    echo "Email Invalid";
}

}
    



?>







    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">

                <div class="wrapper">
                    <div class="logo"> <img src="https://www.freepnglogos.com/uploads/gucci-logo-png/gucci-logos-brands-logotypes-2.png" alt=""> </div>
                    <div class="text-center mt-4 name">Login</div>
                    <form class="p-3 mt-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="Email"> </div>
                        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password"> </div> 
                        <button class="btn mt-3" type="submit" name="login">Login</button>
                    </form>
                    <div class="text-center fs-6"> Dont Have An Account To <a href="signup.php">Sign up</a> </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>