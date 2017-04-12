<?php
/*
*Database connection class
*/

//database credentials page
require_once('dbcredentials.php');

//CLass
class dbconnection
{
	/*
	*Connection properties
	*/
	public $connector;
	public $results;
	public $ssql;

	/*
	*Database connection method
	*@return returns true or false
	*/
	public function connect(){
		$this->connector = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
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
			//escape special characters for sql execution
			$ssql = mysqli_real_escape_string($this->connector, $sql);
			//run query
			$this->results = mysqli_query($this->connector, $ssql);
			//check for sql injection

			//confirm if record returns
			//SHORTCUT: return !($this->results == false);....or:
			if ($this->results == true) {
				return true;
			} else {
				return false;
			}
		}
	}


	/*
	*fetch method
	*fetches data from database ifquery returns true
	*@return returns number of rows from database, or false otherwise
	*/
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




}

// //test connection
// $myTestDB = new dbconnection;
// //displays data and data types
// var_dump($myTestDB->query('select * from student'));
// var_dump($myTestDB->fetch());



