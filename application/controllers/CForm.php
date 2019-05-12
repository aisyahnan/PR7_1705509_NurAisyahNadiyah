<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CForm extends CI_Controller {
	public function index()
	{
		$this->load->model('MForm');
		$v['left'] = $this->MForm->leftJoin()->result();
		$v['right'] = $this->MForm->rightJoin()->result();
		$v['inner'] = $this->MForm->innerJoin()->result();
		$this->load->view('home', $v);
	}
}