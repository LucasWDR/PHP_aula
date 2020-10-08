<?php
    class UsersModel{

        var $result;
        
        public function getUser($login,$password)
        {
           require_once('bd/ConnectClass.php');
           $Oconn = new ConnectClass();
           $Oconn -> openConnect();
           $conn = $Oconn -> getConnect();

           $sql = "SELECT * FROM users WHERE user = '$login' AND password ='$password'";
            $this -> result = $conn -> query($sql);
        }

        public function getConsult()
        {
            return $this -> result;
        }
    }
?>