<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud');
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    function daftar()
    {
        $config = array(
            array(
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'alamat',
                    'label' => 'Alamat',
                    'rules' => 'required',
            ),
            array(
                    'field' => 'sekolah',
                    'label' => 'Sekolah',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'whatsapp',
                    'label' => 'Whatsapp',
                    'rules' => 'required|numeric'
            ),
            array(
                    'field' => 'nik',
                    'label' => 'NIK',
                    'rules' => 'required|numeric'
            ),
            array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
            )
        );

        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE) 
        {
            redirect('/');
        } 
        else 
        {
            $nama = $this->input->post('nama', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $asal_sekolah = $this->input->post('asal_sekolah', TRUE);
            $sekolah = $this->input->post('sekolah', TRUE);
            $warga = $this->input->post('warga', TRUE);
            $whatsapp = $this->input->post('whatsapp', TRUE);
            $nik = $this->input->post('nik', TRUE);
            $email = $this->input->post('email', TRUE);

            $data = [
                'nama' => $nama,  
                'alamat' => $alamat,
                'asal_sekolah' => $asal_sekolah,
                'nama_sekolah' => $sekolah,
                'warga_negara' => $warga,
                'whatsapp' => $whatsapp,
                'nik' => $nik,
                'email' => $email
            ];

            $aksi = $this->crud->input_data($data, 'pendaftar');
            redirect('/');
            
        }
    }

}