<?php
    $language=strtolower($_POST['language']);
    $code=$_POST['code'];
    $random=substr(md5(mt_rand()), 0 , 7);
    $filePath= "temp/" .$random . "." . $language;
    $programFile=fopen($filePath, 'w');
    fwrite($programFile, $code);
    fclose($programFile);
    if($language =='node'){
        rename($filePath, $filePath.".js");
        $output=shell_exec("node $filePath.js 2>&1");
         echo $output;
    }