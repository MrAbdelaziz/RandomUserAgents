<?php

$x=0;
$file = fopen('UserAgents.ini','w');
while ($x!=20000) {
	$x++;
	        fwrite($file,"Mozilla/".rand(0,9).".".rand(0,9).".".rand(0,1).rand(0,9).".0 (Microsoft Windows NT ".rand(0,9).".".rand(0,9).".".rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)." Service Pack ".rand(1,3)."; x64)\n");     
}
fclose($file);



file_put_contents('UserAgents.ini',
    preg_replace(
        '~[\r\n]+~',
        "\r\n",
        trim(file_get_contents('UserAgents.ini'))
    ));
       


?>