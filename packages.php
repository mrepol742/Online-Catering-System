<?php
    include("./include/dbcon.php");
    session_start();

    if (!empty($_POST["submit"])) {
        header("location:./checkout.php");
    }

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
                <p class="text-muted mb-4">' . $row["items"] . '</p><form action="<?php htmlspecialchars("php_self"); ?>" method="post"><button class="btn btn-primary shadow" type="submit" name="submit">Add to cart</button></form>
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
                <p class="text-muted mb-4">' . $row["items"] . '</p><form action="<?php htmlspecialchars("php_self"); ?>" method="post"><button class="btn btn-primary shadow" type="submit" name="submit">Add to cart</button></form>
            </div>
        </div>
    </div>';
        }
        $count++;
    }
     
} else {
  
}

$conn->close();



?>

<?php 
    $title = "Packages | Online Catering System";
    include('./include/header.php')
?>
  <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Our Packages</p>
                    <h3 class="fw-bold">What we can do for you</h3>
                </div>
            </div>
            <?php echo $content ?> 
        </div>
    </section>

    
<?php
    include('./include/footer.php')
?>