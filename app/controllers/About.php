<?php

class About {
    public function index($nama = 'Ridlwan', $pekerjaan = 'Guru' , $umur = '20'){
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan,
        umur saya adalah $umur tahun.";
    }
    public function page(){
        echo 'About/page';
    }
}

?>