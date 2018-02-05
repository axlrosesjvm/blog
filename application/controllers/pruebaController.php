<?php


/**
* 
*/
class pruebaController extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index(){

		$this ->load->view('vistaPrueba');
	}
}