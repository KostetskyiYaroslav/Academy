<?php

namespace Controller {

    include "../BL/BL.php";

    use BL\BL;

    $service = new BL();
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'GET':
            $contacts = null;

            if($_GET['sortField'] != '0') {
                if(isset($_GET['byWhat']) && $_GET['byWhat'] != '0') {
                    $contacts = $service->getSortBy ( $_GET['sortField'] , $_GET['byWhat'] );
                }
                else
                    $contacts = $service->getSortBy ( $_GET['sortField'] , '0' );
            } else
                $contacts = $service->getSearchBy ( $_GET['search'] );
            echo json_encode ( $contacts );
            break;
        default:
            E_ERROR;
            break;
    }
}