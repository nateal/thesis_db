<?php
	class homectl extends CI_controller{
		public $data=array();
		public function __construct(){
			parent::__construct();
			$this->load->model('Homemod');
			$this->load->helper('url');
			//$this->data['base_url'] = base_url().'application/views';
		}

		public function index(){
			$this->load->helper('url');
			$this->load->view('main');
		}

		public function send_data($lhardwareid,$lpin,$ldate,$ltime,$llatitude,$llongitude,$lstatus,$lpicture){
			$this->load->helper('url');

			//$holder = $this->input->post('variable');
			$this->Homemod->data_send($lhardwareid,$lpin,$ldate,$ltime,$llatitude,$llongitude,$lstatus,$lpicture);

			$this->load->view('test');
		}

		public function get_data($lhardwareid,$lpin){
			$this->load->helper('url');

			$this->data['data'] = $this->Homemod->data_get($lhardwareid,$lpin);
			echo '<pre>'; print_r($this->data['data']); echo '</pre>';
			$this->load->view('test', $this->data);


		}


		public function testget($userID){
			$this->load->helper('url');

			$this->data['data'] = $this->Homemod->test_get($userID);

			$this->load->view('test');


		}

		public function testsend($userID,$PIN,$Date){
			$this->load->helper('url');

			$this->Homemod->test_send($userID,$PIN,$Date);

			$this->load->view('test');
		}	

		public function test(){
			$this->load->helper('url');

			$stream_options = array(
			    'http' => array(
			       'method'  => 'GET',
			    ),
			);
			     $context  = stream_context_create($stream_options);
			     $response = file_get_contents("http://mahiwagangsql.000webhostapp.com/onlinedb/getdata/helloworld/001", null, $context);

			echo $response;

			//$this->data['data1'] = $variable;

			//echo $data1;
			$this->load->view('main', $this->data);
		}	


	}


?>