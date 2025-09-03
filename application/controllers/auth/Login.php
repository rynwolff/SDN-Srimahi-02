<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		guest();
		$this->load->view('auth/login');			
	}

	public function check()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		if (empty($email) || empty($password)) {
			$this->session->set_flashdata('error', 'Masukkan email dan password terlebih dahulu');
			redirect('auth/Login');
		}

		$user = $this->db->get_where("tbl_user", ["email" => $email])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata(['id_user' => $user['id_user']]);
				create_log_activity('Login', user()->username);
				redirect('admin/Dashboard');
			} else {
				$this->session->set_flashdata('error', 'Password salah');
				redirect('auth/Login');
			}
		} else {
			$this->session->set_flashdata('error', 'Email tidak ditemukan');
			redirect('auth/Login');
		}
	}

	public function out()
	{
		create_log_activity('Logout', user()->username);
		$this->session->sess_destroy();
		redirect('auth/Login');
	}

	// FORGOT PASSWORD

	public function forgot()
	{
		$this->load->view('auth/forgot');
	}

	public function send_reset_link()
	{
		$email = $this->input->post('email');
		$user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		if (!$user) {
			$this->session->set_flashdata('error', 'Email tidak ditemukan');
			redirect('auth/Login/forgot');
		}

		$token = bin2hex(random_bytes(32)); // token random
		$this->db->where('id_user', $user['id_user'])->update('tbl_user', ['reset_token' => $token]);

		// Di sini kamu bisa integrasikan kirim email, sekarang kita langsung redirect
		redirect('auth/Login/reset_password/'.$token);
	}

	public function reset_password($token)
	{
		$user = $this->db->get_where('tbl_user', ['reset_token' => $token])->row_array();
		if (!$user) {
			show_404();
		}

		$data['token'] = $token;
		$this->load->view('auth/reset_password', $data);
	}

	public function save_new_password()
	{
		$token = $this->input->post('token');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_user', ['reset_token' => $token])->row_array();
		if (!$user) {
			show_404();
		}

		$this->db->where('id_user', $user['id_user'])->update('tbl_user', [
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'reset_token' => NULL
		]);

		$this->session->set_flashdata('error', 'Password berhasil direset, silakan login kembali');
		redirect('auth/Login');
	}
}
