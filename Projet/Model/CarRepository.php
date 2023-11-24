<?php

class CarRepository 
{
    private $pdo;
    public function __construct()
    {
        $this->pdo=Database::getPdo();
    }

    // read all rows
    public function getRows(){
         //2 query : all cars
        $query = "SELECT * FROM car";
        $statement = $this->pdo->query($query);
        $cars = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $cars;
    }

    // read one row
    public function getRow($id){
        // 3 query car where id = $_GET (prepare)
        $query = "SELECT * FROM car where id=:myId";
        // query prepare with PDO 
        $statement = $this->pdo->prepare($query);
        // definie ":myid"
        $statement->bindValue(':myId', $id, \PDO::PARAM_INT);
        // execute
        $statement->execute();
        // get data
        // $statement->setFetchMode(PDO::FETCH_CLASS, 'Car');
        // $car = $sth->fetch(); 
        $car = $statement->fetch(PDO::FETCH_ASSOC);
        return $car;
    }
}