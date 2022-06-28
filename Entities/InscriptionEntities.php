<?php
namespace App\Entities;
ini_set('display_errors', 1);
error_reporting(E_ALL);

class InscriptionEntities{
    private $id;
    private $username;
    private $mdp;
    private $email;

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
public function getMdp(){
    return $this->mdp;
}
public function setmdp($mdp){
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