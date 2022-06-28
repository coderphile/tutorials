<?php 
/**
 * constructor overview
 */
class Test 
{
	public $var1 = "this is first variable";
	public $var2 = "this is a sesond variable";
	
	function __construct()
	{
	    echo "if constructor works, this paragraph will be shown on the first line<br>";
	    $this->var2 = "this is a second variable";
	}

	function __destruct()
	{
		echo "this object has been destructed";
	}

	function checkingTestMethod (){

		echo "$this->var1 <br> ";

	}

	function secondTestMethod(){
		echo "$this->var2 <br>";
	}

}

 $testObj = new Test();

 $testObj->secondTestMethod();
 $testObj->checkingTestMethod();


 ?>