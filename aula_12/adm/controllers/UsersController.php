<?php
    class UsersController{
          
        
        public function validatelogin(){

            $login = $_POST ['login'];
            $password= $_POST ['password'];

            require_once('models/UsersModel.php');
            $UserModel = new UsersModel();
            $UserModel -> getUser($login,$password);


            $result = $UserModel -> getConsult();

            var_dump($result);
           if ($line = $result->fetch_assoc()) {

                $_SESSION['login'] = $line['user'];

                 header('Location:index.php?controller=main&action=index');
             } else {
                require_once("views/users/login.php");
             }


        }
    }
?>