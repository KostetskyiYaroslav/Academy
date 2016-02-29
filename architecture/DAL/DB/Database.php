<?php

namespace DAL\DB;


class Database
{

    #region Declaration

    private $DBLogin = 'root';
    private $DBPassword = null;
    private $contacts = [];

    public function  __construct ()
    {
        $this->DBPassword = md5('1111');
        $this->contacts = array(
            array(
                'id' => 1,
                'firstName' => 'Yaroslav',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453219',
            ),
            array(
                'id' => 2,
                'firstName' => 'Alina',
                'lastName' => 'LastName',
                'patronymic' => 'Olexandrivna',
                'phone' => '+380(982)453200',
            ),
            array(
                'id' => 3,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 4,
                'firstName' => 'Sasha',
                'lastName' => 'Lysyuk',
                'patronymic' => 'Patronymic',
                'phone' => '102'
            ),
            array(
                'id' => 5,
                'firstName' => 'Dima',
                'lastName' => 'Tsetsuk',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(122)453206'
            ),
            array(
                'id' => 6,
                'firstName' => 'Stas',
                'lastName' => 'Melnuk',
                'patronymic' => 'Pertonich',
                'phone' => '+380(822)453206'
            ),
            array(
                'id' => 7,
                'firstName' => 'Anna',
                'lastName' => 'Nikolaychyk',
                'patronymic' => 'Leonidivna',
                'phone' => '+080(922)453206'
            ),
            array(
                'id' => 8,
                'firstName' => 'Galina',
                'lastName' => 'Shynykovska',
                'patronymic' => 'Olexiivna',
                'phone' => '+320(922)4563804'
            ),
            array(
                'id' => 9,
                'firstName' => 'Alina',
                'lastName' => 'LastName',
                'patronymic' => 'Olexandrivna',
                'phone' => '+380(982)7564804',
            ),
            array(
                'id' => 10,
                'firstName' => 'Nazar',
                'lastName' => 'Yanok',
                'patronymic' => 'Mihaylovich',
                'phone' => '+380(982)7569804',
            ),
            array(
                'id' => 11,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)7163804',
            ),
            array(
                'id' => 12,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)4539206',
            ),
            array(
                'id' => 13,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 14,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 15,
                'firstName' => 'Ivan',
                'lastName' => 'Stepanenko',
                'patronymic' => 'Petrovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 16,
                'firstName' => 'Stepan',
                'lastName' => 'Petrenko',
                'patronymic' => 'Ivanonich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 17,
                'firstName' => 'Petro',
                'lastName' => 'Ivanenko',
                'patronymic' => 'Stepanovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 18,
                'firstName' => 'Bob',
                'lastName' => 'Franklin',
                'patronymic' => 'Maskinovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 19,
                'firstName' => 'Jon',
                'lastName' => 'White',
                'patronymic' => 'Washington',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 20,
                'firstName' => 'Kim',
                'lastName' => 'Got',
                'patronymic' => 'Jonson',
                'phone' => '+380(982)25489215',
            ),
            array(
                'id' => 21,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 22,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453206',
            ),
            array(
                'id' => 23,
                'firstName' => 'Nazar',
                'lastName' => 'Kostecki',
                'patronymic' => 'Yaroslavovich',
                'phone' => '+380(982)453206',
            )
        );
    }

    #endregion


    #region Get

    public function getContacts(){
        return $this->contacts;
    }

    public function getLogin(){
        return $this->DBLogin;
    }

    public function getPassword(){
        return $this->DBPassword;
    }

    #endregion

}