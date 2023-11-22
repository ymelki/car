<?php
// classe
// Propriété et des méthodes
class User {
    public string $name;
    public string $lastName;
    public int $age;

    // code qui va être executé lors de l'instanciation
    // de la classe.
    public function __construct(string $name,
                                string $lastName,
                                int $age)
    {
        // echo "je m'instancie ! ";
        $this->name=$name;
        $this->lastName=$lastName;
        $this->age=$age;
    }

    public function sePresenter()
    { 
        echo "Bonjour je m'appelle ".$this->lastName." ".$this->name." ".$this->age;
    }

    public function setName(string $name)
    {
        $this->name=$name;
    }


}