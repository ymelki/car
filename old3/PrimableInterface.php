<?php

interface PrimableInterface extends EmployeInterface {
    public function getPrime();
    public function setPrime(int $bonus);
}