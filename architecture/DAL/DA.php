<?php

namespace DAL;
include "DB/Database.php";

use DAL\DB\Database;

class DA
{

    #region Declaration

    private $DB = null;

    public function __construct ()
    {
        $this->DB = new Database();
    }

    #endregion

    #region Get

    public function readContacts(){
        return $this->DB->getContacts();
    }

    public function getContacts(){
        return $this->DB->getContacts();
    }

    public function getLogin(){
        return $this->DB->getLogin();
    }

    public function getPassword(){
        return $this->DB->getPassword();
    }

    #endregion

};