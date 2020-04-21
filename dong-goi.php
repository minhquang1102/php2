<?php
class ConNguoi{
	private $ten = "Nguyen Trung Quan";
	protected $tuoi = 25;
	public $quequan = "Ha Noi";

	function set_ten(){
		return $this->ten;
	}

	function set_tuoi(){
		return $this->tuoi;
	}
}

$connguoi = new ConNguoi();
echo $connguoi->set_ten();
echo "<br>";
echo $connguoi->set_tuoi();
echo "<br>";
echo $connguoi->quequan;
?>