<!DOCTYPE html>
<html>
<head>
	<title>Nilai2</title>
</head>
<body>
      <?php 
           $nilai = 70;
           if ($nilai >= 80) {
           	   echo "Nilai anda $nilai, Anda lulus";

            } elseif ($nilai >= 60) {
            	echo "Nilai anda $nilai, Remedial";
            	
            } else {
            	echo "Nilai anda $nilai, Anda tidak lulus";

            }


       ?>
</body>
</html>