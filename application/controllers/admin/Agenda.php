<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_Agenda', 'M_Agenda');
        auth(); // fungsi auth() sesuai sistem login kamu
    }

    public function index()
    {
        $data = [
            'title' => 'Manage Agenda',
            'contentTitle' => 'Manage Agenda',
            'view' => 'admin/agenda/index',
            'agenda' => $this->M_Agenda->getAll(),
        ];
        $this->load->view('layout/backend/content', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Agenda',
            'contentTitle' => 'Tambah Agenda',
            'view' => 'admin/agenda/create',
        ];
        $this->load->view('layout/backend/content', $data);
    }

    public function store()
    {
        $waktu = $this->input->post('agenda_waktu') ?: "-";
        $gambar = $this->_upload_gambar();

        $this->M_Agenda->create([
            'agenda_nama'       => htmlspecialchars($this->input->post('agenda_nama', TRUE)),
            'agenda_mulai'      => $this->input->post('agenda_mulai'),
            'agenda_selesai'    => $this->input->post('agenda_selesai'),
            'agenda_waktu'      => $waktu,
            'agenda_deskripsi'  => $this->input->post('agenda_deskripsi', TRUE),
            'agenda_tempat'     => htmlspecialchars($this->input->post('agenda_tempat', TRUE)),
            'agenda_keterangan' => htmlspecialchars($this->input->post('agenda_keterangan', TRUE)),
            'agenda_author'     => user()->username,
            'agenda_gambar'     => $gambar,
        ]);

        $this->session->set_flashdata('success', 'Data berhasil ditambah');
        redirect('admin/Agenda');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Agenda',
            'contentTitle' => 'Edit Agenda',
            'view' => 'admin/agenda/edit',
            'agenda' => $this->M_Agenda->getOne($id),
        ];
        $this->load->view('layout/backend/content', $data);
    }

    public function update($id)
    {
        $agenda = $this->M_Agenda->getOne($id);
        $waktu = $this->input->post('agenda_waktu') ?: "-";

        $gambar = $agenda['agenda_gambar'];

        if (!empty($_FILES['agenda_gambar']['name'])) {
            $upload = $this->_upload_gambar();
            if ($upload) {
                if (!empty($gambar) && file_exists('./assets/img/agenda/' . $gambar)) {
                    unlink('./assets/img/agenda/' . $gambar);
                }
                $gambar = $upload;
            }
        }

        $this->M_Agenda->update($id, [
            'agenda_nama'       => htmlspecialchars($this->input->post('agenda_nama', TRUE)),
            'agenda_mulai'      => $this->input->post('agenda_mulai'),
            'agenda_selesai'    => $this->input->post('agenda_selesai'),
            'agenda_waktu'      => $waktu,
            'agenda_deskripsi'  => $this->input->post('agenda_deskripsi', TRUE),
            'agenda_tempat'     => htmlspecialchars($this->input->post('agenda_tempat', TRUE)),
            'agenda_keterangan' => htmlspecialchars($this->input->post('agenda_keterangan', TRUE)),
            'agenda_author'     => user()->username,
            'agenda_gambar'     => $gambar,
        ]);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/Agenda');
    }

    public function delete($id)
    {
        $agenda = $this->M_Agenda->getOne($id);
        if (!empty($agenda['agenda_gambar']) && file_exists('./assets/img/agenda/' . $agenda['agenda_gambar'])) {
            unlink('./assets/img/agenda/' . $agenda['agenda_gambar']);
        }
        $this->M_Agenda->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/Agenda');
    }

    // Fungsi Upload Gambar
    private function _upload_gambar()
    {
        $config['upload_path']      = './assets/img/agenda/';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['max_size']         = 2048;
        $config['encrypt_name']     = TRUE;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('agenda_gambar')) {
            return $this->upload->data('file_name');
        } else {
            if (!empty($_FILES['agenda_gambar']['name'])) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
            }
            return null;
        }
    }
}
