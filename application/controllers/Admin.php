<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('user') == null) {
            redirect(site_url('admin/login'));
        }
        date_default_timezone_set('Africa/Nairobi');
        $this->load->helper('form');
    }


	public function listePosts($page) {
        $page = (int) $page;
        $this->load->model('Posts_model');
        $listePosts = $this->Posts_model->getlistePosts(null, $page);
        $data = array();
		$data['view'] = 'liste_posts';
		$data['listePosts'] = $listePosts;
        $data['pagination'] = $page;
		$this->load->view('admin/templateAdmin', $data);	
	}	
    
    public function ajoutPost() {
        $this->load->model('Posts_model');
        $listeCateg = $this->Posts_model->getCategoriesPost();
        $data = array();
		$data['view'] = 'ajout_post';
		$data['listeCateg'] = $listeCateg;
		$this->load->view('admin/templateAdmin', $data);	
    }

    public function deletePost($page, $id) {
        $page = (int) $page;
        $this->load->model('Posts_model');
        $this->Posts_model->deletePost($id);
        $listePosts = $this->Posts_model->getlistePosts(null, $page);
        $data = array();
		$data['view'] = 'liste_posts';
		$data['listePosts'] = $listePosts;
        $data['pagination'] = $page;
		$this->load->view('admin/templateAdmin', $data);		
    }

    public function ajouterPost() {
        $this->load->model('Posts_model');
        $categ = $this->input->post('categ');
        $titre = $this->input->post('titre');
        $resume = $this->input->post('resume');
        $contenu = $this->input->post('contenu');
        $path = null;

        $config['upload_path'] = './uploadedFile';
        $config['allowed_types'] = '*';
        $config['max_size'] = 5000;

        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('img')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $path = $data['upload_data']['file_name'];
        }
        $this->Posts_model->enregisterPost($categ, $titre, $resume, $contenu, $path);
        redirect(site_url('admin'));
    }
}
