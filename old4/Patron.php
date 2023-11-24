<?php
require_once "Employee.php";
class Patron extends Employee {
   
    private string $car;

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }
    public function __construct($name, $lastName, $age, $car)
    {
        $this->name=$name;
        $this->lastName=$lastName;
        $this->age=$age;
        $this->car=$car;

    }

    // cette méthode elle va avoir pour but
    // d'augmenter le salaire de l'ingénieur
    // qui augmenter : le patron
    // le salaire de qui : de l'ingenieur 
    public function augmenteSalaire(Employee $employee){
        // $monIngenieur->setSalary(3000);
        // recuperation du salaire actuel de l'ingenieur dans une variablr
        $salary=$employee->getSalary();
        // augmentation de 20 du salaire en cours
        $salary=$salary*1.2;
        // enregistrement dans la propriété salaire de 
        // l'ingénieur
        $employee->setSalary($salary);
    } 
    public function setPrime(Primable $primableInterface ,
                            int $bonus)
    {
        $primableInterface->setPrime($bonus);
    }
   /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
 

    /**
     * Get the value of car
     */ 
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set the value of car
     *
     * @return  self
     */ 
    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }
}