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
   $co->setId($_POST['id']);
   $co->setUsername($_POST['username']);
//    $co->setEmail($_POST['email']);
//    $co->setNom($_POST['nom']);
//    $co->setPrenom($_POST['prenom']);
//    $co->setAdresse($_POST['adresse']);
   $co->setMdp($_POST['mdp']);
   var_dump($co);
   $connect = $connexion->connexionMembre($co);

    if (isset($_POST['connexion'])){
        if($connect != 1){
            $this->render('login');
            echo "<h5><center>Identifiant ou mot de passe inconnu</center></h5>";
        }
    else
    {
        // header('location:index.php');
        $username = $_POST['username'];
        // $id = $_POST['id'];
        // $_SESSION['id']= $id;
        $_SESSION['username'] = $username;
        $mdp = $_POST['mdp'];
        $_SESSION['mdp'] = $mdp;
            }
        }
    }

    public function update($id){
        $update = new MembreModel();
        if(isset($_POST['action'])){
            $form = new InscriptionEntities();
            $form->setId($_POST['id']);
            $form->setEmail($_POST['email']);
            $form->setNom($_POST['nom']);
            $form->setPrenom($_POST['prenom']);
            $form->setAdresse($_POST['adresse']);
            $update->updateMembre($form);
        }else{
            $updateId = $update->find($id);
            $this->render('membre',['update' => $updateId]);
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