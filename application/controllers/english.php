<?php
    Class English extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
        }
        public function error(){
            $data['page'] = "english/error";
            $this->load->view("master_layout/layout.php",$data);
        }
        public function index(){
        	$data['page'] = "english/home";
            $this->load->view("master_layout/layout.php",$data);
        }
        public function hieuqua(){
        	$data['page'] = "english/hieuqua";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function party(){
        	$data['page'] = "english/party";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function hdhoc(){
        	$data['page'] = "english/hdhoc";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function baihoc(){
        	$data['page'] = "english/baihoc";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function fqa(){
        	$this->load->model("english_md");
        	$this->english_md->fqa_md();
        }
        public function news(){
        	$this->load->model("english_md");
        	$this->english_md->news_md();
        }
        public function lienhe(){
        	$data['page'] = "english/lienhe";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function register(){
        	$data['page'] = "english/register";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function redirect($a = ""){
        	redirect(base_url("english/".$a),"refresh");
        	
        }
    }
?>