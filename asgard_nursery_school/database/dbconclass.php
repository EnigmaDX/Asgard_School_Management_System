<?php
/*
*Database connection class
*/

//database credentials
require_once('credentials.php');

//CLass
class dbconn
{
	/*
	*Connection properties
	*/
	public $connector;
	public $results;

	/*
	*Database connection method
	*@return returns true or false
	*/
	public function connect(){
		$this->connector = mysqli_connect(SERVER, USERNAME, PASSWORD, FINAL_PROJECT_DB);
		if(mysqli_connect_errno())
		{
			return false; //when false is returned, no code before or after will work, similar to die()
		}
		else
		{
			return true;
		}

	}


	/*
	*Query method
	*param sql sql to be executed
	*@return returns true or false
	*/
	public function query($sql) 
	{
		if($this->connect())
		{
			//run query
			$this->results = mysqli_query($this->connector, $sql);
			//check for sql injection

			//confirm if record returns
			//SHORTCUT: return !($this->results == false);....or:
			if ($this->results == true) 
			{
				return true;
			} 
			else 
			{
				return false;
			}
		}
	}

	public function fetch()
	{
		//check if results has content
		if($this->results == false){
			return false;
		}
		else
		{
			//return one record
			return mysqli_fetch_assoc($this->results);
		}
	}


	public function getrows()
	{
		//check if results has content
		if($this->results == false)
		{
			return false;
		}
	}


	/*
	*mysqli real escape string method method
	*param query sql query to be processed
	*param array array containing input values from form
	*@return returns true or false
	*/
	function stringescape($query, $array)
	{
		$proceed = false;
		if($this->connect()){

		//create new array to hold escape_string values
			$newArr = array();
			for($x = 0; $x < count($array); $x++) {
				$val = mysqli_real_escape_string($this->connector, $array[$x]);
				$newArr[$x] = $val;
				echo $newArr[$x].'<br>';
			}

			$newSql = vsprintf($query, $newArr);
			echo '<br>'. $newSql;
			$res = mysqli_query($this->connector, $newSql);
			if($res == true){
				$proceed = true;
			}
		}
		return $proceed;
	}


	function prepStmt($query, $type, $array)
	{
		$proceed = false;
		if($this->connect()){
			$prepst = mysqli_prepare($this->connector, $query);

			$a_params = array();
			$ln = count($array);

			//get the data types of each user input in array
			// for ($i=0; $i < $ln; $i++) { 
			// 	if (is_int($array[$i])) {
			// 		$data_type .= 'i';
			// 	}
			// 	else if (is_string($array[$i])) {
			// 		$data_type .=  's';
			// 	}
			// 	echo $data_type[$i]; //check contents
			// }

			echo "<br>contents of a_params:<br>";
			for($i = 0; $i < $ln; $i++) {
				//$a_params[] = & $array[$i];
				echo '<br>'.$array[$i].'<br>';
			}

				$refs = array();
	        	foreach($array as $key => $value){
	            $refs[$key] = &$array[$key];
	        }
	        echo 'size of array:'. count($refs).'<br>';
			call_user_func_array('mysqli_stmt_bind_param', array_merge (array($prepst, $type), $refs));
			$ex = mysqli_stmt_execute($prepst);
			if($ex == true){
				$proceed = true;
			}

		}
		return $proceed;
	}

}


