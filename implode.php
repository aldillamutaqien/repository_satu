<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>"; 
echo implode("X",$arr);
?>


Hasil:
Hello World! Beautiful Day!
Hello+World!+Beautiful+Day!
Hello-World!-Beautiful-Day!
HelloXWorld!XBeautifulXDay!
