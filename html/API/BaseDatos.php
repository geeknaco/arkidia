<?php
class BaseDatos{
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;

	public function __construct(){
		$this->host     = 'localhost';
		$this->db       = 'Arkidia';
		$this->user     = 'geeknaco';
		$this->password = 'Geeknaco.117.mysql';
		$this->charset  = 'utf8mb4';
	}

	function connect(){

		$connection = "mysql:host=" . $this->host . "; dbname=" . $this->db;
		$pdo = new PDO($connection,$this->user,$this->password);
		return $pdo;

	}
}
?>