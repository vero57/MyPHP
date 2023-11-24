<?php
// INHERITANCE Atau pewarisan
class orangtua{
    public $rumah;
    public $mobil;

    // Constructor
    function __construct($rmh, $mbl)
    {
        $this->rumah = $rmh;
        $this->mobil = $mbl;
    }

    // Methods protected
    protected function orangtua(){
        echo $this->rumah . " dan ". $this->mobil;
    }

}


// Kelas pewaris
class anak extends orangtua{
    function harta(){
        echo "Ayah dan ibuku mewarisi hartanya berupa ";
        $this-> orangtua();
    }
}

$anak = new anak("Rumah dua lantai", "Mobil supercar");
$anak->harta();
?>