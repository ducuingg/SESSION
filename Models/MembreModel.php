<?php

namespace App\Models;

use Exception;

ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\Core\DbConnect;
use App\Entities\Creation;
use App\Entities\CategoryEntities;
use App\Entities\InscriptionEntities;

class MembreModel extends DbConnect{
    
    public function connexionMembre(){

        $this->requete ="SELECT COUNT(*) FROM Inscrit WHERE username=? AND mdp=?";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->execute(array($_POST['username'],$_POST['mdp']));
        $resultat = $this->requete->fetchColumn();
        return $resultat;
        $this->requete->closeCursor();
    }

    public function updateMembre(InscriptionEntities $em){
        $this->requete = "UPDATE Inscrit SET email=:email,nom=:nom,prenom=:prenom,adresse=:adresse WHERE id=:id";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->bindValue(':id',$em->getId());
        $this->requete->bindValue(':email',$em->getEmail());
        $this->requete->bindValue(':nom',$em->getNom());
        $this->requete->bindValue(':prenom',$em->getPrenom());
        $this->requete->bindValue(':adresse',$em->getAdresse());
        $this->executeTryCatch();

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