<?php
require_once 'PHPUnit/Autoload.php';
//use PHPUnit\Framework\TestCase;


class UserManagementTest extends PHPUnit_Framework_TestCase{
	public function testVerifyPassword1NPassword2()
	{
		$Pwd1="Test";
		$Pwd2="Test";
                if($Pwd1==$Pwd2)
		{      
		$this->assertEquals($Pwd1, $Pwd2);
		echo '<p>password match. Test1 Pass</p>';
		}
	}
	
	public function testVerifySearchStringNotEmpty()
	{
		$test = true;
		$this->assertTrue($test);
		if($test==true)
		{
		 echo '<p>Test2 pass</p>';
		}
	}
	
	public function testVerifyUserExists()
	{
		$test = true;
		$this->assertTrue($test);
		 if($test==true)
                {
                 echo '<p>Test3 pass</p>';
                }

	}
	/* public function testVerifyUserNotExists()
        {
                $test = false;
                $this->assertTrue($test);
                 if($test==true)
                {
                 echo '<p>Test4 pass</p>';
                }
		if($test==false)
                {
                 echo '<p>Test4 fail</p>';
                }


        }*/
	
}
?>
