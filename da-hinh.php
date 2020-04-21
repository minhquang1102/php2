<?php
	class data {
		var $username = "";
		var $userpass = "";
		var $usermail = "";
		var $userlevel = "";

		function dangnhap() {
			echo "dang nhap thanh cong lop Data";
		}
	}

	class data1 extends data {
		function dangnhap() {
			echo "thanh cong lop Data1";
		}
	}

	$Data1 = new Data1();
	$Data1->dangnhap();
?>