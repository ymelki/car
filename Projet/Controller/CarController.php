<?php

class CarController {

    public function getRow($id){             
        // // url : /car
        $carRepository=new CarRepository();
        $car=$carRepository->getRow($id);
        var_dump($car);
        require "/../View/CarView.php";

    }
    public function getRows(){             
        // retrieve all cars
        // url : /cars
        $carRepository=new CarRepository();
        $cars=$carRepository->getRows();

        require "../View/CarsView.php";
    }

}