<?php

abstract class Primable extends Employee {
    private int $prime;

    abstract public function getPrime();
    
    abstract public function setPrime(int $bonus);
  
}