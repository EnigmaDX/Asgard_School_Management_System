<?php

/**
*incude database credential file
*/
require_once('dbcredentials.php');
class dbconnection
{
	/**
	*database properties
	*/
	public $dbconnect;
	public $dbresults;




	/**
	*database connection method
	*@return return true or false
	*/
	function dbconnect()
	{
		$this->dbconnect=mysqli_connect(SERVER, USERNAME,PASSWORD,DBNAME);
		if (mysqli_connect_errno()) //checks if the connection is successful
		{
			return false;
		}
		else
		{
			return true;
		}
		
	}

	/**
	*database query method
	*@param sql to be executed
	*@return true or false
	*/
	function query($sql)
	{
		//check if connection works
		if (!$this->dbconnect()) {
			return false;
		}
		//run query
		$this->dbresults=mysqli_query($this->dbconnect,$sql);

		//check if any record is returned
		if ($this->dbresults==false) 
		{
			return false;
		}
		else
		{
			return true;
		}
		
	}

	/**
	*database fetch method
	*@return returns results
	*/
	function fetch()
	{
		if ($this->dbresults==false)
		{
			return false;
		}
		//return results
		return mysqli_fetch_assoc($this->dbresults);
		
	}

	/**
	*database numrow method
	*@return returns rows
	*/
	function getrows()
	{
		if ($this->dbresults==false)
		{
			return false;
		}
		//return results
		return mysqli_num_rows($this->dbresults);
		
	}





}

// $mytestdb=new dbconnection();
// //var_dump($mytestdb->dbconnect());
// var_dump($mytestdb->query('SELECT * FROM allmajor'));
// var_dump($mytestdb->result());

?>