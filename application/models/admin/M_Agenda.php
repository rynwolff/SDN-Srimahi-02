<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Agenda extends CI_Model {

    public function getAll()
    {
        return $this->db->order_by('created_at','DESC')->get('tbl_agenda')->result_array();
    }

    public function getOne($id)
    {
        return $this->db->get_where('tbl_agenda', ['id_agenda' => $id])->row_array();
    }

    public function create($data)
    {
        $data['created_at'] = date('Y-m-d H:i:s');
        return $this->db->insert('tbl_agenda', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_agenda', $id);
        return $this->db->update('tbl_agenda', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_agenda', $id);
        return $this->db->delete('tbl_agenda');
    }
}
