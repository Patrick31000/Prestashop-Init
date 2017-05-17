<?php
 class MyModule extends Module {
     public function __construct() {
         $this->name = 'mymodule';    //nom technique
         $this->tab = 'front_office_features'; //catégorie du module
         $this->version = '0.1.0';
         $this->author = 'David Diez';
         $this->displayName = 'Mon module sans fonction'; //nom public
         $this->description = 'Avec ce module, vos clients
                            ne pourront encore rien faire!';
         parent::__construct(); //appel méthode parent
     }
 }
?>