<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DomaineModel extends CI_Model {

    //Determine la table utilisée
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_domaines";
    }

    //Recupere toute les domaines
    function get_all()
    {
        return $this->db->get($this->table);
    }

    //Recupere un domaine
    function get_one($domaines_id)
    {
        $this->db->select("domaines_id, domaines_name")
            ->from($this->table)
            ->where("domaines_id", $domaines_id)
            ->limit(1);

        return $this->db->get();
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */