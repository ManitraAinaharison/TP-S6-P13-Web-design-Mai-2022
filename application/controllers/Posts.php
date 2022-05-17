<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

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
	public function index()
	{
		$q = $this->input->get('q');
		$this->load->model('posts_model');
		$listeActus = $this->posts_model->getlistePostsRecentes('1');
		$listeEvents = $this->posts_model->getlistePostsRecentes('2');
		$data = array();
		$data['view'] = 'accueil';
		$data['active'] = 0;
		$data['titrePage'] = "AGW News";
		$data['listeActus'] = $listeActus;
		$data['listeEvents'] = $listeEvents;
		if(isset($q)) {
			$listeActus = $this->posts_model->rechercherPost($q);
			$data['view'] = 'resultat_recherche';
			$data['active'] = -1;
			$data['titrePage'] = $q." | AGW News";
			$data['listeActus'] = $listeActus;
			$data['listeEvents'] = $listeEvents;
		}
		$this->load->view('template', $data);	
	}			

	public function evenements($page) {
		$this->load->model('posts_model');
        $listeActus = $this->posts_model->getlistePosts(2, $page);
        $data = array();
		$data['view'] = 'evenement';
		$data['active'] = 2;
		$data['titrePage'] = "Evènements";
		$data['listeActus'] = $listeActus;
		$data['pagination'] = $page;
		$this->load->view('template', $data);
	}

	public function actualites($page) {
		$this->load->model('posts_model');
        $listeActus = $this->posts_model->getlistePosts(1, $page);
        $data = array();
		$data['view'] = 'actualite';
		$data['active'] = 1;
		$data['titrePage'] = "Actualités";
		$data['listeActus'] = $listeActus;
		$data['pagination'] = $page;
		$this->load->view('template', $data);	
	}
	
	public function fichePost($categorie, $url, $id) {
		$this->load->model('posts_model');
        $actu = $this->posts_model->getPost($categorie, $url, $id);
		$data = array();
		$data['view'] = 'fiche_post';
		$data['active'] = -1;
		$data['titrePage'] = $actu[0]['titre'];
		$data['actu'] = $actu[0];
		$this->load->view('template', $data);
	}

	public function aa() {
		$te = "Réchauffement climatique : toutes les canicules seront renforcées, selon des experts";
		$this->load->model('util_model');
        echo $this->util_model->slugify($te);
	}
}
