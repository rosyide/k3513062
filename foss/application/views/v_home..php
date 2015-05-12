<?php
session_start();

?>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
     <h1 align='center'>Login Berhasil</h1>
	 <h1 align='center'>--------------------------</h1>
	 <h1 align='center'>Selamat Datang <?php echo $nama ?></h1>
	 <?php
	 $_SESSION['nama'] = $nama;
	 ?>
	<h1 align='center'>Redirecting... </h1>
        <a href="login/logout">Logout</a> <!-- link untuk logout -->
		<meta http-equiv='refresh' content='3; url=person/index'/>
    </body>
</html>