<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/M_program','M_program');
        $this->load->helper(['text', 'url']);
    }

    public function index() {
        $data['title'] = 'Program Sekolah';
        $data['contentTitle'] = 'Data Program Sekolah';
        $data['programs'] = $this->M_program->get_all();
        $data['view'] = 'admin/program/index';
        $this->load->view('layout/backend/content', $data);
    }

    public function create() {
        $data['title'] = 'Tambah Program';
        $data['contentTitle'] = 'Tambah Program Baru';
        $data['view'] = 'admin/program/create';
        $this->load->view('layout/backend/content', $data);
    }

    public function store()
{
	$config['upload_path'] = './uploads/program/';
	$config['allowed_types'] = 'jpg|png|jpeg';
	$config['max_size'] = 2048;

	$this->load->library('upload', $config);

	if ($this->upload->do_upload('file')) {
		$file = $this->upload->data();

		$data = [
			'nama_program' => $this->input->post('nama_program'),
			'gambar' => $file['file_name'],
			'deskripsi_program' => $this->input->post('deskripsi_program'),
			'detail_program' => $this->input->post('detail_program'),
		];

		$this->db->insert('program', $data);
		$this->session->set_flashdata('success', 'Program berhasil ditambahkan');
		redirect('admin/Program');
	} else {
		$this->session->set_flashdata('error', $this->upload->display_errors());
		redirect('admin/Program/create');
	}
}

    public function edit($id) {
        $data['title'] = 'Edit Program';
        $data['contentTitle'] = 'Edit Program Sekolah';
        $data['program'] = $this->M_program->get_by_id($id);
        $data['view'] = 'admin/program/edit';
        $this->load->view('layout/backend/content', $data);
    }

    public function update($id) {
        $config['upload_path']   = './uploads/program/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);

        $data = [
            'nama_program'       => $this->input->post('nama_program'),
            'deskripsi_program'  => $this->input->post('deskripsi')
        ];

        if ($this->upload->do_upload('file')) {
            $uploaded = $this->upload->data('file_name');
            $data['gambar'] = $uploaded;

            // Hapus gambar lama kalau ada
            $old = $this->M_program->get_by_id($id);
            if ($old && $old->gambar) {
                $old_path = './uploads/program/' . $old->gambar;
                if (file_exists($old_path)) unlink($old_path);
            }
        }

        $this->M_program->update($id, $data);
        redirect('admin/Program');
    }

    public function delete($id) {
        $row = $this->M_program->get_by_id($id);
        if ($row && $row->gambar) {
            $path = './uploads/program/' . $row->gambar;
            if (file_exists($path)) unlink($path);
        }
        $this->M_program->delete($id);
        redirect('admin/Program');
    }

    public function truncate()
{
    $this->M_program->truncate();
    redirect('admin/Program');
}
    public function get_detail($id)
{
    $data['title'] = 'Detail Program';
    $data['program'] = $this->M_Home->getDetailById($id);
    $this->load->view('layout/frontend/header', $data);
    $this->load->view('frontend/program_detail', $data); // GANTI view detail
    $this->load->view('layout/frontend/footer');
}

}
