<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
error_reporting(E_ALL & ~E_DEPRECATED);
//require_once('../controllers/admin/Notes.php');

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
//date_default_timezone_set('Australia/Melbourne');
/*if( ! ini_get('date.timezone') )
{
   date_default_timezone_set('GMT');
}*/

class MY_Controller extends CI_Controller 
{
		
	public $currentAddDate=0;
	public $currentAddDate_time=0;
	public $currentAdd_time=0;
	public $added_by='';
	public $session_id=0;
	public $ip_address=0;
	public $admin_email='sksr2050@gmail.com';
	public $data;
	public $customer_type='';
	public $customer_type_id;
	public function __construct()
	{
		parent::__construct();
		$this->data['con'] = $this->router->fetch_class();
		$this->data['method'] = $this->router->fetch_method();
		  
	}	
}
