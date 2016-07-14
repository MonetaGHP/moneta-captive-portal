<?php

$myfile = $_POST['value1'] . '^' . $_POST['value2'];
file_put_contents("data.txt", $myfile);

 ?>
