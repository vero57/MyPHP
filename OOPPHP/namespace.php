<?php
namespace honda;
    class motor{
        public $merek;
        public $jenis;
        public function __construct($merek, $jenis)
        {
            $this->merek = $merek;
            $this->jenis = $jenis;
        }

        public function get_merek(){
            return $this->merek;
        }

        public function get_jenis(){
            return $this->jenis;
        }
    }


    namespace yamaha;
    class motor{
        public $merek;
        public $jenis;
        public function __construct($merek, $jenis)
        {
            $this->merek = $merek;
            $this->jenis = $jenis;
        }

        public function get_merek(){
            return $this->merek;
        }

        public function get_jenis(){
            return $this->jenis;
        }
    }


use \honda\motor as honda;
use \yamaha\motor as yamaha;

$honda = new honda("Honda", "Beat");
$yamaha = new yamaha("Yamaha", "Mio");
echo "Merek Motor: " . $honda->get_merek() . "\n" . "Jenis motor: " . $honda->get_jenis();
?>