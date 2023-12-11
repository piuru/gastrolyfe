<?php
class Dashboard extends CI_Controller{
    public function index() {
        $this->load->view('dashboard');
    }

    public function info() {
        $this->load->view('info_sehat');
    }

    public function tips() {
        $this->load->view('tips_sehat');
    }

    public function menu() {
        $this->load->view('menu_sehat');
    }

    public function diag() {
        $this->load->view('diagnosis');
    }

    public function admin() {
        $this->load->view('dashboard_admin');
    }

}