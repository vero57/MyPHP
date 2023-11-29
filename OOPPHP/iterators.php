<?php
class data_barang implements Iterator{
    // properties
    public $posisi = 0;
    public $judul = [];
    public $barang = ["001", "Pulpen", 24, 4500];

    // method
    public function __construct($judul)
    {
        $this -> judul = array_values($judul);
    }
    public function current(): mixed
    {
        return $this -> barang[$this->posisi];
    }
    public function key(): mixed
    {
        return $this -> posisi;
    }
    public function next(): void
    {
        $this -> posisi++;
    }
    public function rewind(): void
    {
        $this->posisi = 0;
    }
    public function valid(): bool
    {
        return $this->posisi < count($this->barang);
    }
    public function get_judul(){
        return $this->judul;
    }
}

// function yang menggunakan iterable
function tampil_judul(iterable $j){
    foreach($j as $i => $judul){
        echo $judul . "\n";
    }
    function printIterable(iterable $Data_Barang){
        foreach($Data_Barang as $key => $item){
            echo $item. "\n";
        }
    }
}


// Menggunakan iterator sebagai iterable
$data = new data_barang(["Kode", "Item Barang", "Jumlah", "Harga"]);
tampil_judul($data->get_judul());
echo "\n";
printIterable($data);
?>