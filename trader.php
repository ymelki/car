<?php

class Trader implements PrimableInterface {
    
    private string $name;
    private string $lastName;
    // propriété age qui est de type int
    private int $age;
    private int $salary;
    private int $prime;


    public function __construct(string $name,string $lastName,int $age,int $salary,int $prime)
    {
        $this->name=$name;
        $this->setLastName($lastName);
        $this->setAge($age);
        $this->setSalary($salary);
        $this->setPrime($prime);
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
    public function getSalary()
    {
        return $this->salary;
    }

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
     * Get the value of prime
     */ 
    public function getPrime()
    {
        return $this->prime;
    }

    /**
     * Set the value of prime
     *
     * @return  self
     */ 
    public function setPrime($prime)
    {
        $this->prime = $prime;

        return $this;
    }
}