<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Running_year extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function selectYear(){
        $query = $this->db->get('running_year');
        return $query->result_array();
    }
}