<?php
require_once '../dbOperations/dbConnect.php';
class post extends ConnectDb {
	public function __construct() {
		parent::__construct();
	}
	//This class method takes an array of the html element names to be posted.  
	public function postData($post) {
		$dataSize=sizeOf($post);
		$postAssoc=array("default"=>"Nil");// initialize
		for($i=0; $i<$dataSize; $i++){

			$value=$_POST[$post[$i]];
			
			if($value!=""){
				
				$postValue[$i]=mysqli_real_escape_string($this->connection,$_POST[$post[$i]]) ;
				$postAssoc[$post[$i]] = $postValue[$i];
				
			}else{
				$postAssoc[$post[$i]] ="";
			}
		}
		return $postAssoc;
	}
}