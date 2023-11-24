<?php
class lingkaran{
    public static $phi=3.14;
}
echo lingkaran::$phi;

class luas{
    public static function hitung_luas($r){ 
        return lingkaran::$phi * $r * $r;
    }
}

class keliling extends lingkaran{
    public static function hitung_keliling($r){
        return lingkaran::$phi * $r * $r * 2;
    } 
}


echo "========";
echo luas::hitung_luas(5);
echo "========";
echo keliling::hitung_keliling(30);

?>