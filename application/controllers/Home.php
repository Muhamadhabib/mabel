<?php
    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        
        }
        public function index(){
            $this->load->view("header");
            $this->load->view("home_v");
            $this->load->view("footer");
        }
    }
?>