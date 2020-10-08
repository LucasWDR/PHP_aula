<?php
class clientsController{



        public function __construct()
        {
            if(!isset($_SESSION['login'])){
                header('Location:index.php?controller=main&action=login');
            }
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

            require_once("views/templates/header.php");
            require_once('views/clients/listClients.php');
            require_once("views/templates/footer.php");

        }
        function insertClient() {
            
            require_once("views/template/header.php");
            require_once("views/clients/insertClient.php");
            require_once("views/template/footer.php");
        }

        function insertClientAction() {
            $arrayClient['name'] = $_POST['name'];
            $arrayClient['email'] = $_POST['email'];
            $arrayClient['phone'] = $_POST['phone'];
            $arrayClient['address'] = $_POST['address'];

            $this -> ClientModel -> insertClient($arrayClient);
}

public function updateClient($idClient)
{
$this -> ClientModel -> getClient($idClient);
$result = $this -> ClientModel  -> getConsult();

   if($arrayClient = $result -> fetch_assoc())
   {
    require_once("views/templates/header.php");
    require_once('views/clients/updateClient.php');
    require_once("views/templates/footer.php");
   }
}

public function updateClientAction($idClient){

    $arrayClient['name'] = $_POST['name'];
    $arrayClient['email'] = $_POST['email'];
    $arrayClient['phone'] = $_POST['phone'];
    $arrayClient['address'] = $_POST['address'];

    $this -> ClientModel -> updateClient($arrayClient);


    header('Location:index.php?controller=main&action=listClients');
}
  
public function deleteCLient($idClient){

    $arrayClient['name'] = $_POST['name'];
    $arrayClient['email'] = $_POST['email'];
    $arrayClient['phone'] = $_POST['phone'];
    $arrayClient['address'] = $_POST['address'];

    $this -> ClientModel -> deleteClient($idClient);


    header('Location:index.php?controller=main&action=listClients');
    

}
}

?> 