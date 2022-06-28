<?php

namespace App\Controllers;

use App\Controllers\Controller as Cont;
use App\Entities\InscriptionEntities;
use App\Models\InscriptionModel;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class InscriptionController extends Cont
{
    public function creation()
    {
        $this->render('inscription');
    }

    public function inscription(){
        $inscription = new InscriptionModel();
        $inscript = new InscriptionEntities();
        if(isset($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['codepostal'],$_POST['ville'],$_POST['telephone'],$_POST['email'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $codepostal = $_POST['codepostal'];
        $ville = $_POST['ville'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $inscription->inscription($nom,$prenom,$adresse,$codepostal,$ville,$telephone,$email);
        }
    }
}