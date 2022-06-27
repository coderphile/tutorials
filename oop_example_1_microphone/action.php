<?php 
/**
 * class for microphone
 */
 class Microphone 
{
	public $name;
	public $color;
	public $size;
	public $sound;
	public $type;

   function __construct($name, $color, $size, $sound, $type){

    $this->name = $name;
	$this->color = $color;
	$this->size = $size;
	$this->sound = $sound;
	$this->type = $type;

   }

	public	function wirelessMic() {
	
	$mic = "
    <h4>Dear User, Here is your ordered wireless Microphone </h4>
	Mic Name : $this->name <br>
	Mic Color : $this->color <br>
	Mic Size : $this->size <br>
	Mic Type : $this->type <br>
	Sound Type : $this->sound <br>

	";

	return $mic;

	}
		public	function wiredMic() {
	
	$mic = "
    <h4>Dear User, Here is your ordered wired Microphone </h4>
	Mic Name : $this->name <br>
	Mic Color : $this->color <br>
	Mic Size : $this->size <br>
	Mic Type : $this->type <br>
	Sound Type : $this->sound <br>

	";

	return $mic;

	}

}

if (isset($_POST['submitBtn'])) {
	$type = $_POST['type'];

	if ($type == "wired") {
		$result = new Microphone($_POST['model'],$_POST['color'],$_POST['size'],$_POST['sound'],$_POST['type']);
		
		?>

<div>
<img width="30%" src="https://thumbs.dreamstime.com/b/classic-wired-microphone-as-concept-karaoke-radio-broadcasting-sound-recording-d-rendering-illustration-black-mic-170723900.jpg">
	<?php 	echo $result->wiredMic(); ?>		

</div>

		<?php
	} elseif ($type == "wireless") {
		$result = new Microphone($_POST['model'],$_POST['color'],$_POST['size'],$_POST['sound'],$_POST['type']);
		
		?>

<div>
<img width="30%" src="https://cdn.images.fecom-media.com/FE00011831/images/HE1657162_181955-HOP-COM-P01.jpg">
	<?php 	echo $result->wirelessMic(); ?>		

</div>

		<?php
	} else {
		echo "Please enter the mic type correctly (Hint: wired/wireless)";
	}
	
}
 ?>