<?php
	class Database{
		protected $_hostname="localhost";
		protected $_userhost="root";
		protected $_passhost="";
		protected $_dbname="project";
		protected $_conn;
		protected $_result;
		public function connect()
		{
		$this->_conn=mysql_connect($this->_hostname,$this->_userhost,$this->_passhost);
		mysql_select_db($this->_dbname,$this->_conn);
		}
		public function disconnect(){
			if ($this->_conn) {
				mysql_close($this->_conn);
			}
		}
		public function query($sql)
		{
			$this->_result=mysql_query($sql);
		}
		public function num_rows(){
			if ($this->_result) {
				$row=mysql_num_rows($this->_result);
			}else{
				$row=0;
			}
			return $row;
		}
		public function fetch(){
			if ($this->_result) {
				$row=mysql_fetch_assoc($this->_result);
			}else{
				$row=0;
			}
			return $row;
		}

	}
$db = new Database();
$db->connect();
$db->query("select * from user");
echo $db->num_rows();
print_r($db->fetch());	 
 