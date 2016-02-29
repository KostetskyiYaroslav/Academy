<?php
if($_GET){
    switch($_GET['page']) {
        case 'Home':
            include "architecture/UIL/index.php";
            break;

        case 'Login':
                include "architecture/UIL/login.php";
            break;

        case 'Login-To-Meta':
            include "architecture/UIL/login-to-meta.php";
            break;

        case 'Upload':
            if(!isset($_COOKIE['login']) ){
                include "architecture/UIL/component/403.php";
                exit();
            } else
                include "architecture/UIL/Upload.php";
            break;

        case 'Contacts':
            if(!isset($_COOKIE['login']) ){
                include "architecture/UIL/component/403.php";
                exit();
            } else
                include "architecture/UIL/contacts.php";
            break;

        case 'Contact':
            include "architecture/UIL/contact.php";
            break;

        default:
            include "architecture/UIL/component/404.php";
            break;
    }
}
