<?php
function data_kelas(iterable $datas){
    foreach ($datas as $data){
        echo "\n" . $data . "\n";
    }
}

$kelas = ['X SIJA 1', 'X SIJA 2', 'XI SIJA 1', 'XI SIJA 2', 'XII SIJA 1', 'XII SIJA 2', 'XIII SIJA 1', 'XIII SIJA 2'];
echo "DATA KELAS SIJA: \n";
data_kelas($kelas);

function data_buah():iterable {
    return ['Apel', 'Anggur', 'Jeruk', 'Pisang', 'Duren', 'Mangga'];
}



$buah = data_buah();
echo 'DATA BUAH-BUAHAN: ';
foreach($buah as $i=>$data){
    if($i < count($buah)-1){
        echo $data . ', ';
    }else{
        echo 'dan ' . $data;
    }
}
?>