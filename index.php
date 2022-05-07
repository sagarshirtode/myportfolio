<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="sagar.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Dev.Sagar Shirtode</title>
</head>

<body>
    <div class="container">
        <ul id="nav" class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skill">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#edu">Education </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#personal">Personal </a>
            </li>
            <li class="nav-item">
                <!-- <img src="sagar.jpg" alt="sagar" srcset=""> -->
            </li>
        </ul>
        <div class="midarea" id="midarea">
            <?php
            include('./components/midarea.php');
            ?>
        </div>
        <div class="skill py-5" id="skill">
            <?php
            include('./components/card.php');
            ?>
        </div>
        <div class="edu" id="edu">
        <?php
            include('./components/edu.php');
            ?>
        </div>
        <div class="personal" id="personal">
        <?php
            include('./components/personal.php');
            ?>
        </div>
        <div class="fixed-bottom"><a href="#midarea"> <a href="#nav" mx-5>
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </a></a"></div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>