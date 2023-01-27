<?php defined('BASEPATH') OR exit('No direct script access allowed');
class More_industrie extends MY_Controller 
{
    public function __construct()
	{
		parent::__construct();	
	}
	public function index()
	{
		$content	=	$this->load->view('more_industrie',$this->data,true);
		$this->data['content']	=	$content;
		$this->load->view('layouts/default',$this->data);
	}
}
