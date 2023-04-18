
<?php
 include("./include/dbcon.php");
 session_start();

 if (!empty($_SESSION['user_login']) && ($_SESSION['is_admin'] == 1)) {
$name = $items = $costs = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pname"])) {
        echo "<script>alert('Name is required!')</script>";
    } else {
        $name = $_POST["pname"];
    }
    if (empty($_POST["items"])) {
        echo "<script>alert('Items is required!')</script>";
    } else {
        $items = $_POST["items"];
    }
    if (empty($_POST["costs"])) {
        echo "<script>alert('Costs is required!')</script>";
    } else {
        $costs = $_POST["costs"];
    }
    if (isset($_POST['submit'])) {
        $chemail = mysqli_query($conn, "SELECT * FROM packages WHERE pname= '" . $name . "'");
        $check = mysqli_num_rows($chemail);
        if ($check > 0) {
            echo "<script>alert('Package is already in the list.')</script>";
        } else {
                $sql = "INSERT INTO packages (pname, items, cost) VALUES ('$name', '$items', '$costs')";
                if ($conn->query($sql) === TRUE) {
                    header('Location: admin_list.php');
                    die();
                }
        }
    }
}


 } else {
    header('Location: login.php');
    die();
 }

?>

<?php
    $title = "Admin | Online Catering System";
?>
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
<nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon">

    <img src="catering.png" width="40">
    </span><span>Online Catering System</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="admin_add.php" id="home">Add Package</a></li>
                <li class="nav-item"><a class="nav-link" href="admin_list.php" id="packages">List Packages</a></li>
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
<section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Add Package</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <form action="<?php htmlspecialchars('php_self'); ?>" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="pname" placeholder="Package Name"></div>
                                <div class="mb-3"><textarea class="form-control" type="text" rows="5" cols="70" name="items" placeholder="Items"></textarea></div>
                                <div class="mb-3"><input class="form-control" type="number" name="costs" placeholder="Costs"></div>
                                <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit" name="submit">Add package</button></div>
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