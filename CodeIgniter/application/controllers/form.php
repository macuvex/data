<?php

class Form extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('development/myForm');
		}
		else
		{
			$this->load->view('development/formsuccess');
		}
	}
}
?>