<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index() {
		$this->load->view('admin/login');	
    }

    public function seConnecter() {
        $this->load->model('Login_model');
        $username = $this->input->post('username');
        $mdp = $this->input->post('mdp');
        $user = $this->Login_model->connexion($username, $mdp);
        if($user == false) {
            redirect(site_url('admin/login?error=1'));
        } else {
            $this->session->set_userdata("user", $user);
            redirect(site_url('admin'));
        }
    } 

    public function logout() {
        $this->session->unset_userdata('user');
        redirect(site_url('admin/login'));
    }
}
