<!DOCTYPE html>
<html>
<head>
	<title>Soal No.2</title>
</head>
<body>

	<center><b>KONFIRMASI</b></center>

				<form action="" method="get">
					<label><b>Validasi Username</b></label><br>
					<input type="text" name="Username">
					<button name="user">Confirm</button>	
				</form>
			

				<?php 
if (isset($_GET['user'])) {
		$user=$_GET['Username'];
	if (preg_match("/^[a-z]/",$user)){
		echo "benar";
		}
	else
		{
		echo "salah";
		}
}
?>
<br>
<br>
<br>
<br>

				<form action="" method="get">
					<label><b>Validasi eMail</b></label><br>
					<input type="text" name="emaile">
					<button name="eMail">Confirm</button>	
				</form>
			
				<?php 
if (isset($_GET['eMail'])) {
		$eMail=$_GET['emaile'];
	if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $eMail)){
		echo ":  benar";
		}
	else{
		echo "salah";
		}
}
?>
<br>
<br>
<br>
<br>
				<form action="" method="get">
					<label><b>Validasi No.Telp</b></label><br>
					<input type="text" name="hape">
					<button name="hp">Confirm</button>	
				</form>
			

				<?php 
if (isset($_GET['hp'])) {
		$hp=$_GET['hape'];
	if (preg_match("/^\(?\+?([0-9]{1,4})\)?([0-9]{11,12})$/",$hp)){
		echo "benar";
		}
	else
		{
		echo "salah";
		}
}
?>
</body>
</html>