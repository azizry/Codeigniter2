<?php 

class About extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = 'Aziz Luqman Hidayat';
         $data['umur'] = '20';
          $data['pekerjaan'] = 'Mahasiswa.';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}