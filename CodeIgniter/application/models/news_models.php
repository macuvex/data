<?php
class News_models extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_news($slug = FALSE)
	{
		/*if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();*/
		$query = $this->db->query('SELECT * FROM news');
		return $query->result_array();
		//return 'PASSED';
	}
}