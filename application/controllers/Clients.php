<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('clients_model','clients');
    }

    public function index()
    {
        $data = array();
        $data['clients'] = $this->clients->getClients();
        $this->load->view('clients/clients_view', $data);
    }
}