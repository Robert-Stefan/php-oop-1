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
        if($pegi >= 18) {
            echo 'Attenzione! Film per maggiorenni!';
        } else {
            echo 'Il film è adatto a tutta la famiglia!';
        }
    }
}

// ISTANCE 1 
$jurassic = new User('Jurassic World', 'Quando i dinosauri seminano il caos sull\'isola sei ragazzi di un campo avventura sul versante opposto di Isla Nublar devono unire le forze per sopravvivere.', 2020);

//PRINT DATI
echo "<h2>$jurassic->title</h2>";
echo "<p>$jurassic->description</p>";
echo "<p>Film rilasciato il: $jurassic->year</p>";
$jurassic->setPegi(14);

// ISTANCE 2
$american_pie = new User('American Pie', 'Finite le superiori un gruppo di amici un po\' imbranati, che hanno tutti problemi a trovare una ragazza, decidono di fare una sfida per la festa di fine perdere la verginità prima di iscriversi al college. Non sarà facile.', 1999); 

// PRINT DATI
echo "<h2>$american_pie->title</h2>";
echo "<p>$american_pie->description</p>";
echo "<p>Film rilasciato il: $american_pie->year</p>";
$american_pie->setPegi(18);

?>