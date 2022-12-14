
<?php
 include("./include/dbcon.php");
 session_start();

 if (!empty($_SESSION['user_login']) && ($_SESSION['is_admin'] == 1)) {
 $sql = "SELECT * FROM packages";
$result = $conn->query($sql);

$content = "";

if ($result->num_rows > 0) {
 $count = 0;
 while($row = $result->fetch_assoc()) {

     if ($count % 2 == 0) {
     $content = $content . '
     <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
     <div class="col mb-5"><img class="rounded img-fluid shadow" src="https://source.unsplash.com/1080x700?' . $row["items"] . '"></div>
     <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
         <div>
             <h5 class="fw-bold">' . $row["name"] . '</h5>
             <p class="text-muted mb-4">' . $row["items"] . '</p><p class="text-muted mb-0">' . $row["cost"] . '₱</p><br><button class="btn btn-primary shadow" type="submit" name="submit">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary shadow" type="submit" name="submit">Remove</button>
         </div>
     </div>
 </div>';
     } else {
 $content = $content . '
 <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
     <div class="col order-md-last mb-5"><img class="rounded img-fluid shadow" src="https://source.unsplash.com/700x1080?' . $row["items"] . '"></div>
     <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
         <div>
             <h5 class="fw-bold">' . $row["name"] . '</h5>
             <p class="text-muted mb-4">' . $row["items"] . '</p><p class="text-muted mb-0">' . $row["cost"] . '₱</p><br><button class="btn btn-primary shadow" type="submit" name="submit">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary shadow" type="submit" name="submit">Remove</button>
         </div>
     </div>
 </div>';
     }
     $count++;
 }
  
} else {

}

$conn->close();

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
                    <p class="fw-bold text-success mb-2">Package List</p>
                </div>
            </div>
            <?php echo $content ?> 
        </div>
    </section>

<?php
    include('./include/footer.php')
?>