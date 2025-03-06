<?php
    $num01 = $_GET['cxnum01'];
    $num02 = $_GET['cxnum02'];
    $num03 = $_GET['cxnum03'];
   
   
     if ($num01 > $num02 && $num03){
        echo " O maior número é: $num01";
     }
        
     if ($num02 > $num01 && $num03){
        echo " O maior número é: $num02";
     }
       
     else{ 
      echo " O maior número é: $num03";} 
?>