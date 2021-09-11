<?php


class model
{
	public $conn="";	
	function __construct()
	{
							//host_nm,user_nm,pass,db_nm
		$this->conn=new mysqli('localhost','root','','fresh vegetables');
	}	
	
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel); // query run by $conn var
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	function select_orderby($tbl,$col)
	{
		$sel="select * from $tbl ORDER BY $col;";  // query
		$run=$this->conn->query($sel); // query run by $conn var
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	
	
	function select_join($tbl1,$tbl2,$on_cond)
	{
		$sel="select * from $tbl1 join $tbl2 on $on_cond";  // query
		$run=$this->conn->query($sel); // query run by $conn var
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	
	function select_join_like($tbl1,$tbl2,$on_cond,$col,$value)
	{
		$sel="select * from $tbl1 join $tbl2 on $on_cond where $col like '$value%'";  // query
		$run=$this->conn->query($sel); // query run by $conn var
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	
	function select_join1($tbl1,$tbl2,$on_cond)
	{
		$sel="select * from $tbl1 join $tbl2 on $on_cond";  // query
		$run=$this->conn->query($sel); // query run by $conn var
		return $run;
	}
	
	
	
	function select_join_3tbl($tbl1,$tbl2,$on_cond,$tbl3,$on_cond2)
	{
		$sel="select * from $tbl1 join $tbl2 on $on_cond join $tbl3 on $on_cond2";  // query
		$run=$this->conn->query($sel); // query run by $conn var
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	
	function select_where($tbl,$where)
	{
		$key=array_keys($where);
	    $values=array_values($where);
		
		$sel="select * from $tbl where 1=1 ";  // 1 =1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key[$i]='$values[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}
	
	function insert($tbl,$data)
	{
		$key_arr=array_keys($data);// array("0"=>"unm","1"=>"pass")
		$key=implode(",",$key_arr); // unm,pass,gen
		
		$values_arr=array_values($data);//array("0"=>"Raj","1"=>"1234")
		$values=implode("','",$values_arr); // 'raj','1234,Male'
		
		$ins="insert into $tbl($key) value('$values')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	function update($tbl,$data,$where)
	{
		$keyupd=array_keys($data);
	    $valuesupd=array_values($data);
		
		$upd="update $tbl set ";
		$j=0;
		$count=count($data);
		foreach($data as $e)
		{
			if($count==$j+1)
			{
				$upd.=" $keyupd[$j]='$valuesupd[$j]'";
			}
			else
			{				
				$upd.=" $keyupd[$j]='$valuesupd[$j]',";
				$j++;
			}
		}
		
		$key=array_keys($where);
	    $values=array_values($where);
		
		$upd.=" where 1=1";  // 1 =1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$upd.=" and $key[$i]='$values[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);
		return $run;
	}
	
	function delete($tbl,$where)
	{
		$key=array_keys($where);
	    $values=array_values($where);
		
		$del="delete from $tbl where 1=1 ";  // 1 =1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $key[$i]='$values[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
	}
	
	
}
$mo_obj=new model;


?>