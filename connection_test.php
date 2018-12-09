<?php

// From the blog-post
$connectstr_dbhost = '127.0.0.1:56562';
$connectstr_dbname = 'localdb';
$connectstr_dbusername = 'azure';
$connectstr_dbpassword = 'password';

foreach ($_SERVER as $key => $value)
{
    if (strpos($key, "MYSQLCONNSTR_") !== 0)
    {
        continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);

    echo $value;
}

define('DB_NAME', $connectstr_dbname);
define('DB_USER', $connectstr_dbusername);
define('DB_PASSWORD', $connectstr_dbpassword);
define('DB_HOST', $connectstr_dbhost);

// Custom testing
echo $connectstr_dbname."\n";
echo $connectstr_dbusername."\n";
echo $connectstr_dbpassword."\n";
echo $connectstr_dbhost."\n";

$dbConnection = $dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbConnection)
{
    echo "Failed to connect to the database.\n";
}
else
{
    echo "Successfully connected to the database.\n";
}
?>