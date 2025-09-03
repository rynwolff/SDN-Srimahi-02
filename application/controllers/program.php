<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('M_Home');
        $this->load->helper('text'); 
    }

    // Halaman daftar semua program
    public function index()
    {
        $config['base_url'] = site_url('program/index');
        $config['total_rows'] = $this->db->count_all("program");
        $config['per_page'] = 6;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['title'] = 'Program Sekolah';
        $data['programs'] = $this->M_Home->get_program($config['per_page'], $data['start'])->result_array();
        $data['check_program'] = count_data("program");

        $this->load->view('layout/frontend/header', $data);
        $this->load->view('layout/frontend/navbar', $data);
        $this->load->view('frontend/program', $data);
        $this->load->view('layout/frontend/footer');
    }

    // Halaman detail program
    public function detail($id)
    {
        $data['program'] = $this->M_Home->getDetailById($id);
        if (!$data['program']) {
            show_404();
        }
        $data['title'] = 'Detail Program';

        $this->load->view('layout/frontend/header', $data);
        $this->load->view('layout/frontend/navbar', $data);
        $this->load->view('frontend/program_detail', $data);
        $this->load->view('layout/frontend/footer');
    }
}
