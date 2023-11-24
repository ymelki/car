<?php

class Trader extends Primable {
     /**
     * Set the value of prime
     *
     * @return  self
     */ 
    public function setPrime($prime)
    {
        $this->prime = $prime+1000;

        return $this;
    }
}