<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Room extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function selectRoom(){
        $query = $this->db->get('room');
        return $query->result_array();
    }
}