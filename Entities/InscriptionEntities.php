<?php
namespace App\Entities;
ini_set('display_errors', 1);
error_reporting(E_ALL);

class InscriptionEntities{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $codepostal;
    private $ville;
    private $telephone;
    private $email;

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id = $id;
    return $this;
}
public function getNom(){
    return $this->nom;
}
public function setNom($nom){
    $this->nom = $nom;
    return $this;
}
public function getPrenom(){
    return $this->prenom;
}
public function setPrenom($prenom){
    $this->prenom = $prenom;
    return $this;
}
public function getAdresse(){
    return $this->adresse;
}
public function setAdresse($adresse){
    $this->adresse = $adresse;
    return $this;
}
public function getCodePostal(){
    return $this->codepostal;
}
public function setCodePostal($codepostal){
    $this->codepostal = $codepostal;
    return $this;
}
public function getVille(){
    return $this->ville;
}
public function setVille($ville){
    $this->ville = $ville;
    return $this;
}
public function getTelephone(){
    return $this->telephone;
}
public function setTelephone($telephone){
    $this->telephone = $telephone;
    return $this;
}
public function getEmail(){
    return $this->email;
}
public function setEmail($email){
    $this->email = $email;
    return $this;
}
}