<?php

// If no cookie present redirect user
if (!isset($_COOKIE['user_id'])) {

  // the function is necessary
  require('includes/login_functions.inc.php');
  redirect_user();

} else {
  // Get rid of cookies
  setcookie('user_id', '', time()-3600, '/', '', 0, 0);
  setcookie('first_name', '', time()-3600, '/', '', 0, 0);
}

// Set the page title and include the header html
$page_title = 'You are logged out.';
include('includes/header.html');

// Print your custom message now
echo "<h1>You are logged out.</h1>
<p>You have entered the logged out zone, {$_COOKIE['first_name']}!</p>";

include('includes/footer.html');
 ?>
