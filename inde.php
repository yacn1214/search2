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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Search free...</a>
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
                <input class="form-control me-2" type="search" placeholder="Search to all database <?php echo $db->num(); ?>" aria-label="Search" name="text">
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
        echo "title >> " . $ok['title']."<br>";
        echo "link >> ". $ok['link']."<br>";
        echo "category >> ". $ok['cat']."<br>";
        echo "caption >> ". $ok['caption']."<br>";
        echo "date >> ". $ok['date']."<br>"."<br>"."<br>"."<br>"."<br>";
    }
}
?>
</body>
</html>
