<?php

namespace App\Controllers;

use App\Controllers\Controller as Cont;
use App\Entities\InscriptionEntities;
use App\Models\InscriptionModel;
use App\Models\MembreModel;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class MembreController extends Cont
{
  public function espaceMembre(){
    $this->render('membre');
    echo "Bienvenue dans votre espace membre!";
  }
  public function connexion(){
   $connexion = new MembreModel();
   $co = new InscriptionEntities();
//    $co->setId($_POST['id']);
   $co->setUsername($_POST['username']);
   $co->setMdp($_POST['mdp']);
//    var_dump($co); renvoi username & mot de passe;
   $connect = $connexion->connexionMembre($co);
//    var_dump($connect); renvoi 1 ou 0
if (isset($_POST['connexion'])){
    if($connect != 1){
        $this->render('index');
        echo "Identifiant ou mot de passe inconnu";
    }
    else{
        session_start();
        $this->render('membre');
        $_SESSION['Inscrit'] = array(
            'username' => $_POST['username'],
            'mdp'=> $_POST['mdp']);
            var_dump($_SESSION['Inscrit']);
            }
        }
    }
}