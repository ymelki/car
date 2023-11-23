<?php

Interface EmployeInterface {
    // il doit avoir une méthode getSalary
    public function getSalary();

    // il doit avoir une méthode setSalary($salary )
    public function setSalary(string $salary);
}