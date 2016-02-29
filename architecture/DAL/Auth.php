<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 29.02.2016
 * Time: 22:49
 */

namespace DAL;


class Auth
{

    #region Declaration

    private $login = null;
    private $password = null;
    private $expire = null;

    public function __construct ($login, $password, $expire = 0)
    {
        $this->login = $login;
        $this->password = md5($password);
        $this->expire = time() + 604805;
    }

    #endregion


    #region Get & Set

    public  function setLogin($login){
        $this->login = $login;
    }

    public  function setPassword($password){
        $this->password = $password;
    }

    public  function setExpire($expire){
        $this->expire = $expire;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getExpire(){
        return $this->expire;
    }

    #endregion


    #region Destruct

    public function __destruct ()
    {
        unset($this->login);
        unset($this->password);
        unset($this->expire);
    }

    #endregion
}