<?php
class Bidang_Datar {
    public static function luas_persegi_panjang($panjang, $lebar) {
        return $panjang * $lebar;
    }
    
    public static function keliling_persegi_panjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }
    
    public static function luas_lingkaran($jari_jari) {
        return 3.14 * $jari_jari ** 2;
    }
    
    public static function keliling_lingkaran($jari_jari) {
        return 2 * 3.14 * $jari_jari;
    }
    
    public static function luas_segitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }
    
    public static function keliling_segitiga($sisi_a, $sisi_b, $sisi_c) {
        return $sisi_a + $sisi_b + $sisi_c;
    }
}

class Product {
    public static $products = array("Buku" => 20000, "Pensil" => 1000, "Pulpen" => 3000, "Penghapus" => 500);
    
    public static function add_product($nama, $harga) {
        Product::$products->$nama = $harga;
    }
}

class Products {
    public $Buku = 20000;
    public $Pensil = 1000;
    public $Pulpen = 3000;
    public $Penghapus = 500;
}

Product::$products = new Products();

Product::add_product("Penggaris", 1500);
print_r(Product::$products);

?>
