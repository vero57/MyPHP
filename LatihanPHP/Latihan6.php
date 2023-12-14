<?php
namespace Lingkaran;
class Rumus {
    public function keliling($radius) {
        return 2 * pi() * $radius;
    }
}

namespace PersegiPanjang;
class Rumus {
    public function keliling($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }
}

namespace JajarGenjang;
class Rumus {
    public function keliling($sisi1, $sisi2) {
        return 2 * ($sisi1 + $sisi2);
    }
}

use Lingkaran\Rumus as LingkaranRumus;
use PersegiPanjang\Rumus as PersegiPanjangRumus;
use JajarGenjang\Rumus as JajarGenjangRumus;

$lingkaran = new LingkaranRumus();
echo "Keliling lingkaran: " . $lingkaran->keliling(10) . "\n";

$persegiPanjang = new PersegiPanjangRumus();
echo "Keliling persegi panjang: " . $persegiPanjang->keliling(10, 5) . "\n";

$jajaranGenjang = new JajarGenjangRumus();
echo "Keliling jajaran genjang: " . $jajaranGenjang->keliling(10, 5) . "\n";



class Data_Siswa implements \Iterator {
    private $siswa = array();
    private $position = 0;

    public function __construct($siswa) {
        $this->siswa = $siswa;
    }

    public function rewind() :
    void{
        $this->position = 0;
    }

    public function current() :
    mixed {
        return $this->siswa[$this->position];
    }

    public function key() :
    int{
        return $this->position;
    }

    public function next(): 
    void{
        ++$this->position;
    }

    public function valid() :
    bool{
        return isset($this->siswa[$this->position]);
    }
}

$siswa = array(
    array("NIS" => "00645835947934", "Nama Siswa" => "Kanz", "Kelas" => "10"),
    array("NIS" => "00812732837", "Nama Siswa" => "Rusdi", "Kelas" => "11"),
    array("NIS" => "007348279279", "Nama Siswa" => "Dafiq", "Kelas" => "20"),
);

$iterator = new Data_Siswa($siswa);

foreach ($iterator as $siswa) {
    echo "NIS: " . $siswa["NIS"] . ", Nama Siswa: " . $siswa["Nama Siswa"] . ", Kelas: " . $siswa["Kelas"] . "\n";
}


?>
