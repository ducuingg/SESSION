<?php

namespace App\Models;
use PDO;
use Exception;

ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\Core\DbConnect;
use App\Entities\Creation;
use App\Entities\CategoryEntities;
use App\Entities\InscriptionEntities;

class MembreModel extends DbConnect{

    public function find(int $id){
        $this->requete = $this->connexion->prepare("SELECT * FROM Inscrit WHERE id=:id");
        $this->requete->bindParam(':id',$id);
        $this->requete->execute();
        $resultat = $this->requete->fetch();
        return $resultat;
    }
    
    public function connexionMembre(){

        $this->requete ="SELECT * FROM Inscrit WHERE username=?";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->execute(array($_POST['username']));
        $resultat = $this->requete->fetch();
        return $resultat;
        // $this->requete->closeCursor();

        // $username = $_POST['username'];
        // $mdp = $_POST['mdp'];
        // $this->requete = 'SELECT * FROM Inscrit WHERE username=:username AND mdp=:mdp';
        // $this->requete = $this->connexion->prepare($this->requete);
        // $this->requete->bindValue('username',$em->getId());
        // $this->requete->bindValue('mdp',$em->getMdp());
        // $this->requete->execute();
        // $res = $this->requete->fetch(PDO::FETCH_ASSOC);
        // return $res;
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