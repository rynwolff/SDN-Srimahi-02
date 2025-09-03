<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Blog');
        $this->load->model('M_Home'); 
        $this->load->database();
    }

    public function index()
    {
        $keyword = $this->input->post('keyword', TRUE);

        // Proteksi biar ga null
        if (empty($keyword)) {
            redirect('');
        }

        // Search ke beberapa tabel
        $data['keyword'] = $keyword;
        $data['blog_results'] = $this->M_Blog->search_blog_all($keyword);
        $data['program_results'] = $this->M_Home->search_program($keyword);
        $data['agenda_results'] = $this->db->like('agenda_nama', $keyword)->get('tbl_agenda')->result_array();
        $data['pengumuman_results'] = $this->db->like('pengumuman_nama', $keyword)->get('tbl_pengumuman')->result_array();

        $this->load->view('layout/frontend/header', $data);
        $this->load->view('frontend/search_result', $data);
        $this->load->view('layout/frontend/footer');
    }
}
