<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		
	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<center>
	
	<div style="width: 300px;height: 300px;background-color: #de9191d4">
		
	<br>
	<form  method="post" accept-charset="utf-8" style="margin-top: 100px">
      
		<input style="border-radius: 15px" type="post" name="a">
		<input style="border-radius: 15px" type="submit" value="Nhập" name="submit">
		
	</form>

	


<?php 
	
	if(isset($_POST["submit"])) {
		$a=$_POST["a"];

		if($_POST["a"]=="") {
			echo "Bạn vừa bỏ trống!";


		}
		else {
			echo "Bạn vừa nhập &emsp;".$a;
			header("location:test.php?ten=$a");
	}
		}
		

  // $_GET["Nội dung cần lấy ra "]



?>

</center>

</div>

</body>
</html>