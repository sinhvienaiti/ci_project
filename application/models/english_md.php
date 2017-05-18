<?php
    Class English_md extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();

        }
        public function fqa_md(){
        	$this->db->select("*");
        	$this->db->order_by("id", "desc");
        	$query = $this->db->get("fqas");
        	$data['all'] = $query->result_array();
        	$this->db->select("*");
        	$this->db->where("id","2");
        	$this->db->order_by("id", "desc");
        	$query = $this->db->get("fqas");
        	$data['user'] = $query->result_array();
        	$this->db->select("*");
        	$this->db->where("id","3");
        	$this->db->order_by("id", "desc");
        	$query = $this->db->get("fqas");
        	$data['pay'] = $query->result_array();
        	$this->db->select("*");
        	$this->db->where("id","4");
        	$this->db->order_by("id", "desc");
        	$query = $this->db->get("fqas");
        	$data['web'] = $query->result_array();
        	$this->db->select("*");
        	$this->db->where("id","5");
        	$this->db->order_by("id", "desc");
        	$query = $this->db->get("fqas");
        	$data['other'] = $query->result_array();
        	$data['page'] = "english/fqa";
        	$this->load->view("master_layout/layout.php",$data);
        }
        public function news_md(){
        	$this->db->select("*");
        	$this->db->order_by("id", "desc");
        	$query = $this->db->get("news");
        	$data['all'] = $query->result_array();
        	$data['page'] = "english/news";
        	$this->load->view("master_layout/layout.php",$data);
        }

    }
?>