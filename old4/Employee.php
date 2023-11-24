<?php

abstract class Employee {
    private string $name;
    private string $lastName;
    // propriété age qui est de type int
    private int $age;
    protected int $salary;


    public function __construct($name, $lastName, $age, $salary)
    {
        $this->name=$name;
        $this->lastName=$lastName;
        $this->age=$age;
        $this->salary=$salary;
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
     * Get the value of salary
     */ 



     public function getSalary(){
        return $this->salary;
     }

    // il doit avoir une méthode setSalary($salary )
    public function setSalary(int $salary){
        $this->salary=$salary;
    }


}