<?php

// trait pesan{
//     public function bad_request(){
//         echo "Gagal terhubung ke Server, silahkan coba beberapa saat lagi";
//     }
// }

// class koneksi{
//     use pesan;
// }

// $konek = new koneksi();
// $konek -> bad_request();




trait sucsess{
    public function sucsess_message(){
        echo "Congratulations, your account has been registered";
    }

    public function failed_message(){
        echo "Failed to create your account";
    }
}


class akun{
    use sucsess;


    public $username;
    public $password;

    public function set_username($usn){
        $this-> username = $usn;
    }

    public function set_password($pswd){
        $this-> password = $pswd;
    }

    public function get_username(){
        return $this->username;

    }
    public function get_password(){
        return $this->password;
        
    }
}

$account = new akun();
$account->set_username("Putra Jomok");
$account->set_password("Putra Jomok");
if ($account->get_username() == "" or $account->get_password() == ""){
    echo $account->failed_message();
}else {
    echo $account->sucsess_message();
}





?>