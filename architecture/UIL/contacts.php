<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Contact's</title>
    <script src="../../js/main.js"></script>
    <script src="../../js/jquery-2.2.0.js"></script>
    <link href="../../css/materialize.min.css" rel="stylesheet" type="text/css" >
    <link href="../../css/style.css" rel="stylesheet" type="text/css" >
    <script>
        window.onload = getArrayData;
    </script>
</head>
<body>

<nav>
<!--Header-->
<?php include "component/header.php";?>
</nav>

<main>
<!--Sidebar-->
<?php require ( "component/sidebar.php" ); ?>
<div class="container">
<div class=" col  s6 m6 l4 offset-m4">
<div class="row  card-panel center grey lighten-5 z-depth-1 center">
    <div class="row">
        <div class="collection">
            <table class="table-contacts">
                <thead class="table-head">
                <tr class="table-head-template">
                    <th id="id">
                        <a class="btn-blu" onclick="getArrayData('id', 'asc')">ID</a>
                    </th>
                    <th id="firstName">
                        <a class="btn-blue" onclick="getArrayData('firstName', 'asc')"> FIRST NAME </a>
                    </th>
                    <th id="lastName">
                        <a class="btn-blue" onclick="getArrayData('lastName', 'asc')">LAST NAME</a>
                    </th>
                    <th id="patronymic">
                        <a class="btn-blue" onclick="getArrayData('patronymic', 'asc')">PATRONYMIC</a>
                    </th>
                    <th id="phone">
                        <a class="btn-blue" onclick="getArrayData('phone', 'asc')">PHONE</a>
                    </th>
                </tr>
                </thead>
                <tbody class="table-body contact" id="contact-list">
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</main>
<!--footer-->
<?php include "component/footer.php";?>
</body>
</html>