<?php
// CONSTRUCTOR
echo "CONSTRUCTOR";
echo "\n";
echo "\n";
class siswa{
    public $nama;
    public $kelas;
    // properties
    function __construct($nm, $kls){
        $this->nama=$nm;
        $this->kelas=$kls;
    }
    function get_Nama(){
        return $this->nama;
    }

    function get_Kelas(){
        return $this->kelas;
    }
}

$zaka=new siswa("Zaka", "XISIJA1");
$arkan=new siswa("Arkan", "XISIJA1");
echo "Nama: ". $zaka->get_Nama() . "\n" . "Kelas: " . $zaka->get_kelas();
echo "\n";
echo "Nama: ". $arkan->get_Nama() . "\n" . "Kelas: " . $arkan->get_kelas();
?>