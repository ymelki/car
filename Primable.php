<?php

abstract class Primable extends Employee {
    protected int $prime;

     
    abstract public function setPrime(int $bonus);
  
}