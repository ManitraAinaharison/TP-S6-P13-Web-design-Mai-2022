<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function connexion($username, $mdp) {
        $req = sprintf("select * 
		from user u 
		where u.username = '%s' 
        and u.password = '%s'", $username, sha1($mdp));
        $query = $this->db->query($req);    
        if($query->result_array() !== null) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}

?>