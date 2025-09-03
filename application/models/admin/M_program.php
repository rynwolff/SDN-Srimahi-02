<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_program extends CI_Model {

    public function get_all() {
        return $this->db->get('program')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('program', ['id_program' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('program', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_program', $id);
        return $this->db->update('program', $data);
    }

    public function delete($id) {
        $this->db->where('id_program', $id);
        return $this->db->delete('program');
    }

    public function truncate()
{
    return $this->db->empty_table('program');
}

}
