<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/M_History'); // model buat ambil data history
    }

    public function index() {
        redirect('admin/pendaftaran_admin/history');
    }

    // Halaman riwayat
    public function history() {
    $tgl_mulai = date('Y-m-01');
    $tgl_selesai = date('Y-m-t');

    $data['title'] = "Riwayat Pendaftaran Ekstrakurikuler";
    $data['tgl_mulai'] = $tgl_mulai;
    $data['tgl_selesai'] = $tgl_selesai;
    $data['history'] = $this->M_History->get_by_date_range($tgl_mulai, $tgl_selesai);
    $data['view'] = 'admin/history_pendaftaran';

    $this->load->view('layout/backend/content', $data);
}

    // Form filter laporan pendaftaran (pakai layout backend)
    public function filter() {
        $data['title'] = "Filter Invoice Pendaftaran";
        $data['view'] = 'admin/filter_invoice_pendaftaran';
        $this->load->view('layout/backend/content', $data);
    }

    // Proses filter dan tampilkan invoice hasil filter
    public function invoice_filter() {
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');

        if (strtotime($tgl_mulai) > strtotime($tgl_selesai)) {
            $this->session->set_flashdata('pesan_error', 'Tanggal selesai tidak boleh lebih awal dari tanggal mulai.');
            redirect('admin/pendaftaran_admin/filter');
            return;
        }

        $data['title'] = "Invoice Pendaftaran Ekskul";
        $data['tgl_mulai'] = $tgl_mulai;
        $data['tgl_selesai'] = $tgl_selesai;	
        $data['history'] = $this->M_History->get_by_date_range($tgl_mulai, $tgl_selesai);
        $data['view'] = 'admin/invoice_pendaftaran';

        $this->load->view('layout/backend/content', $data);
    }

    // Cetak invoice pendaftaran berdasarkan rentang tanggal
    public function cetak_invoice_rentang($tgl_mulai, $tgl_selesai) {
        $data['tgl_mulai'] = $tgl_mulai;
        $data['tgl_selesai'] = $tgl_selesai;
        $data['history'] = $this->M_History->get_by_date_range($tgl_mulai, $tgl_selesai);

        $this->load->view('admin/cetak_invoice_pendaftaran', $data);
    }
    public function delete($id) {
    if (!$id) {
        $this->session->set_flashdata('pesan_error', 'ID pendaftaran tidak valid.');
        redirect('admin/pendaftaran_admin/history');
    }

    $hapus = $this->M_History->delete_by_id($id);

    if ($hapus) {
        $this->session->set_flashdata('pesan_sukses', 'Data pendaftaran berhasil dihapus.');
    } else {
        $this->session->set_flashdata('pesan_error', 'Gagal menghapus data.');
    }

    redirect('admin/pendaftaran_admin/history');
}

}
