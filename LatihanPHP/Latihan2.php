<?php


class kendaraan{
    // properties
    public $nama;
    protected $jenis;
    private $merek;

    function __construct($nm = "", $jns = "", $mrk = ""){
        $this->nama = $nm;
        $this->jenis = $jns;
        $this->merek = $mrk;
    }

    public function set_nama($nm){
        $this->nama=$nm;
    }

    public function get_nama(){
        return $this->nama;
    }

   

     function __destruct()
    {
        echo " Jenis kendaraan: " . $this->jenis."<br>";
        echo " Merek kendaraan: " . $this->merek; 
    }

}


$motor = new kendaraan("Honda Beat", "Motor", "Honda");
echo "Nama kendaraan: " . $motor->get_nama()."<br>";


?>