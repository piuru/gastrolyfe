<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function index() {
        // Halaman login
        $this->load->view('login');
    }

    public function process_login() {
        // Logika untuk proses login
        $idAdmin = $this->input->post('idAdmin');
        $password = $this->input->post('password');
    
        $idAdmin = $this->db->get_where('admin', ['idAdmin' => $idAdmin])->row();
        $password = $this->db->get_where('admin', ['password' => $password])->row();

        if ($idAdmin && $password) {
            // Login berhasil
            // Set session atau lakukan tindakan lain yang diperlukan
            $this->session->set_userdata('logged_in', true);
            redirect('dashboard/admin'); // Redirect ke halaman dashboard
        } else {
            // Login gagal
            $this->load->view('login', ['error' => 'Username atau password salah']);
        }
    }

    public function logout() {
        $this->session->unset_userdata('admin_logged_in');
        redirect('auth'); // Redirect ke halaman login
    }
}