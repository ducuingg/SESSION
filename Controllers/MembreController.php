<?php

namespace App\Controllers;
session_start();
use App\Controllers\Controller as Cont;
use App\Entities\InscriptionEntities;
use App\Models\InscriptionModel;
use App\Models\MembreModel;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class MembreController extends Cont
{
  public function espaceMembre()
  {
    if(!empty($_SESSION['username'])){
        $this->render('membre');
        echo "<h3><center> Espace Membre</center></h3>";
    }
    else{
        $this->render('login');
        echo "<h5><center> Vous devez être connecté pour accéder à l'espace membre</center></h5>";
    }
  }

  public function connexion()
    {
   $connexion = new MembreModel();
   $co = new InscriptionEntities();
   $co->setUsername($_POST['username']);
   $co->setMdp($_POST['mdp']);
   $connect = $connexion->connexionMembre($co);
    if (isset($_POST['connexion'])){
        if($connect != 1){
            $this->render('login');
            echo "<h5><center>Identifiant ou mot de passe inconnu</center></h5>";
        }
    else
    {
        header('location:index.php');
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        $mdp = $_POST['mdp'];
        $_SESSION['mdp'] = $mdp;
            }
        }
    }

    public function update(){
        $update = new MembreModel();
        if(isset($_POST['action'])){
            $form = new InscriptionEntities();
            $form->setId($_POST['id']);
            $form->setEmail($_POST['email']);
            $form->setNom($_POST['nom']);
            $form->setPrenom($_POST['prenom']);
            $form->setAdresse($_POST['adresse']);
            $update->updateMembre($form);
            var_dump($form);
        }
    }

    public function deconnexion(){
        if(session_status() == PHP_SESSION_ACTIVE){
            session_destroy();
            header('location:index.php');
        }
        else{
            header('location:index.php');
        }
    }
}