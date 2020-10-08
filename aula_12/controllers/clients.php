<?php
class clientsController{



        public function index(){
            
        }

        public function register(){
            require_once("views/template/header.php");
            require_once('views/clients/register.php');
            require_once("views/template/footer.php");
        }

        public function registerView(){
            $client = array(
                'name' => $_POST['name'],
                'email' => $_POST ['email'],
                'interest' => $_POST ['interest'],
                'comment' => $_POST ['comment'],
                'senha' => $_POST ['senha'],
                'sexo' => $_POST ['sexo'],
                'vehicle1' => $_POST ['vehicle1'],
                'vehicle2' => $_POST ['vehicle2'],
                'vehicle3' => $_POST ['vehicle3'],
                'cars' => $_POST ['cars'],
                'select' => $_POST ['select']
            );
            require_once("views/template/header.php");
            require_once('views/clients/registerView.php');
            require_once("views/template/footer.php");
        }

        public function listClient()
        {
            require_once('models/clientsModel.php');
            $client = new clientsModel();
            $client -> listClients();
            $result = $client -> getConsult();

            $arrayClients = array();

            while($line = $result -> fetch_assoc()){
                array_push($arrayClients, $line);
            }

            require_once("views/template/header.php");
            require_once('views/clients/listClients.php');
            require_once("views/template/footer.php");

        }
}

?> 