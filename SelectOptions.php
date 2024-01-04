<?php
include("library.php");

if (isset($_REQUEST["flag"])) {
	if ($_REQUEST["flag"]=="jenis_kamar") {
		$con = openConnection();

		//untuk hitung total baris
		$sqlData = "SELECT jenis_kamar as `key`, jenis_kamar as `value` FROM rate;";
		$param=array();
		$data=queryArrayRowsValues($con, $sqlData, $param);
		
		header("Content-type: application/json; charset=utf-8");
		echo json_encode($data);
	}
	else {
		echo json_encode(array(array("key"=>"error", "value"=>"Unknowned Flag")));
	}
}
else {
	echo json_encode(array(array("key"=>"error", "value"=>"Invalid Parameter")));
}
?>
