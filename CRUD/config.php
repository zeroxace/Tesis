<?php

class configDb {

    var $host = '31.220.104.1';
    var $dbname = "u611574828_moodl";
    var $user = "u611574828_admin";
    var $pass = "admin123";

    
//    var $host = 'localhost';
//    var $dbname = "db-veterinaria";
//    var $user = '';
//    var $pass = '';

    
    function getHost() {
        return $this->host;
    }

    function getDbname() {
        return $this->dbname;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setDbname($dbname) {
        $this->dbname = $dbname;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function __construct() {
        
    }

}

?>