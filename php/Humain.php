<?php

//  Humain = un nom un prenom et il doit se présenter (dire son nom et son prenom )


class Humain {

  protected $nom;
  protected $prenom;

  public function __construct($nom = null,$prenom = null) {

   $this->nom = $nom;
   $this->prenom = $prenom;

 }
  public function sePresenter(){
    var_dump("Bonjour je m'appelle " . $this->prenom . $this->nom);
  }

}



git remote add so lienverslegithub

/****************** TEST/*******************/

// $sylvain = new Humain('Romero','Sylvain');
//  $sylvain->sePresenter();

