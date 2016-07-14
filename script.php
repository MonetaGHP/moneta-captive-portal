<?php

$myfile = $_POST['value2'] . "^" . $_POST['value1'];
file_put_contents("data.txt", $myfile);

 ?>
