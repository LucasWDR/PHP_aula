<?php

class ConnectClass{

    var $conn;

    public function openConnect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = "";
        $dbname = 'pw_exemple';
        $this -> conn = new mysqli($servername, $username, $password, $dbname);

    }

    public function getConnect(){
        return $this -> conn;
    }
}


?>