<?php
class Clients_model extends CI_Model {

    public function getClients(){
        $this->db->order_by('id');
        $query = $this->db->get('clients');
        return $query->result();
    }
}