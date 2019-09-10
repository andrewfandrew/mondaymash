<?php

if(!isset($_COOKIE['user_id'])) {
  require('includes/login_functions.inc.php');
  redirect_user();
}

$page_title = 'Logged In!';
include('includes/header.html');

echo "<h1>You're logged in</h1>
<p>{$_COOKIE['first_name']}, You logged in!</p>
<p><a href=\"logout.php\">Logout</a></p>";
include('includes/footer.html');
 ?>
