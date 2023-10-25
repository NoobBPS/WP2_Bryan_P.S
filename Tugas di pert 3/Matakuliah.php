<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        // Load the URL Helper
        $this->load->helper('url');

        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->load->helper('url'); // You might also need this in other methods

        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuliah', $data);
    }
}
