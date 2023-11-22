<?php
session_start();
//suprimer un élément du tableau
unset($_SESSION['user']);
session_destroy();
// supprimer tout les elements du tableau de la variable
// session
// authentifié, panier, ...
// effacé son panier, son authentification ...
// session_destroy();