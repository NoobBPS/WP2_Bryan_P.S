<?php

class Web
{
    public function __construct()
    {
        // Hapus baris $this->load->helper('url'); dari konstruktor
    }

    public function index()
    {
        // Muat helper URL langsung di dalam metode
        $data['judul'] = "Halaman Depan";

        // Ganti dengan include atau require sesuai kebutuhan
        include 'v_header.php';
        include 'v_index.php';
        include 'v_footer.php';
    }
}
