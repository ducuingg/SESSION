<?php
namespace App\Entities;
ini_set('display_errors', 1);
error_reporting(E_ALL);

class InscriptionEntities{
    public $id;
    public $username;
    public $nom;
    public $prenom;
    public $adresse;
    public $mdp;
    public $email;

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id = $id;
    return $this;
}
public function getUsername(){
    return $this->username;
}
public function setUsername($username){
    $this->username = $username;
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
public function getMdp(){
    return $this->mdp;
}
public function setMdp($mdp){
    $this->mdp = $mdp;
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