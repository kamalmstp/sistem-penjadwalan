<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function index(){
        $data['page_name'] = 'Home';
        $data['page_title'] = 'Home';
        $this->load->view('frontend/index', $data);
    }
}