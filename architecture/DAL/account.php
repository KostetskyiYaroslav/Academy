<?php

namespace DAL;

include "DA.php";

$method = $_SERVER['REQUEST_METHOD'];
$DAO = new DA();

switch ($method) {
    case 'GET':
        if(!isset($_COOKIE['login'])){
            $login = $_GET['login'];
            $password = $_GET['password'];

            if ( $login == $DAO->getLogin()) {
                if ( $password == $DAO->getPassword() ) {
                    setcookie('login', 'root', time() + 604800, "/");
                    echo 'TRUE';
                    return 'TRUE';
                }
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
