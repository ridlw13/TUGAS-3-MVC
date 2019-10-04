<?php

class About {
    public function index($nama = 'Ridlwan', $pekerjaan = 'Guru'){
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page(){
        echo 'About/page';
    }
}

?>