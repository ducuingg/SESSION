<?php

namespace App\Models;

use Exception;

ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\Core\DbConnect;
use App\Entities\Creation;
use App\Entities\CategoryEntities;
use App\Entities\InscriptionEntities;

class InscriptionModel extends DbConnect{

    public function inscription(InscriptionEntities $form){
        $this->requete = 'INSERT INTO Inscrit VALUES(NULL,:username,:email,:mdp)';
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->bindValue(':username',$form->getUsername());
        $this->requete->bindValue(':email',$form->getEmail());
        $this->requete->bindValue(':mdp',$form->getMdp());
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