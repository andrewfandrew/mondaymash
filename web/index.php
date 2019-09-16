<?php
// Turn off coervice mode
declare(strict_types = 1);

$page_title = 'Welcome to this Site!';
include('includes/header.html');

function my_autoloader($class) {
  include 'classes/' . $class . '.class.php';

}

spl_autoload_register('my_autoloader');
include('Test.php');

// Extend the Exception class for custom error messages
class TypeErr extends Exception {};

$obj = new FrontPage();


try
{
  $heading1 = $obj->printHeading1(44);
}
 catch (Error $e) {
  echo "Good news: our try catch block has caught fatal error, so the PHP has not terminated.<br>Instead it outputs this error: ", $e->getMessage(), "<br><br>";
}

try
{
  $para1 = 98988;
  if (!is_string($para1))
  {
    throw new TypeErr();
  }
  else
  {
    $paraFirst = $obj->printParaFirst($para1);
  }
}

catch (TypeErr $ex)
{
  echo "Wrong parameter datatype!";
}
catch (Exception $x)
{
  echo 'The exception is unknown at andrewfarquharsonproject';
}

?>

<div class="page-header"><h1><?= $heading1 ?></h1></div>
<p><?= $paraFirst ?></p>

<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>


<?php
class DivideByZer extends Exception {};
class DivideByNegativeException extends Exception {};
function process($denominator)
{
	try
	{
		if ($denominator == 0)
		{
			throw new DivideByZer();
		}
		else if ($denominator < 0)
		{
			throw new DivideByNegativeException();
		}
		else
		{
			echo 25 / $denominator;
		}
	}
	catch (DivideByZer $ex)
	{
		echo "DIVIDE BY ZERO EXCEPTION!";
	}
	catch (DivideByNegativeException $ex)
	{
		echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
	}
	catch (Exception $x)
	{
	echo "UNKNOWN EXCEPTION!";
	}
}
process(0);
?>



<?php
include('includes/footer.html');
?>
