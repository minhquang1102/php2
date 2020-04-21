<?php
class data {
	var $username = "Nguyen Trung Quan";
	var $userpass = 123;
	var $usermail = "abc@gmail.com";

	function dangnhap() {
		echo $this->username;
		echo $this->userpass;
		echo $this->usermail;
	}
}

class sinhvien extends data {
	function dangnhapht() {
		$this->dangnhap();
	}
}

$quan = new sinhvien();
$quan->dangnhapht();
?>