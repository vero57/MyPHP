<?php



class Kendaraan {
    protected $jenis;
    protected $jumlah_roda;
    protected $jumlah_penumpang;
    protected $panjang;
    protected $lebar;

    public function set_jenis($jenis) {
        $this->jenis = $jenis;
    }

    public function set_jumlah_roda($jumlah_roda) {
        $this->jumlah_roda = $jumlah_roda;
    }

    public function set_jumlah_penumpang($jumlah_penumpang) {
        $this->jumlah_penumpang = $jumlah_penumpang;
    }

    public function set_panjang($panjang) {
        $this->panjang = $panjang;
    }

    public function set_lebar($lebar) {
        $this->lebar = $lebar;
    }

    public function get_jenis() {
        return $this->jenis;
    }

    public function get_jumlah_roda() {
        return $this->jumlah_roda;
    }

    public function get_jumlah_penumpang() {
        return $this->jumlah_penumpang;
    }

    public function get_panjang() {
        return $this->panjang;
    }

    public function get_lebar() {
        return $this->lebar;
    }
}

class Motor extends Kendaraan {
    protected $no_polisi;
    protected $merk;
    protected $no_rangka;
    protected $warna;
    protected $cc;
    protected $tahun_produksi;
    protected $tipe;

    public function set_no_polisi($no_polisi) {
        $this->no_polisi = $no_polisi;
    }

    public function set_merk($merk) {
        $this->merk = $merk;
    }

    public function set_no_rangka($no_rangka) {
        $this->no_rangka = $no_rangka;
    }

    public function set_warna($warna) {
        $this->warna = $warna;
    }

    public function set_cc($cc) {
        $this->cc = $cc;
    }

    public function set_tahun_produksi($tahun_produksi) {
        $this->tahun_produksi = $tahun_produksi;
    }

    public function set_tipe($tipe) {
        $this->tipe = $tipe;
    }

    public function get_no_polisi() {
        return $this->no_polisi;
    }

    public function get_merk() {
        return $this->merk;
    }

    public function get_no_rangka() {
        return $this->no_rangka;
    }

    public function get_warna() {
        return $this->warna;
    }

    public function get_cc() {
        return $this->cc;
    }

    public function get_tahun_produksi() {
        return $this->tahun_produksi;
    }

    public function get_tipe() {
        return $this->tipe;
    }
}

class Pemilik extends Motor {
    protected $nik;
    protected $nama;
    protected $ttl;
    protected $jk;
    protected $alamat;
    protected $telpon;

    public function set_nik($nik) {
        $this->nik = $nik;
    }

    public function set_nama($nama) {
        $this->nama = $nama;
    }

    public function set_ttl($ttl) {
        $this->ttl = $ttl;
    }

    public function set_jk($jk) {
        $this->jk = $jk;
    }

    public function set_alamat($alamat) {
        $this->alamat = $alamat;
    }

    public function set_telpon($telpon) {
        $this->telpon = $telpon;
    }

    public function get_nik() {
        return $this->nik;
    }

    public function get_nama() {
        return $this->nama;
    }

    public function get_ttl() {
        return $this->ttl;
    }

    public function get_jk() {
        return $this->jk;
    }

    public function get_alamat() {
        return $this->alamat;
    }

    public function get_telpon() {
        return $this->telpon;
    }
}

$motorku = new Pemilik();
$motorku -> set_jenis('Mobil');
$motorku -> set_jumlah_roda('4');
$motorku -> set_jumlah_penumpang('2');
$motorku -> set_panjang('20m');
$motorku -> set_lebar('10m');
$motorku -> set_no_polisi('L 0514 CNY');
$motorku -> set_merk('Toyota');
$motorku -> set_no_rangka('01281928102');
$motorku -> set_warna('Hitam');
$motorku -> set_cc('200cc');
$motorku -> set_tahun_produksi('2008');
$motorku -> set_tipe('Ultra super duper');
$motorku -> set_nik('2831211931723');
$motorku -> set_nama('Yosua');
$motorku -> set_alamat('Jalan raya Bogor');
$motorku -> set_telpon('08434231221');


echo "Jenis: ". $motorku -> get_jenis() . "\n" ."Jumlah roda: ". $motorku -> get_jumlah_roda(). "\n" ."Jumlah Penumpang: ". $motorku -> get_jumlah_penumpang(). "\n" . "Panjang kendaraan: ". $motorku -> get_panjang(). "\n" . "Lebar kendaraan: ". $motorku -> get_lebar() . "\n" . "No polisi: ". $motorku -> get_no_polisi(). "\n" . "Merek: ". $motorku -> get_merk() . "\n". "No rangka: ". $motorku -> get_no_rangka() . "\n". "Warna: ". $motorku -> get_warna() . "\n" . "CC: ". $motorku -> get_cc() . "\n". "Tahun produksi: ". $motorku -> get_tahun_produksi() . "\n". "Tipe: ". $motorku -> get_tipe() . "\n". "NIK: ". $motorku -> get_nik() . "\n". "Nama: ". $motorku -> get_nama() . "\n" . "Alamat: ". $motorku -> get_alamat() ."\n". "No telepon: ". $motorku -> get_telpon();


?>
