<?php
// DESTRUCTOR
echo "DESTRUCTOR";
echo "\n";
echo "\n";
class jomok{
    // Properties
    public $nama;
    public $jenis;

    // Constructor
    function __construct($nm, $jns){
        $this->nama = $nm;
        $this->jenis = $jns;
    }

    // Destructor
    function __destruct(){
        echo "{$this->nama} adalah seekor {$this->jenis}";
        echo "\n";
    }

}

$kucing = new jomok('Si imut', 'Kucing');
$ayam = new jomok('Si hitam', 'Ayam');
?>