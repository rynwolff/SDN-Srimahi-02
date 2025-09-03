<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('M_Home');
    }

    // halaman pengumuman utama
    public function index()
    {
        $config['base_url']     = site_url('pengumuman/index');
        $config['total_rows']   = $this->db->count_all("tbl_pengumuman");
        $config['per_page']     = 6;
        $config['uri_segment']  = 3; 
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['title']          = 'Pengumuman';
        $data['pengumuman']     = $this->M_Home->get_pengumuman($config['per_page'], $page)->result_array();
        $data['check_pengumuman'] = $config['total_rows'];

        $this->load->view('layout/frontend/header', $data);
        $this->load->view('layout/frontend/navbar', $data);
        $this->load->view('frontend/pengumuman', $data);
        $this->load->view('layout/frontend/footer');
    }

    // halaman detail pengumuman
    public function detail($id)
    {
        $data['pengumuman'] = $this->M_Home->get_pengumuman_by_id($id)->row_array();

        if (!$data['pengumuman']) {
            show_404();
        }

        $data['title'] = $data['pengumuman']['pengumuman_nama'];
        $this->load->view('layout/frontend/header', $data);
        $this->load->view('layout/frontend/navbar', $data);
        $this->load->view('frontend/pengumuman_detail', $data);
        $this->load->view('layout/frontend/footer');
    }
}
?>
