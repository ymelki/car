<?php
// classe : définition d'un entité
// Propriété et des méthodes
class User {
    // propriété name qui est de type string
    public string $name;
    // propriété lastname qui est de type string
    public string $lastName;
    // propriété age qui est de type int
    public int $age;

    // code qui va être executé lors de l'instanciation
    // de la classe.
    public function __construct(string $name,
                                string $lastName,
                                int $age)
    {
        // echo "je m'instancie ! ";
        // je modifie les propriétés nom prenom et age
        $this->name=$name;
        $this->lastName=$lastName;
        $this->age=$age;
    }

    // des fonctions qu'on appelle des méthodes
    // car elle sont rattaché à l'objet
    // qui les utilise
    public function sePresenter()
    { 
        // afficher des informations.
        // le mot clé this qui va nous permettre
        // d'accéder au propriété et méthode de
        // la classe. on affiche les propriété
        // nom  prénom et age
        echo "Bonjour je m'appelle ".$this->lastName." ".$this->name." ".$this->age;
    }

    public function setName(string $name)
    {
        // la fonction va pouvoir modifier le nom
        // de l'objet grace au parametre
        // on peut modifier la propriété de l'objet
        // $user1->name 
        $this->name=$name;
    }


}