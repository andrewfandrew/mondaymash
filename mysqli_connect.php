<?php

// This file connects to MySQL, selects the database
// and sets the encoding

// The database access details are set as constants
DEFINE ('DB_USER', 'username');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mondaymashup');

// Connect:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die
('It was not possible to connect to MySQL: ' . mysqli_connect_error( ));

// Set encoding
mysqli_set_charset($dbc, 'utf8');
 ?>
