<?php
class M_History extends CI_Model {

	public function get_all()
	{
		return $this->db->get('pendaftaran_ekskul')->result();
	}

	public function get_by_id($id){
    return $this->db->get_where('pendaftaran_ekskul', ['id' => $id])->row();
	}

	public function get_by_date_range($tgl_mulai, $tgl_selesai) {
    $this->db->where('DATE(tgl_daftar) >=', $tgl_mulai);
    $this->db->where('DATE(tgl_daftar) <=', $tgl_selesai);
    return $this->db->get('pendaftaran_ekskul')->result();
	}

	public function delete_by_id($id) {
    return $this->db->delete('pendaftaran_ekskul', ['id' => $id]);
	}	

}
