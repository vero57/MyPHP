<?php
// ACCESS MODIFIERS
class MCD{
    //properties
    public $namamenu;
    protected $hargamenu;
    private $pilihanmenu;

    function set_nama($nm){
        $this->namamenu = $nm;
    }

    function get_nama(){
        return $this->namamenu;
    }

    public function set_harga($hrg){
        $this->hargamenu = $hrg;
    }

    public function get_harga(){
        $this->hargamenu;
    }


    private function set_pilihan($plhmn){
        $this->pilihanmenu = $plhmn;
    }

    private function get_pilihan(){
        return $this->pilihanmenu;
    }

}

$ayambakar = new MCD();
$ayambakar -> set_nama("Ayam bakar");
$ayambakar -> set_harga("100.000");
$ayambakar -> set_pilihan("Bakar/Goreng");


echo $ayambakar->get_nama();
?>
