<?php

namespace App\Models;

use Exception;

ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\Core\DbConnect;
use App\Entities\Creation;
use App\Entities\CategoryEntities;

class InscriptionModel extends DbConnect{

    public function inscription($nom,$prenom,$adresse,$codepostal,$ville,$telephone,$email){
        $this->requete = 'INSERT INTO Inscrit VALUES(NULL,:nom,:prenom,:adresse,:codepostal,:ville,:telephone,:email)';
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->bindParam(':nom',$nom);
        $this->requete->bindParam(':prenom',$prenom);
        $this->requete->bindParam(':adresse',$adresse);
        $this->requete->bindParam(':codepostal',$codepostal);
        $this->requete->bindParam(':ville',$ville);
        $this->requete->bindParam(':telephone',$telephone);
        $this->requete->bindParam(':email',$email);
        $this-> executeTryCatch();

    }
    private function executeTryCatch()
    {
        try {
            $this->requete->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $this->requete->closeCursor();
    }
}