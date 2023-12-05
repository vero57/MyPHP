<?php
abstract class Galaxy {
    protected $nama_galaxy;
    protected $nama_planet;

    public function set_nama_galaxy($nama_galaxy) {
        $this->nama_galaxy = $nama_galaxy;
    }

    public function get_nama_galaxy() {
        return $this->nama_galaxy;
    }

    public function set_nama_planet($nama_planet) {
        $this->nama_planet = $nama_planet;
    }

    public function get_nama_planet() {
        return $this->nama_planet;
    }
}


class Planet extends Galaxy {
    protected $nama_satelit;

    public function set_nama_satelit($nama_satelit) {
        $this->nama_satelit = $nama_satelit;
    }

    public function get_nama_satelit() {
        return $this->nama_satelit;
    }
}


$bumi = new Planet();
$bumi->set_nama_planet("Bumi");
$bumi->set_nama_satelit("Bulan");
echo "Nama Planet: " . $bumi->get_nama_planet() . "\n" . "Nama Satelit: " . $bumi->get_nama_satelit();

echo "\n";
echo "\n";

$uranus = new Planet();
$uranus->set_nama_planet("Uranus");
$uranus->set_nama_satelit("Titania");
echo "\n". "Nama Planet: " . $uranus->get_nama_planet() . "\n" . "Nama Satelit: " . $uranus->get_nama_satelit();

echo "\n";
echo "\n";

$jupiter = new Planet();
$jupiter->set_nama_planet("Jupiter");
$jupiter->set_nama_satelit("Ganymede");
echo "\n"."Nama Planet: " . $jupiter->get_nama_planet() . "\n" . "Nama Satelit: " . $jupiter->get_nama_satelit();

echo "\n";
echo "\n";

interface Mobil {
    public function set_merk($merk);
    public function get_merk();
    public function set_warna($warna);
    public function get_warna();
    public function set_jenis($jenis);
    public function get_jenis();
}


class Suzuki implements Mobil {
    protected $merk;
    protected $warna;
    protected $jenis;

    public function set_merk($merk) {
        $this->merk = $merk;
    }

    public function get_merk() {
        return $this->merk;
    }

    public function set_warna($warna) {
        $this->warna = $warna;
    }

    public function get_warna() {
        return $this->warna;
    }

    public function set_jenis($jenis) {
        $this->jenis = $jenis;
    }

    public function get_jenis() {
        return $this->jenis;
    }
}

class Honda implements Mobil {
    protected $merk;
    protected $warna;
    protected $jenis;

    public function set_merk($merk) {
        $this->merk = $merk;
    }

    public function get_merk() {
        return $this->merk;
    }

    public function set_warna($warna) {
        $this->warna = $warna;
    }

    public function get_warna() {
        return $this->warna;
    }

    public function set_jenis($jenis) {
        $this->jenis = $jenis;
    }

    public function get_jenis() {
        return $this->jenis;
    }
}


$ertiga = new Suzuki();
$ertiga->set_merk("Ertiga");
$ertiga->set_warna("Putih");
$ertiga->set_jenis("MPV");
echo "Merk mobil: " . $ertiga->get_merk() . "\n" . "Warna Mobil: " . $ertiga->get_warna(). "\n" . "Jenis: " . $ertiga->get_jenis();

echo "\n";
echo "\n";
$brio = new Honda();
$brio->set_merk("Brio");
$brio->set_warna("Merah");
$brio->set_jenis("Hatchback");
echo "Merk mobil: " . $brio->get_merk() . "\n" . "Warna Mobil: " . $brio->get_warna(). "\n" . "Jenis: " . $brio->get_jenis();


trait Error_Handling {
    public function error($code) {
        switch ($code) {
            case 404:
                return "\n"." Bad request";
        }
    }
}

class WebPage {
    use Error_Handling;
}

$page = new WebPage();
echo $page->error(404);

?>
