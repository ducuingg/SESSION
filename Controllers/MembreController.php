<?php

namespace App\Controllers;
session_start();
use App\Controllers\Controller as Cont;
use App\Entities\InscritEntities;
use App\Models\MembreModel;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class MembreController extends Cont
{
  public function espaceMembre($id)
  {
    //---------------AVATAR----------------------------------
    if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
        $this->avatar($id);
    }
    if(!empty($_SESSION['username'])){
        $update = new MembreModel();
        if(isset($_POST['action'])){
            $form = new InscritEntities();
            $form->setId($_SESSION['id']);
            $form->setEmail($_POST['email']);
            $form->setNom($_POST['nom']);
            $form->setPrenom($_POST['prenom']);
            $form->setAdresse($_POST['adresse']);
            $update->updateMembre($form);
            $updateId = $update->find($id);
            $this->render('membre',['update'=>$updateId]);
            echo "<h5>Modifications enregistrés !</h5>";
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
            echo "<h5>Identifiant ou mot de passe inconnu</h5>";
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
        $avatar = $connect->avatar;
        $_SESSION['email']= $email;
        $_SESSION['id']= $id;
        $_SESSION['nom']= $nom;
        $_SESSION['username'] = $username;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['adresse'] = $adresse;
        $_SESSION['avatar'] = $avatar;
            }
        }
    }
    public function avatar($id){
        $tailleMax = 2097152;
        $extensionsValides = array('jpg','jpeg','gif','png');
        if($_FILES['avatar']['size'] <= $tailleMax){
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'],'.'),1));
            if(in_array($extensionUpload,$extensionsValides)){
                $chemin = "/home/cefiidev/www/guillaume1284/SESSION/membres/avatars/".$_SESSION['id'].".".$extensionUpload;
                $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
                if($resultat){
                    $updateavatar= new MembreModel();
                    $updateavatar->avatarMembre($id);
                }
                else{
                    echo "erreur d'importation";
                }
            }
            else{
                echo "pas bon format";
            }
        }
        else{
            echo "Votre fichier est trop lourd (max:2Mo)";
        }
    }

    public function delete($id){
        $supprimercompte= new MembreModel();
        $supprimercompte->deletemembre($id);
        $this->deconnexion();
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