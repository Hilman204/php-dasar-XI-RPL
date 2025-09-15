<!DOCTYPE html>
<html>
<head>
	<title>Get di php</title>
</head>
<body>
      <h1>Get di php</h1>
      <form action="1get.php" method="get">
      	<input type="text" name="nama" placeholder="Nama">
      	<input type="submit" value="submit">
      </form>
      <?php 
       echo $_GET['nama'];
       ?>

</body>
</html>