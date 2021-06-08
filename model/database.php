<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "rezky_1tia";
	var $con;

	function __construct(){
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->con,"select * from user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($username,$email,$password){
		mysqli_query($this->con, "INSERT INTO user VALUES('','$username','$email','$password')");
	}
	function hapus($id){
		mysqli_query($this->con, "DELETE FROM user WHERE id='$id'");
	}
	function edit($id){
		$data = mysqli_query($this->con,"select * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$username,$email,$password){
		mysqli_query($this->con, "UPDATE user SET username='$username', email='$email', password='$password' where id='$id'");
	}
}

?>
