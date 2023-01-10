<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utama</title>
</head>
<body>
    <section>
        <div>
            <h1>
                Selamat datang di halaman login sederhana admin,
            </h1>

            <p>
                <?php echo $_SESSION['username'] ?>
            <p>
            
            <div>
                <a href="logout.php">Logout</a>
            </div>

        </div>
    </section>
</body>
</html>