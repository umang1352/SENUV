<?php
include_once('model.php');


class control extends model
{
	function __construct()  // megic function & autocall function 
	{
		
		model::__construct();
		session_start();
		$url=$_SERVER['PATH_INFO'];
		switch($url)
		{

			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name']; 
				$email=$_REQUEST['email'];
				$subject=$_REQUEST['subject'];
				$message=$_REQUEST['message'];
				
				$data=array("name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message);
				$res=$this->insert('reg',$data);
				if($res)
				{
					echo "<script>
					alert('Thanks For Contacting Us');
					window.location='index';
					</script>";
				}
				else
				{
					echo "Not Successful";
				}

			}

			

		}
		
	}
}

$obj=new control;




?>