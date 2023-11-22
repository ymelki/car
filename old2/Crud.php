<?php

class Crud {
    public $pdo ;     
    public function __construct(){
       $this->pdo=new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');
    }
    public function read(){
        $this->pdo->query("select * from user");
    }
}