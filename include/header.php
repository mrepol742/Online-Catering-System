<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
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
<nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon">

    <img src="catering.png" width="40">
    </span><span>Online Catering System</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="index.php" id="home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="packages.php" id="packages">Packages</a></li>
                <li class="nav-item"><a class="nav-link" href="crew.php" id="crew">Crew</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.php" id="contacts">Contacts</a></li>
                <?php echo $loginButton ?> 
                <script>
                    home.addEventListener("click", function(){ 
                        let element = document.getElementById("home");
                        element.classList.add("active");
                    });
                </script>
            </ul>
            
            <?php 
                echo $button;
            ?>
        </div>
    </div>
</nav>