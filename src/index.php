<?php
echo "Hostname: " . gethostname() . "<br>";
echo file_get_contents('http://169.254.169.254/2016-09-02/meta-data/public-ipv4');
echo "Host headers: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "Client IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
include("counter.php");
//phpinfo();