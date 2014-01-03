<?php

$pin = intval($_GET['pin']);

$command = "sudo python pitoast.py $pin";

$result = shell_exec($command);

echo($result);


?>
