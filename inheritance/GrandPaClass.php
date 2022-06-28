<?php
/**
 * 
 */
class GrandPaClass
{
	public $skinColor = "Fair";
	public $hairColor = "Black";
	public $height = "170 CM";

	public function age20(){

		$returnVar = "When GrandPa was of age 20, his skinColor was $this->skinColor, his hair color was $this->hairColor and his height was $this->height";

		return $returnVar;
	}

}

?>