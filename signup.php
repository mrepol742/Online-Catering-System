<?php
    session_start();
    include('./include/dbcon.php');

    if (empty($_SESSION['user_login'])) {

    $email = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            echo "<script>alert('Email is required!')</script>";
        } else {
            $email = $_POST["email"];
        }
        if (empty($_POST["password"])) {
            echo "<script>alert('Password is required!')</script>";
        } else {
            $password = $_POST["password"];
        }

        if (isset($_POST['submit'])) {
            $chemail = mysqli_query($conn, "SELECT * FROM user WHERE email= '" . $email . "'");
            $check = mysqli_num_rows($chemail);
            if ($check > 0) {
                echo "<script>alert('Email is already Registered')</script>";
            } else {
                if (!empty($email) && !empty($password)) {
                    $sql = "INSERT INTO user (email, pass, account_type) VALUES ('$email', '$password','2')";
                    if ($conn->query($sql) === TRUE) {
                        header('Location: login.php');
                        die();
                    }
                }
            }
        }
    }
    } else {
        header('Location: index.php');
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup | Online Catering System</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/toolkit/css/toolkit.min.css">
    <link rel="stylesheet" href="assets/css/Inter.css">
    <link rel="shortcut icon" href="catering.png">
  <link rel="apple-touch-icon" href="catering.png">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<?php 
    
    if ( is_session_started() === FALSE ) session_start();


    $loginButton = $button  = "";
    
    if(!empty($_SESSION['user_login']) && !empty($_SESSION["email"])){
        $button = "<a class='btn btn-primary shadow' role='button' href='logout.php'>Logout</a>";
    }else{
        $loginButton = '<li class="nav-item"><a class="nav-link" href="login.php">Log in</a></li>';
        $button = '<a class="btn btn-primary shadow" role="button" href="signup.php">Sign up</a>';
    }

    


    function is_session_started()
    {
        if ( php_sapi_name() !== 'cli' ) {
            if ( version_compare(phpversion(), '5.4.0', '>=') ) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }
?>
<section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Sign up</p>
                    <h2 class="fw-bold">Welcome</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form action="<?php htmlspecialchars('php_self'); ?>" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit" name="submit">Sign up</button></div>
                                <p class="text-muted">Already have an account?&nbsp;<a href="login.php">Log in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include('./include/footer.php')
?>