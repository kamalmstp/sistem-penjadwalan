<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lecturer extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function selectLecturer(){
        $query = $this->db->get('lecturers');
        return $query->result_array();
    }
}