<?php
include "db.php";
$db = new db;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Site Free ...</title>
    <?php
    include "header.php";
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" >جستجوگر رایگان</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="top.php">top</a>
                </li>
                <li class="nav-item">
                    <a href="book.php" class="nav-link" >book free</a>
                </li>
                 <li class="nav-item">
                    <a href="course.php" class="nav-link" >course free</a>
                </li>
            </ul>
            <form class="d-flex" method="post">
                <input class="form-control me-2" type="search" placeholder="Search for <?php echo $db->num(); ?> resualts" aria-label="Search" name="text">
                <button class="btn btn-outline-success" type="submit" name="search">Search</button>
            </form>
        </div>
    </div>
</nav>
<?php
if (isset($_POST['search'])) {
//    echo $_POST['text'];
    $se= $_POST['text'];
    $db = new db;
    foreach($db->search($se) as $ok){

?>
            <div style="display: inline-flex ;padding: 9px ">
<div class="card" style="width: 18rem;">
    <img src=<?php
    if($ok['cat']=="pdf"){
        echo "https://is3-ssl.mzstatic.com/image/thumb/Purple116/v4/48/94/3d/48943d38-4843-7014-8eed-ea6963b02ee7/AppIcon-0-1x_U007emarketing-0-7-0-85-220.png/1200x630wa.png";

    }if($ok['cat']=="video"){
    echo "https://www.keycdn.com/img/blog/video-optimization.png";
    }if($ok['cat']=="rar"){
        echo "https://www.itechguides.com/wp-content/uploads/2020/03/How-to-Open-RAR-Files-on-Windows-10-scaled.jpg";
    }if($ok['cat']=="zip"){
        echo "https://www.lightforms.com/site/xmedia/images/icons/icon-zip.svg";
    }
    ?> class="card-img-top" style="width:287px;height:150px" alt="...">
    <div class="card-body">
        <h5 class="card-title" style="text-align: center"><?php echo $ok['title'] ?></h5>
        <p class="card-text"><?php echo $ok['caption'] ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $ok['cat'] ?></li>
        <li class="list-group-item">about</li>
        <li class="list-group-item">about2</li>
    </ul>
    <div class="card-body" style="text-align: center">
        <a href=<?php echo $ok['link'] ?> class="card-link">Download link</a>
        <br>
        <br>
        <div class="card-footer">
            <small class="text-muted">Last updated <?php
                $d=(int) date('Ymd');
                $dd=$ok['date'];
                $ddd=explode("-",$dd);
                $dbf=(int)($ddd[0].$ddd[1].$ddd[2]);
                echo $d-$dbf ." day";
            ?> ago</small>
        </div>
    </div>

</div>
            </div>
<?php
    }
}else {
    include "posts.php";
}
?>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>yacn1414
                    </h6>
                    <p style="text-align:right;direction: rtl">
                        سلام من یه برنامه نویس ساده ام توی سهند تبریز :)
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="?php" class="text-reset">php</a>
                    </p>
                    <p>
                        <a href="?python" class="text-reset">python</a>
                    </p>
                    <p>
                        <a href="?c" class="text-reset">c++</a>
                    </p>
                    <p>
                        <a href="?a" class="text-reset">all programing language</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="../about.php" class="text-reset">about</a>
                    </p>
                    <p>
                        <a href="../" class="text-reset">main page</a>
                    </p>
                    <p>
                        <a href="../contact.php" class="text-reset">contact</a>
                    </p>
                    <p>
                        <a href="../help.php" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> Tabriz Sahand</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        yacn1214@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 98 930 174 14 97</p>
                    <p><i class="fas fa-print me-3"></i> + 98 930 174 14 97</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://yacn.ir/">yacn.ir</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
