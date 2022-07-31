<?php

class model
{
	public $conn="";
	function __construct()
	{			  // hostname / user name / pass / db name	
		$this->conn=new mysqli('localhost','root','','rent_my_car');
	}
	// all fetch data by select 
	function select($tbl)
	{
		$sel="select * from $tbl"; // query
		$run=$this->conn->query($sel);  // run
		while($fetch=$run->fetch_object()) // fetch all data from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	// all fetch order by data 
	function select_order($tbl,$col)
	{
		$sel="select * from $tbl order by $col"; // query
		$run=$this->conn->query($sel);  // run
		while($fetch=$run->fetch_object()) // fetch all data from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	// like means searching
	function select_like($tbl,$col,$value)
	{
		$sel="select * from $tbl where $col like '$value%'"; // query
		$run=$this->conn->query($sel);  // run
		while($fetch=$run->fetch_object()) // fetch all data from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	// fetch all 2 table join data 
	function select_join2($tbl1,$tbl2,$cond)
	{
		$sel="select * from $tbl1 join $tbl2 on $cond"; // query
		$run=$this->conn->query($sel);  // run
		while($fetch=$run->fetch_object()) // fetch all data from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	// fetch all 3 table join data 
	function select_join3($tbl1,$tbl2,$cond1,$tbl3,$cond2)
	{
		$sel="select * from $tbl1 join $tbl2 on $cond1 join $tbl3 on $cond2"; // query
		$run=$this->conn->query($sel);  // run
		while($fetch=$run->fetch_object()) // fetch all data from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	
	function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr); // find key of arr but gives also in arr
		$col=implode(",",$key_arr); // convert arr to string
		
		$value_arr=array_values($arr); // 0=>"Raj",1=>"raj@gmail.com",
		$value=implode("','",$value_arr); //' raj','raj@gmail.com '   convert arr to string
		
		$ins="insert into $tbl($col) values ('$value')"; // query
		$run=$this->conn->query($ins);  // run
		return $run;
		
	}
	
	function select_where($tbl,$arr)
	{
		$key_arr=array_keys($arr); 
		$value_arr=array_values($arr);
		
		$sel="select * from $tbl where 1=1"; // query
		$i=0;
		foreach($arr as $c)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // run
		return $run;
	}
	
	function delete_where($tbl,$arr)
	{
		$key_arr=array_keys($arr); 
		$value_arr=array_values($arr);
		
		$del="delete from $tbl where 1=1"; // query
		$i=0;
		foreach($arr as $c)
		{
			$del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);  // run
		return $run;
	}
	
	
	function update_where($tbl,$data,$where)
	{
		$dkey_arr=array_keys($data); 
		$dvalue_arr=array_values($data);
		
		$upd="update $tbl set ";
		$i=0;
		$count=count($data);
		foreach($data as $d)
		{
			if($count==$i+1)
			{
				$upd.=" $dkey_arr[$i]='$dvalue_arr[$i]'";
			}
			else
			{
				$upd.=" $dkey_arr[$i]='$dvalue_arr[$i]',";
				$i++;
			}
		}		
		$wkey_arr=array_keys($where); 
		$wvalue_arr=array_values($where);
		
		$upd.=" where 1=1"; // query
		$j=0;
		foreach($where as $c)
		{
			$upd.=" and $wkey_arr[$j]='$wvalue_arr[$j]'";
			$j++;
		}
		$run=$this->conn->query($upd);  // run
		return $run;
	}
	
}
$obj=new model;

?>