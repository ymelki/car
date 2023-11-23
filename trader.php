<?php

class Trader extends Primable {
    
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