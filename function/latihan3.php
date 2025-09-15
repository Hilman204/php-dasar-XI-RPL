<?php 
 
   $pelajar="varel";

    function siswa($nama="ZEUS", $kelas="XI RPL"){
    	global $pelajar; //mengambil variabel dari luar function
    	echo "Siswa kelas $kelas yang bernama $pelajar
    	selalu rajin.";
    }

 siswa();    
 ?>