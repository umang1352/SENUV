<?php
include_once('model.php');


class control extends model
{
	function __construct()  // megic function & autocall function 
	{
		
		model::__construct();
		session_start();
		$url=$_SERVER['PATH_INFO']; //http://localhost/30Nov_php/project/web/control.php
		
		switch($url)
		{
			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;

		}
		
	}
}

$obj=new control;

?>