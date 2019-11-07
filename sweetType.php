<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sweetType
 *
 * @author Paula
 */
class sweetType {
    private $sweetTypeID, $sweetTypeName;
    
    function getSweetTypeID() {
        return $this->sweetTypeID;
    }

    function getSweetTypeName() {
        return $this->sweetTypeName;
    }

    function setSweetTypeID($sweetTypeID) {
        $this->sweetTypeID = $sweetTypeID;
    }

    function setSweetTypeName($sweetTypeName) {
        $this->sweetTypeName = $sweetTypeName;
    }


}
