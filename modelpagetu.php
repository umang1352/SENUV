<?php
class model
{
	public $conn="";	
	function __construct()
	{
							
		$this->conn=new mysqli('localhost','root','','demo');
	}	
	
	function select($tbl)
	{
		$sel="select * from $tbl";  
		$run=$this->conn->query($sel); 
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
		
	function insert($tbl,$data)
	{
		$key_arr=array_keys($data);//"name"=> ,email
		$key=implode(",",$key_arr); //name=raj
		
		$values_arr=array_values($data);
		$values=implode("','",$values_arr); 
		
		$ins="insert into $tbl($key) value('$values')";
		$run=$this->conn->query($ins);
		return $run;
	}	
}
$mo_obj=new model;
?>