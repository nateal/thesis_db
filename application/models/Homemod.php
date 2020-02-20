<?php
class homemod extends CI_Model {

	public function data_send($lhardwareid,$lpin,$ldate,$ltime,$llatitude,$llongitude,$lstatus,$lpicture){
		$this->load->database();
		//echo $holder;
		$data = array(
			'lhardwareid' => $lhardwareid,
			'lpin' => $lpin,
			'ldate' => $ldate,
			'ltime' => $ltime,
			'llatitude' => $llatitude,
			'llongitude' => $llongitude,
			'lstatus' => $lstatus,
			'lpicture' => $lpicture);
		
		/*pang check lng kung may laman ung array
		foreach ($data as $key => $value) { 
		echo $value;
		}*/

		$this->db->insert('magicaldb', $data);
	}

	public function data_get($lhardwareid,$lpin){
		$this->load->database();

		$this->db->where('lhardwareid',$lhardwareid);
		$this->db->where('lpin',$lpin);
		$this->db->from('magicaldb');

		$query = $this->db->get();

		return $query->result_array();

	}

	public function test_get($userID){
		$this->load->database();

		$this->db->where('lhardwareid',$lhardwareid);
		$this->db->where('lpin',$lpin);
		$this->db->from('magicaldb');

		$query = $this->db->get();

		return $query->result_array();
	}
	public function test_send($userID,$PIN,$Date){
		$this->load->database();
		//echo $holder;
		$data = array(
			'userID' => $userID,
			'PIN' => $PIN,
			'Date' => $Date);

		$this->db->insert('mahiwagangdb', $data);
	}



}
?>