<?php

class Auth 
{
	private $db;
	private $dataQuery;
	private $query;
	public $dataUser;
	private $test;
	public function setConnection($con)
	{
		$this->db = $con;
	}

	public function login($table,$data = array())
	{
		$username = $password = '';
		foreach ($data['username'] as $key => $value) {
			$username = $key.' = '."'$value'";
		}

		foreach ($data['password'] as $key => $value) {
			$password = $key.' = '."'$value'";
		}
		// $this->test = $username." AND ".$password;
		$this->query = $this->db->query("SELECT * FROM $table WHERE $username AND $password");
		if ($this->query->num_rows == 1) {
			$_SESSION['auth']['auth_token'] = md5(date('Ymdhis'));
			$this->setDataUser();
			return true;
		} else {
			return false;
		}
		
	}

	public function logout()
	{
		unset($_SESSION['auth']);
	}

	public function guest()
	{
		return (!isset($_SESSION['auth']))?true:false;
	}

	public function required($redirect)
	{
		if(!isset($_SESSION['auth'])){
			echo "<script>window.location='".$redirect."'</script>";
		}
	}

	public function setSession($data = array())
	{
		foreach ($data as $key => $value) {
			$_SESSION['auth'][$key] = $value;
		}
	}

	public function getSession($index = null)
	{
		if ($index == null) {
			return isset($_SESSION['auth'])?$_SESSION['auth']:null;
		} else {
			return isset($_SESSION['auth'][$index])?$_SESSION['auth'][$index]:null;
		}
		
	}

	private function setDataUser()
	{
		while($row = $this->query->fetch_assoc()){
			$this->dataUser[] = $row;
		}

	}

	public function getDataUser($index)
	{
		return isset($this->dataUser[0][$index])?$this->dataUser[0][$index]:null;
	}
}