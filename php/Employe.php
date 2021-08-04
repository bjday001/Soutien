<?php

// Employe = un nom un prenom un metier et il doit se présenter et dire son metier 

class Employe extends Humain
{
    // private $nom;
    // private $prenom;
    private $metier;
    


public function __construct($nom = null , $prenom = null, $metier = null )

{
    
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->metier = $metier;

}

// public function sePresenter()
// {
//     var_dump(" je me présente, je m'appelle " . $this->nom . " " . $this->prenom . "  et mon métier est  " . $this->job);
// }


}

$brahim = new Employe('Jday','Brahim','employe.');


var_dump( $brahim->sePresenter() )

    
     
    
    /****************** TEST ********************/
 
// $brahim2 = new employe('Jday2','Brahim2','employe2');
// $brahim2->se_presenter();
;


git init