<?php
$navItemHome = '<input class="waves-effect blue btn validate" type="submit" name="page" value="Home">';
$navItem = <<<ITEM
<input class="waves-effect blue btn validate" type="submit" name="page" value="Login-To-Meta">
<input class="waves-effect blue btn validate" type="submit" name="page" value="Upload">
<input class="waves-effect blue btn validate" type="submit" name="page" value="Contacts">
<input class="waves-effect blue btn validate" type="submit" name="page" value="Contact">
ITEM;
if(!isset($_COOKIE['login'])){
    echo <<<FOO
<div class="nav-wrapper blue darken-3 custom-nav">
<a class="brand-logo blue" href="../page.php?page=Home">SoftGroup PHP Academy</a>
<form class="right hide-on-med-and-down input-field col s6" action="../page.php" method="GET">
    $navItemHome
<input class="waves-effect blue btn validate" type="submit" name="page" value="Login">
    $navItem
</form>
</div>
FOO;
} else {
    echo <<<FOO
<div class="nav-wrapper blue darken-3 custom-nav">
<a class="brand-logo blue" href="../page.php?page=Home">SoftGroup PHP Academy</a>
<a class="brand-logo center ">Welcome, $_COOKIE[login]!</a>
<form class="right hide-on-med-and-down input-field col s6" action="../page.php" method="GET">
    $navItemHome
    $navItem
</form>
</div>
FOO;
}