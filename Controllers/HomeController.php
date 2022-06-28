<?php
namespace App\Controllers;
ini_set('display_errors', 1);
error_reporting(E_ALL);

class HomeController extends Controller{

    public function index()
    {
        $this->render('index');
    }
}