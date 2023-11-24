<?php
// main class
abstract class hengpong{
    // Propeties
    protected $nohp;
    protected $pesan;

    // method
    abstract public function dinyalakan() : void;
    abstract protected function kirim_sms($nohp, $pesan) : void;
    abstract public function dimatikan() : void;
}

// kelas pewaris
class samsung extends hengpong{
    public function dinyalakan() : void{
        echo "Menyalakan PC";
    }
    public function kirim_sms($nohp, $pesan) : void{
        $this->nohp = $nohp;
        $this->pesan = $pesan;
    }
    public function dimatikan() : void{
        echo "Mematikan PC";
    }

    public function getNoHp() {
        return $this->nohp;
    }
    public function getPesan() {
        return $this->pesan;
    }

}




$pc = new samsung();
$pc -> dinyalakan();
$pc -> kirim_sms("081213483422", "Ping...");
echo "<br> Mengirim pesan ke nomor: " . $pc ->getNoHp() . "<br>" . "Isi pesan : " . $pc->getPesan();



?>