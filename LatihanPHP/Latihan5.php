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

$panjang = 5;
$lebar = 10;
echo "Panjang : " . $panjang. "\n";
echo "Lebar : " . $lebar. "\n";
echo "Luas persegi panjang: " . Bidang_Datar::luas_persegi_panjang($panjang, $lebar) . "\n";
echo "Keliling persegi panjang: " . Bidang_Datar::keliling_persegi_panjang($panjang, $lebar) . "\n";

echo "\n";
$jari_jari = 66;
echo "Jari-jari : " . $jari_jari. "\n";
echo "Luas Lingkaran: " . Bidang_Datar::luas_lingkaran($jari_jari) . "\n";
echo "Keliling Lingkaran: " . Bidang_Datar::keliling_lingkaran($jari_jari) . "\n";
echo "\n";

$alas = 16;
$tinggi = 22;
$sisi_a = 10;
$sisi_b = 20;
$sisi_c = 30;
echo "Alas : " . $alas. "\n";
echo "Tinggi : " . $tinggi. "\n";
echo "sisi : " . $sisi_a. ", " .$sisi_b. ", ".$sisi_c ."\n";
echo "Luas segitiga: " . Bidang_Datar::luas_persegi_panjang($panjang, $lebar) . "\n";
echo "Keliling segitiga: " . Bidang_Datar::keliling_persegi_panjang($sisi_a, $sisi_b, $sisi_c) . "\n";
echo "\n";
echo "\n";
class Product {
    public static $products;

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
