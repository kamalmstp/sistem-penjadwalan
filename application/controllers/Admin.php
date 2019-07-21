<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Lecturer');
        $this->load->model('Running_year');
        $this->load->model('Room');
    }

    function index(){
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');
    }

    function dashboard(){
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        $data['page_name']  = 'dashboard';
        $data['page_title'] = 'Administrator Dashboard';

        $this->load->view('backend/index', $data);
    }

    function lecturers(){
        if ($this->session->userdata('user_login') == 1) {
            redirect(site_url('admin/dashboard'), 'refresh');
        }
        $data['page_name'] = 'lecturers';
        $data['page_title'] = 'Lecturers';
        $data['lecture'] = $this->Lecturer->selectLecturer();
        $this->load->view('backend/index', $data);
    }

    function running_year(){
        if ($this->session->userdata('user_login') == 1) {
            redirect(site_url('admin/dashboard'), 'refresh');
        }
        $data['page_name'] = 'running_year';
        $data['page_title'] = 'Running year';
        $data['year'] = $this->Running_year->selectYear();
        $this->load->view('backend/index', $data);
    }

    function room(){
        if ($this->session->userdata('user_login') == 1) {
            redirect(site_url('admin/dashboard'), 'refresh');
        }
        $data['page_name'] = 'room';
        $data['page_title'] = 'Room';
        $data['room'] = $this->Room->selectRoom();
        $this->load->view('backend/index', $data);
    }
}