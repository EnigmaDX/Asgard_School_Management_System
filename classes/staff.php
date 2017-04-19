<?php
/**
*@author Yvette Umutari
*@version 1.0
**/
require_once '../database/Connection.php';
/**
* description of the staff class
*/
class Staff extends Connection
{
	public $id;
	public $password;
	
	function __construct($argument)
	{
		
	}
}
?>

<?php
echo $_SERVER['DOCUMENT_ROOT'];
echo dirname(__FILE__);
?>