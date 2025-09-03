<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Pengumuman','M_Pengumuman');
		auth();
	}

	public function index()
	{
		$data = [
			'title' => 'Manage Pengumuman',
			'contentTitle' => 'Manage Pengumuman',
			'view' => 'admin/pengumuman/index',
			'pengumuman' => $this->M_Pengumuman->getAll(),
		];
		$this->load->view('layout/backend/content',$data);
	}

	public function create()
	{
		$data = [
			'title' => 'Manage Pengumuman',
			'contentTitle' => 'Tambah Pengumuman',
			'view' => 'admin/pengumuman/create',
		];
		$this->load->view('layout/backend/content',$data);
	}

	public function store()
	{
		$upload_gambar = $this->upload_gambar();
		
		$data = [
			'pengumuman_nama'	 	=> htmlspecialchars($this->input->post('pengumuman_nama',TRUE)),
			'pengumuman_deskripsi' 	=> $this->input->post('pengumuman_deskripsi',TRUE),
			'created_at' 			=> date('Y-m-d H:i:s'),
			'pengumuman_gambar' 	=> $upload_gambar
		];

		$this->M_Pengumuman->create($data);
		$this->session->set_flashdata('success','Data berhasil ditambah');
		redirect('admin/Pengumuman');
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Manage Pengumuman',
			'contentTitle' => 'Edit Pengumuman',
			'view' => 'admin/pengumuman/edit',
			'pengumuman' => $this->M_Pengumuman->getOne($id),
		];
		$this->load->view('layout/backend/content',$data);
	} 

	public function update($id)
	{	
		$pengumuman = $this->M_Pengumuman->getOne($id);
		$upload_gambar = $pengumuman['pengumuman_gambar'];

		// Jika ada gambar baru di-upload
		if (!empty($_FILES['pengumuman_gambar']['name'])) {
			$new_upload = $this->upload_gambar();
			if ($new_upload) {
				// Hapus file lama
				if (!empty($upload_gambar) && file_exists('./assets/img/pengumuman/'.$upload_gambar)) {
					unlink('./assets/img/pengumuman/'.$upload_gambar);
				}
				$upload_gambar = $new_upload;
			}
		}

		$data = [
			'pengumuman_nama'	 	=> htmlspecialchars($this->input->post('pengumuman_nama',TRUE)),
			'pengumuman_deskripsi' 	=> $this->input->post('pengumuman_deskripsi',TRUE),
			'pengumuman_gambar' 	=> $upload_gambar
		];

		$this->M_Pengumuman->update($id, $data);
		$this->session->set_flashdata('success','Data berhasil diubah');
		redirect('admin/Pengumuman'); 
	}

	public function delete($id)
	{
		$pengumuman = $this->M_Pengumuman->getOne($id);
		if (!empty($pengumuman['pengumuman_gambar']) && file_exists('./assets/img/pengumuman/'.$pengumuman['pengumuman_gambar'])) {
			unlink('./assets/img/pengumuman/'.$pengumuman['pengumuman_gambar']);
		}
		$this->M_Pengumuman->delete($id);
		$this->session->set_flashdata('success','Data berhasil dihapus');
		redirect('admin/Pengumuman');
	}

	// fungsi upload gambar reusable
	private function upload_gambar()
	{
		$config['upload_path'] = './assets/img/pengumuman/';
		$config['allowed_types'] = 'jpg|jpeg|png|webp';
		$config['max_size'] = 2048;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('pengumuman_gambar')) {
			return $this->upload->data('file_name');
		}
		return "";
	}

}
?>
