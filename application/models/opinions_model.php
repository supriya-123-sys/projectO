<?php
class Opinions_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
    
    //Return latest opinions
	public function get_latestOpinions()
	{
		
		$query = $this->db->get('opinions');
		return $query->result_array();
	
	}

	//Return opinion type
	public function get_opinionType($id)
	{
		
		$query = $this->db->get_where('opinionTypes', array('opinionTypeID' => $id));
		return $query->row_array();
	
	}

}