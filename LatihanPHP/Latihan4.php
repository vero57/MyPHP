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

// 3. Objek Bumi, Uranus, Jupiter
$bumi = new Planet();
$bumi->set_nama_planet("Bumi");
$bumi->set_nama_satelit("Bulan");

$uranus = new Planet();
$uranus->set_nama_planet("Uranus");
$uranus->set_nama_satelit("Titania");

$jupiter = new Planet();
$jupiter->set_nama_planet("Jupiter");
$jupiter->set_nama_satelit("Ganymede");


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

$brio = new Honda();
$brio->set_merk("Brio");
$brio->set_warna("Merah");
$brio->set_jenis("Hatchback");


trait Error_Handling {
    public function error($kode) {
        switch ($kode) {
            case 404:
                return "Bad Request";
        }
    }
}
?>