<?php
// main class
interface hengpong{
    // method
     public function dinyalakan() : void;
     public function kirim_sms($nohp, $pesan) : void;
     public function dimatikan() : void;
}

// kelas pewaris
class samsung extends whatsapp implements hengpong {
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

class whatsapp{
    protected $chat;
    protected $image;
    protected $video;

    public function kirim_chat($cht){
        $this->chat = $cht;
    }

    public function kirim_gambar($img){
        $this->image = $img;
    }

    public function kirim_video($vid){
        $this->video = $vid;
    }

    public function get_chat(){
        return $this->chat;
    }

    public function get_image(){
        return $this->image;
    }

    public function get_video(){
        return $this->video;
    }
}


$pc = new samsung();
$pc -> dinyalakan();
$pc -> kirim_sms("081213483422", "Ping...");
$pc -> kirim_chat(" Mengirim Chat ke WA: ");
$pc -> kirim_gambar(" Mengirim Gambar ke WA: ");
$pc -> kirim_video(" Mengirim Gambar ke WA: ");

echo "<br> Mengirim pesan ke nomor: " . $pc ->getNoHp() . "<br>" . "Isi pesan : " . $pc->getPesan();
echo "<br> Mengirim WA" . $pc ->get_chat() . "<br>" . "Mengirim gambar" . $pc ->get_image() . "<br>" . "Mengirim video" . $pc ->get_video();


?>