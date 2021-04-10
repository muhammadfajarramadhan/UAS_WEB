<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Sederhana Pembayaran Zakat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>Log In</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="proses.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div align="center">
                <button type="submit" name="login" style="margin-top: 30px; height: 30px; background-color: #00FF00;
                color: black; width: 100px;" onclick="window.location='index.php'">LOG-IN</button>
            </div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>
