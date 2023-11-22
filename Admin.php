<?php

// un admin a les meme caracteristique qu'un user
// et d'autres propriétés ou méthodes
// on le fait hériter de user (copier coller de user)
class Admin extends User {

    // modifier la classe admin
    public int $right;

    // objectif : appliquer le constructeur du parent de user
    // et je veux rajouter l'initialisation en parametre
    // de right
    public function __construct($nom, $last_name, $age,$right)
    {
        // on appelle le constructeur parent
        // avec les parametre nom prenom et age
        parent::__construct($nom,$last_name,$age);
        // on peut modifier les droits.
        $this->right=$right;
    }
    

}