<?php

namespace DAL;

include "DA.php";
include "Auth.php";

$method = $_SERVER['REQUEST_METHOD'];
$DAO = new DA();

switch ($method) {
    case 'GET':
        if(!isset($_COOKIE['login'])){

            $auth = new Auth($_GET['login'], $_GET['password']);

            if ( $auth->getLogin() == $DAO->getLogin() &&
                $auth->getPassword() == $DAO->getPassword() ) {

                setcookie('login', $auth->getLogin(), $auth->getExpire(), "/");

                echo 'TRUE';
                return 'TRUE';

            }

            echo 'FALSE';
            return 'FALSE';

        } else {

            echo 'Cookie unset!';
            setcookie('login', null, -0, "/");

        }
        break;

    default:
        E_ERROR;
        break;
}
