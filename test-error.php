<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP is working!<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

// Test config
include('config.php');
echo "Config loaded!<br>";
echo "Site Name: " . $site_name . "<br>";

// Test session
session_start();
echo "Session started!<br>";

// Test component
if(file_exists('components/header.php')) {
    echo "Header file exists!<br>";
} else {
    echo "ERROR: Header file missing!<br>";
}
?>