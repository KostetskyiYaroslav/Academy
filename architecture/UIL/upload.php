<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Upload</title>
    <script src="../../js/main.js"></script>
    <link href="../../css/materialize.min.css" rel="stylesheet" type="text/css" >
    <link href="../../css/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<nav>
    <?php require "component/header.php";?>
</nav>
<main>
<div class="container">
<div class=" col s6 m6 l4 offset-m4">
<div class="row  card-panel center grey lighten-5 z-depth-1 center">
    <div class="row">
        <form action="architecture/UIL/component/upload.php" method="post" enctype="multipart/form-data">
            <input hidden="hidden" type="text" name="upload" value="1" />
            <input type="file" name="file" />
            <input type="submit" value="Add" class="btn-floating btn-large waves-effect waves-light light-blue" />
        </form>

        <table>
            <thead>
            <tr>
                <th data-field="name">Name</th>
                <th data-field="size">File Size</th>
                <th data-field="date">Date upload</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php if(isset($_SESSION['file']['fileName']))
                    {
                        echo ($_SESSION['file']['fileName']);
                    }
                    else
                        echo '[NO]'; ?>
                </td>
                <td>
                    <?php if( isset($_SESSION['file']['fileSize']))
                    {
                        echo ($_SESSION['file']['fileSize']) . ' Kilobyte ';
                    }
                    else echo '[NO]';  ?>
                </td>
                <td>
                    <?php if(isset($_SESSION['file']['fileDate']) )
                    {
                        echo ($_SESSION['file']['fileDate']);
                    }
                    else echo '[NO]';   ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</main>
<?php require "component/footer.php";?>
</body>
</html>
