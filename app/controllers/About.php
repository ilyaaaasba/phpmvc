<?php
class About {
    public function index($nama = 'Ilyas', $kota = 'Cimahi') {
        echo "Halo nama saya $nama, saya tinggal di $kota"; 
    }
    public function page() {
        echo 'About/page';
    }
}