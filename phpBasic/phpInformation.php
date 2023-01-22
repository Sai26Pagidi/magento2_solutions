<?php
$version = phpversion();
echo 'PHP version is::: ' . $version;

$phpConfigurationInformation = phpinfo();
echo 'PHP configuration is '.$phpConfigurationInformation;

// if we want to get more information about phpinfo() use parse_ini_file() and ini_get() functions.

$config = parse_ini_file("php.ini");
echo 'Config --' .$config . "<br>";
echo "PHP memory limit: " . ini_get("memory_limit") . "<br>";
echo "PHP max upload size: " . ini_get("upload_max_filesize") . "<br>";
echo "PHP post file size: " . ini_get("post_max_size") ."<br>";