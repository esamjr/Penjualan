<?php 

abstract class Database{
	public function login($username, $password){
		$sql=mysql_query("SELECT * FROM `user` WHERE
		`nik` = '".$username."' AND
		`password` = '".md5($password)."'
		");
            if(mysql_num_rows($sql) > 0){
                $_SESSION['username'] = $username;
                header("Location: penjualan.php");	
            }else{
                header("Location: login.php");
            }
	}
	
	abstract public function data();
	
        /**
         * untuk mengambil data dari database
         * dengan melempar 1 parameter wajib yaitu table
         * dan 1 parameter tidak wajib yaitu condition
         * @param type $table
         * @param type $condition
         * @return type
         */
	public function select($table, $condition=[]){
		$query = ("
		SELECT * FROM `{$table}`
		");
		if(!empty($condition) && is_array($condition)){
			$query .= ' WHERE';
			foreach($condition as $index=>$cond){
				$query .= " `{$index}` = '{$cond}' AND";
			}
			$query = substr($query, 0, -3);
		}
		
		return mysql_query($query);
	}
	public function insert($table, $field, $value) {
		$field = implode("`,`", $field);
		$value = implode("','", $value);
		$sql = mysql_query("INSERT INTO `{$table}` (`{$field}`)
		VALUES ('{$value}');");

		if(!$sql){
			die("Error sintax: penjualan.php");
		}

		header("Location: penjualan.php");
	}
}










