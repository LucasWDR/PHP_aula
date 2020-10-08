<?php

class clientsModel{

var $result;

    public function listClients()
    {
        require_once('bd/connectClass.php');
        $Oconn = new connectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getConn();

        $sql ='SELECT *FROM clients';

        $this -> result = $conn -> query($sql);
    }

    public function getClient($idClient)
    {
     $sql= " SELECT * FROM clients WHERE idClient = {$idClient}";

     $this-> result = $this -> conn -> query($sql);
    }

    public function updateClient($arrayClient)
    {
        $sql=" UPDATE clients 
            set
             name='{$arrayClient['name']}',
             email='{$arrayClient['email']}',
             phone='{$arrayClient['phone']}',
             address='{$arrayClient['address']}'
         where
            idClient={$arrayClient['idClient']}
    ";
    $this-> conn -> query($sql);
    }


    public function deleteClient($idClient)
    {

        $sql=" DELETE FROM clients  where idClient={$idClient['idClient']}";
  
     $this-> conn -> query($sql);
    }

    public function getConsult()
    {
        return $this -> result;
    }
}

?>