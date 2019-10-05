<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Muhammad Ridlwan",
            "nrp" => "1234567",
            "email" => "ridlwan33@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Adnan Hadiyana",
            "nrp" => "7654321",
            "email" => "adnan44@gmail.com",
            "jurusan" => "Teknik Mesin"
        ],
        [
            "nama" => "Lukmin Hikim",
            "nrp" => "1111111",
            "email" => "l.hikim@gmail.com",
            "jurusan" => "Teknik Pangan"
        ]
    ];

    public function getAllMahasiswa(){
        return $this->mhs;
    }
}