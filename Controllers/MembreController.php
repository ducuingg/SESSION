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
  public function espaceMembre($id)
  {
    if(!empty($_SESSION['username'])){
        $update = new MembreModel();
        if(isset($_POST['action'])){
            $form = new InscriptionEntities();
            $form->setId($_SESSION['id']);
            $form->setEmail($_POST['email']);
            $form->setNom($_POST['nom']);
            $form->setPrenom($_POST['prenom']);
            $form->setAdresse($_POST['adresse']);
            $update->updateMembre($form);
            $updateId = $update->find($id);
            $this->render('membre',['update'=>$updateId]);
        }else{
            $updateId = $update->find($id);
            $this->render('membre',['update' => $updateId]);
        }
    }
    else{
        $this->render('login');
        echo "<h5><center> Vous devez être connecté pour accéder à l'espace membre</center></h5>";
    }
  }

  public function connexion()
    {
   $connexion = new MembreModel();
   $connect = $connexion->connexionMembre();
   $passwordHash = $connect->mdp;
   $password=$_POST['mdp'];
    if (isset($_POST['connexion'])){
        if(!password_verify($password,$passwordHash)){
            $this->render('login');
            echo "<h5><center>Identifiant ou mot de passe inconnu</center></h5>";
        }
    else
    {
        header('location:index.php');
        $username = $connect->username;
        $id = $connect->id;
        $email = $connect->email;
        $mdp = $connect->mdp;
        $nom = $connect->nom;
        $prenom = $connect->prenom;
        $adresse = $connect->adresse;
        $_SESSION['email']= $email;
        $_SESSION['id']= $id;
        $_SESSION['nom']= $nom;
        $_SESSION['username'] = $username;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['adresse'] = $adresse;
            }
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