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
        // $this->requete = 'SELECT username,mdp FROM Inscrit WHERE id=id';
        // $resultat = $this->connexion->query($this->requete);
        // $list = $resultat->fetchAll();
        // return $list;
        // var_dump($list);

        $this->requete ="SELECT COUNT(*) FROM Inscrit WHERE username=? AND mdp=?";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->execute(array($_POST['username'],$_POST['mdp']));
        $resultat = $this->requete->fetchColumn();
        return $resultat;
        $this->requete->closeCursor();


    }
    // $this->requete = 'INSERT INTO Inscrit VALUES(NULL,:username,:email,NULL,NULL,NULL,:mdp)';
    // $this->requete = $this->connexion->prepare($this->requete);
    // $this->requete->bindValue(':username',$form->getUsername());
    // $this->requete->bindValue(':email',$form->getEmail());
    // $this->requete->bindValue(':mdp',$form->getMdp());
    // $this-> executeTryCatch();

    
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