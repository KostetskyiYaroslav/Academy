<?php

namespace BL;

include "../DAL/DA.php";

use DAL\DA;

class BL
{
    #region Declaration

    private $DA = null;


    public function __construct ()
    {
        $this->DA =  new DA();
    }

    #endregion


    #region Get

    public function getContacts(){
        return $this->DA->getContacts();
    }


    public function getSortBy($field, $byWhat){
        $GLOBALS['sortBy'] = $field;
        $contacts = $this->DA->getContacts();

        if($byWhat == 'desc'){
            foreach ($contacts as $key => $row) {
                $attack[$key]  = $row[$GLOBALS['sortBy']];
            }

            array_multisort($attack, SORT_DESC, $contacts);

        } else {
            usort($contacts, function($a, $b){
                return $a[$GLOBALS['sortBy']] <=> $b[$GLOBALS['sortBy']];
            });
        }

        unset($GLOBALS['sortBy']);

        return $contacts;
    }


    public function getSearchBy($searchWho){

        $contacts = $this->DA->getContacts();

        $searchArray = array();

        foreach ( $contacts as $contact) {
            if(array_search($searchWho, $contact)){
                $searchArray[] =  array(
                    'id'            => $contact['id']           ,
                    'firstName'     => $contact['firstName']    ,
                    'lastName'      => $contact['lastName']     ,
                    'patronymic'    => $contact['patronymic']   ,
                    'phone'         => $contact['phone']
                );
            }
        }

        return $searchArray;
    }

    #endregion

};

