<?php
class ConnectDb {
	
	private $servername = "localhost";
	private $dbName = "nda_visit_app";
    private $username = "nda_visit_app";
    private $password = "nda_visit_app";
	private $conStatus = ""; // is null
	
	protected $connection;

	// Create connection constructor
	public function __construct() {
		$con = mysqli_connect($this->servername,$this->username,$this->password);
		// select database
		$db = mysqli_select_db($con,$this->dbName) or die(mysqli_error($con));
		// Check connection
		if (!$con) {
			die("Connection failed: " . mysql_error($con));
			$this->conStatus=0;
		} else {		
			$this->connection=$con;
			$this->conStatus=1;
		}
		return $this->connection;
	}
	
	public function getConStatus(){
		return $this->conStatus;
	}	
}
?>