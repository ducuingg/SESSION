<?php
namespace App\Core;

use PDO;
use Exception;

class DbConnect{
    protected $connexion;
    protected $requete;

    const SERVER   = "localhost";
    const USER     = "debian-sys-maint";
    const PASSWORD = "ibc0hEsi58Fa5uFU";
    const BASE     = "session";

    public function __construct(){
        try {
            $this->connexion = new PDO("mysql:host=".self::SERVER.";dbname=".self::BASE, self::USER,
            self::PASSWORD);

            $this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            // Encodage caractères spéciaux en UTF8
            $this->connexion->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,"SET NAMES utf8");
        }
        catch(Exception $e){
            die('Erreur:'.$e->getMessage());
        }
    }

}