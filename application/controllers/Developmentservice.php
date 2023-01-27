<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Developmentservice extends MY_Controller 
{
    public function __construct()
	{
		parent::__construct();	
	}
	public function index()
	{
		$content	=	$this->load->view('development_service',$this->data,true);
		$this->data['content']	=	$content;
		$this->load->view('layouts/default',$this->data);
	}
}
