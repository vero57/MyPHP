<?php
// class Constanta atau Konstanta

class Konstanta{
    const PHI = 3.14;
}
echo "Nilai dari PHI = ". Konstanta::PHI;
echo "\n";

class pesan{
    const ERROR = "Terjadi kesalahan saat menghubungkan ke server";
    public function error(){
        echo self::ERROR;
    }

}

$err = new pesan();
$err->error();
?>