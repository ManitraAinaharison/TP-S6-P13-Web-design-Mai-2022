<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts_model extends CI_Model {

    public function getCategoriesPost() {
        $req = "select * from categorie";
        $query = $this->db->query($req);
        return $query->result_array();
    }

    public function getlistePostsRecentes($idCategorie) {
        $req = sprintf("select * 
        from 
        post_detail 
        where 
        id_categorie = '%s' 
        order by date_ajout desc
        limit 3", $idCategorie);
        $query = $this->db->query($req); 
        return $query->result_array();
    }

    public function getlistePosts($idCategorie = null, $page) {
        $page = (int) $page;
        $limit = 2;
        $deb = (($page - 1) * $limit);
        $req = sprintf("select * 
        from 
        post_detail 
        where 
        id_categorie = '%s'
        order by date_ajout desc
        limit %s,%s", $idCategorie, $deb, $limit);
        if($idCategorie == null) {
            $req = "select * from post_detail order by date_ajout desc";
        }
        $query = $this->db->query($req); 
        return $query->result_array();
    }

    public function getPost($categorie, $url, $id) {
        $req = sprintf("select * 
        from 
        post_detail 
        where 
        nom_categorie = '%s'
        and url = '%s'
        and id = '%s'", $categorie, $url, $id);
        $query = $this->db->query($req); 
        return $query->result_array();
    }

    public function rechercherPost($q) {
        $req = "select * 
        from 
        post_detail 
        where 
        titre like '%".$q."%'
        or resume like '%".$q."%'
        or contenu like '%".$q."%'
        order by date_ajout desc";
        $query = $this->db->query($req); 
        return $query->result_array();
    }

    public function enregisterPost($idCategorie, $titre, $resume, $contenu, $path) {
        $this->load->model('util_model');
        $url = $this->util_model->slugify($titre);
        $titre = $this->db->escape($titre);
        $resume = $this->db->escape($resume);
        $contenu = $this->db->escape($contenu);
        $req = sprintf("insert into 
        post
        (id_categorie, id_user, titre, resume, contenu, date_ajout, image, url) 
        values
        ('%s', '%s', %s, %s, %s, sysdate(), '%s', '%s') ", $idCategorie, '1', $titre, $resume, $contenu, $path, $url);
        $this->db->query($req);
    }
}

?>