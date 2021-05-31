<?php 
/**
 * USER CLASS
 */
class User {
    /**
     * Attributes/Properties/Variables
     */
    public $title;
    public $description;
    public $year;
    public $pegi;

    /**
     * Constructor
     * 
     * public default
     */
    function __construct($title, $description, $year) {

        $this->title = $title;
        $this->description = $description;
        $this->year = $year;

    }
    /**
     * SET PEGI
     */
    public function setPegi($pegi) {
        if($pegi > 18) {
            echo 'Attenzione! Film per maggiorenni!';
        } else {
            echo 'Il film è adatto a tutta la famiglia!';
        }
    }

}

// ISTANCE 1 
$jurassic = new User('Jurassic World', 'Quando i dinosauri seminano il caos sull\'isola sei ragazzi di un campo avventura sul versante opposto di Isla Nublar devono unire le forze per sopravvivere.', 2020);

//PRINT DATI
echo "<p>$jurassic->title</p>";
echo "<p>$jurassic->description</p>";
echo "<p>Film rilasciato il: $jurassic->year</p>";
$jurassic->setPegi(14);









?>