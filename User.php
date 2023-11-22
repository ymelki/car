<?php

class User {
    private string $name;
    private string $lastName;
    // propriété age qui est de type int
    private int $age;

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        if ($age > 0 && $age <150){
            $this->age=$age;
        }
        else {
            throw new Error("Error: Age is not valid");
        }
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
}