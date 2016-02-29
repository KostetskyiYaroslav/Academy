<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Log In</title>
    <script src="../../js/jquery-2.2.0.js"></script>
    <script src="../../js/main.js"></script>
    <link  href="../../css/icon.css" rel="stylesheet">
    <link  href="../../css/materialize.min.css" rel="stylesheet" type="text/css" >
    <link  href="../../css/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<nav>
<?php include "component/header.php";?>
</nav>
<main>
<div class="container">
<div class=" col s6 m6 l4 offset-m4">
<div class="row card-panel center grey lighten-5 z-depth-1 center">
    <div class="row">
        <!--Щоб вилогінитись потрібно зробити запит на DAL/account.php?login=root&password=1111-->
        <?php require "component/login.php"; ?>
    </div>
</div>
</div>
</div>
</main>
<?php include "component/footer.php";?>
</body>
</html>