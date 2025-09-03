<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pendaftaran extends CI_Model {

    public function simpan($data) {
        return $this->db->insert('pendaftaran_ekskul', $data);
    }
}
