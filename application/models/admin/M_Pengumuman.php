
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pengumuman extends CI_Model {

    public function getAll() 
    {
        return $this->db->order_by('created_at', 'DESC')->get('tbl_pengumuman')->result_array();
    }

    public function getOne($id)
    {
        return $this->db->get_where('tbl_pengumuman', ['id_pengumuman' => $id])->row_array();
    }

    public function create($data)
    {
        return $this->db->insert('tbl_pengumuman', $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id_pengumuman', $id)->update('tbl_pengumuman', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id_pengumuman', $id)->delete('tbl_pengumuman');
    }
}
