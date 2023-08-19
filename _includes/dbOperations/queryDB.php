<?php
	require_once 'dbConnect.php';
	
	class dataSQL extends ConnectDb {
		private $status;
		private $error;
	
		public function __construct() {
			parent::__construct();
		}
	
	
	public function getCon() {
    $conDB=$this->connection;

    return $conDB;
  }  

	public function insert($table_name, $data)  {  
    $string = "INSERT INTO ".$table_name." (";            
    $string .= implode(",", array_keys($data)) . ') VALUES (';            
    $string .= "'" . implode("','", array_values($data)) . "')";  
    
    if(mysqli_query($this->connection, $string)) { 
      $this->status=1;  
      return  array('status'=>$this->status,'error'=>mysqli_error($this->connection));  
    } else {
        $this->status=0;  
        return array('status'=>$this->status,'error'=>mysqli_error($this->connection));   
      }  
    }  
    
    public function selectAll($table_name) {  
      $array = array();  
      $query = "SELECT * FROM ".$table_name." WHERE 1";  
      $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection));  
		  
      while($row =mysqli_fetch_array($result))  {  
				//$row = mysqli_fetch_array($result) or die(mysqli_error($this->connection));
        $array[] = $row;
      }

      if(!mysqli_num_rows($result)==0) {
        return $array; 
      } else {  
        $noData=0;  
        return $noData;
      }
    }

	  public function selectWithCond($table_name,$condition) {  
      $array = array();  
      $query = "SELECT * FROM ".$table_name." WHERE ".$condition.""; 
      $result = mysqli_query($this->connection, $query) or die('No data:'.mysqli_error($this->connection));  

      while($row = mysqli_fetch_assoc($result)) {  
        $array[]= $row;  
      } 

      if(!mysqli_num_rows($result)==0) {  
        return $array; 
      } else { 
        $noData= 0; 
        return $noData;
      }
    } 

    public function updateData($table_name,$data,$condition) {   
      $dataSize=sizeOf($data);
      $dataSizeReduced=$dataSize-1;
			
		  //get array keys
      $arrayKeys = array_keys($data);
		   
		  //get array values
      $arrayValues = array_values($data);
		
		  // form update query string
      $query = "UPDATE ".$table_name." SET ";

      for($i=0; $i<$dataSizeReduced; $i++){ 
        $query .= "`".$arrayKeys[$i] . "`= '".$arrayValues[$i]."'," ; 
      }

      $query .= "`".$arrayKeys[$i] . "` = '".$arrayValues[$i]."' WHERE ".$condition."" ; 
      $result = mysqli_query($this->connection, $query);  
            
		  if( mysqli_affected_rows($this->connection)>0) {  
        return $this->status=1;  
      } else { 
        $this->error=mysqli_error($this->connection); 
        return $this->status=0;   
      } 
    }

    public function selectLeftJoin($left_table,$right_table,$left_tb_fld,$right_tb_fld) {  
      $array = array();  
      $query = "SELECT * FROM ".$left_table." LEFT JOIN ".$right_table." ON "
        .$left_tb_fld." = ".$right_tb_fld.""; 
      $result = mysqli_query($this->connection, $query);  

      while($row = mysqli_fetch_assoc($result)) {  
        $array[]= $row;
      }  
           
		  if(!mysqli_num_rows($result)==0) {  
        return $array; 
      } else {  
        $noData= "No Data Found!";  
        return $noData;
      } 
    }
	  
	  public function selectLeftJoinCond($left_table,$right_table,$left_tb_fld,$right_tb_fld,$condition) {  
      $array = array();  
      $query = "SELECT * FROM ".$left_table." LEFT JOIN ".$right_table." ON "
		   .$left_tb_fld." = ".$right_tb_fld." WHERE ". $condition; 
       $result = mysqli_query($this->connection, $query);  

      while($row = mysqli_fetch_assoc($result)) {  
        $array[]= $row;
      }  
           
		  if(!mysqli_num_rows($result)==0) {  
        return $array; 
      } else {  
        $noData= "No Data Found!";  
				return $noData;
      }
    }
	  
	  public function selectInnerJoin($left_table,$right_table,$left_tb_fld,$right_tb_fld)  {  
      $array = array();  
      $query = "SELECT * FROM ".$left_table." INNER JOIN ".$right_table." ON "
		   .$left_tb_fld." = ".$right_tb_fld.""; 
      $result = mysqli_query($this->connection, $query);  
      
      while($row = mysqli_fetch_assoc($result)) { 
        $array[]= $row;
      }  
           
		  if(!mysqli_num_rows($result)==0) {  
        return $array; 
      } else { 
        $noData= "No Data Found!";  
        return $noData;
      } 
    }
	  
	  public function selectInnerJoinCond($left_table,$right_table,$left_tb_fld,$right_tb_fld,$condition)  {  
      $array = array();  
      $query = "SELECT * FROM ".$left_table." INNER JOIN ".$right_table." ON "
		   .$left_tb_fld." = ".$right_tb_fld." WHERE ". $condition; 
      $result = mysqli_query($this->connection, $query);  
      
      while($row = mysqli_fetch_assoc($result)) { 
        $array[]= $row; 
      }  
           
		  if(!mysqli_num_rows($result)==0) {
        return $array; 
      } else { 
        $noData=0;  
        return $noData;
      } 
    }
      
    public function getError(){
      return $this->error;
    }

	}	  
?>