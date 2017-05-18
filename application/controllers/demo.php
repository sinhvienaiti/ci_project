<?php
	Class demo extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper("url");
			$this->load->library("pagination");
			

		}
		
		public function index(){
			
			$limit = 3;
			$offset = $this->uri->segment(2);
			$this->db->select("*");
			$this->db->limit($limit, $offset);
			$query = $this->db->get("nganhhoc");

			$row = $query->result_array();
			// pagination
			$config = array();
			 $config['base_url'] = base_url() . '/demo';
        $config['total_rows'] = $this->db->count_all('nganhhoc');
        $config['uri_segment']  = 2;
        $config['per_page'] = $limit;
        $config['prev_link'] 	= 'Trước';
        $config['next_link'] 	= 'Sau';
        $config['last_link'] 	= 'Cuối';
        $config['first_link']	= 'Đầu';
        $this->pagination->initialize($config);
        $paginator=$this->pagination->create_links();  
			 
			  $data = array(
			  	
			  	"pagination" => $paginator,
			  	"data" => $row
			  	);
			$this->load->view("demo/pagination",$data);

		}
	}
?>