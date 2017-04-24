<?php

include_once "C:/xampp/htdocs/asgardschool/database/Connection.php";
require_once 'PHPUnit/Autoload.php';

class ConnectionTest extends \PHPUnit_Framework_TestCase {
    
    public function testConnectReturnsTrue(){
        $con = new Connection();
        $this->assertTrue($con->connect());
    }


  
   public function testPrepStatementQueryTrue(){
        $con = new Connection();
        $query = "INSERT INTO status (status_name) VALUES (?)";
        $this->assertTrue($con->query($query, "REGISTERED"));
   }
    
    public function testFetchTrue(){
        $con = new Connection();
        $query = "SELECT status.status_name FROM status";
        $con->query($query);
        
        $this->assertCount(1, $con->fetch());
   }
}

?>
 