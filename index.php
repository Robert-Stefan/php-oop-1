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
    public $pegi = 18;

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
        $this->pegi = $pegi;
    }

}

// ISTANCE 1 
$



?>