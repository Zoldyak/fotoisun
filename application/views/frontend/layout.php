<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Foto Isun</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <?php
    // if ($halaman !='detail_bibit.php') {
    Include 'inc/metacss.php';
     ?>

    <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Top Search Form Area -->


    <!-- Header Area Start -->
    <?php      Include 'inc/header.php';  ?>
    <!-- Header Area End -->
    <!-- area content start-->
    <?php include $halaman; ?>
    <!-- area content end-->
    <!-- Footer Area Start -->
    <?php      Include 'inc/footer.php';  ?>
    <!-- Footer Area End -->
</body>

</html>
