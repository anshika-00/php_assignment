<?php
$myfile = fopen("./StyleSheet.css", "r") ;
$file = fopen("./newfile.css", "w");
while(!feof($myfile)) {
    $type = fgets($myfile);
    $patt = '/(\/\*).*(\*\/)/i';
    $v = preg_replace($patt,'',$type);
    echo($v);
        fwrite($file, $type);
  }
fclose($myfile);
fclose($file);
?> 


 