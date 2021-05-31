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
    function __construct($title, $description) {

        $this->title = $title;
        $this->description = $description;

    }
    /**
     * SET PEGI
     */
    public function setPegi($pegi) {
        $this->pegi = $pegi;
    }

}




?>