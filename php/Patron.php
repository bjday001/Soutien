<?php



// Patron = un nom un prenom une voiture et un metier et il doit se présenter en disant son metier et il doit rouler ("je roule")


class Patron extends Employe
{
    private $voiture;

    public function __construct($nom = null, $prenom = null, $voiture = null, $metier = null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->voiture = $voiture;
        $this->metier = $metier;
    }
    
    public function sePresenter()
    {
        var_dump("Bonjour je m'appelle $this->nom, $this->prenom mon metier est $this->metier");
    }
    
    public function jeRoule()
    {
        var_dump("Bonjour je roule en $this->voiture");
    }
}   



/************ TEST *********************/
$mathieu = new Patron('Gillet', 'Mathieu', 'BMW','Commercial');

