<!DOCTYPE html>
<html>
<head>
	<title>Pengulangan</title>
</head>
<body>
      <h1>Pengulangan</h1>
      <h2>For</h2>
      <?php 
      for ($i=1; $i <= 5; $i++) { 
        	echo "Hello world <br>";        
        }  

      ?>

      <h2>While</h2>
      <?php 
      $i = 1;
      while ($i <= 5) {
      	echo "Hello world <br>";
      	$i++;
      }

       ?>

       <h2>Do while</h2>
       <?php 
       $i = 1;
       do {
        echo "Hello world <br>";
        $i++;
       } while ($i <= 5) ;

        ?>
      
</body>
</html>