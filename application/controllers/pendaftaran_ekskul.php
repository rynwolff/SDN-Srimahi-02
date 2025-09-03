<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_ekskul extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Pendaftaran'); // nanti kita buat modelnya
	}

	public function daftar(){
	$data = [
		'id_program'    => $this->input->post('id_program'),
		'nama'          => $this->input->post('nama'),
		'nis'           => $this->input->post('nis'),
		'kelas'         => $this->input->post('kelas'),
		'jk'            => $this->input->post('jk'),
		'no_hp'         => $this->input->post('no_hp'),
		'alamat'        => $this->input->post('alamat'),
		'nama_ekskul'   => $this->input->post('nama_ekskul'),
		'tgl_daftar'    => date('Y-m-d H:i:s')
	];

	$this->M_Pendaftaran->simpan($data); // ✅ simpan ke database

	// Load Dompdf
	$this->load->library('Dompdf_gen');

	// Load view ke PDF
	$html = $this->load->view('pdf/pendaftaran', $data, true);

	$this->dompdf_gen->loadHtml($html);
	$this->dompdf_gen->setPaper('A4', 'portrait');
	$this->dompdf_gen->render();

	//  Download file
	$this->dompdf_gen->stream("Bukti_Pendaftaran_{$data['nama']}.pdf", array("Attachment" => 1));
}



}
