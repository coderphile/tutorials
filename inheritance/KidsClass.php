<?php
include('GrandPaClass.php');
/**
 * 
 */
class KidsClass extends GrandPaClass
{
//	public $height ="174 CM";

	    public function kids20(){
		$height ="174 CM";
		$returnVar = "Grandson is of age 20, his skinColor is $this->skinColor, his hair color is $this->hairColor and his height is $height";

		return $returnVar;
	}
}

$myObj = new KidsClass();

echo $myObj->age20()."<br>";
echo $myObj->kids20();


 ?>