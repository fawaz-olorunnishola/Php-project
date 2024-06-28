<html>
<head><title>Comparison Operators</title><head>
<body>
<?php
//  $a = 42;
//  $b = 20;
//  if( $a == $b ){
//  echo "TEST1 : a is equal to b<br/>";
//  }else{
//  echo "TEST1 : a is not equal to b<br/>";
//  }
//  if( $a > $b ){
//  echo "TEST2 : a is greater than b<br/>";
//  }else{
//  echo "TEST2 : a is not greater than b<br/>";
//  }
//  if( $a < $b ){
//  echo "TEST3 : a is less than b<br/>";
//  }else{
//  echo "TEST3 : a is not less than b<br/>";
//  }
//  if( $a != $b ){
//  echo "TEST4 : a is not equal to b<br/>";
//  }else{
//  echo "TEST4 : a is equal to b<br/>";
//  }
//  if( $a >= $b ){
//  echo "TEST5 : a is either greater than or equal to b<br/>";
//  }else{
//  echo "TEST5 : a is neither greater than nor equal to b<br/>";
//  }
//  if( $a <= $b ){
//  echo "TEST6 : a is either less than or equal to b<br/>";
//  }else{
//  echo "TEST6 : a is neither less than nor equal to b<br/>";
//  }


// Logical Operators:
// $a = 42;
// $b = 0;
 
//  if( $a && $b ){
//  echo "TEST1 : Both a and b are true<br/>";
//  }else{
//  echo "TEST1 : Either a or b is false<br/>";
//  }
//  if( $a and $b ){
//  echo "TEST2 : Both a and b are true<br/>";
//  }else{
//  echo "TEST2 : Either a or b is false<br/>";
//  }
//  if( $a || $b ){
//  echo "TEST3 : Either a or b is true<br/>";
//  }else{
//  echo "TEST3 : Both a and b are false<br/>";
//  }
//  if( $a or $b ){
//  echo "TEST4 : Either a or b is true<br/>";
//  }else{
//  echo "TEST4 : Both a and b are false<br/>";
//  }
//  $a = 10;
//  $b = 20;
//  if( $a ){
//  echo "TEST5 : a is true <br/>";
//  }else{
//  echo "TEST5 : a is false<br/>";
//  }
//  if( $b ){
//  echo "TEST6 : b is true <br/>";
//  }else{
//  echo "TEST6 : b is false<br/>";
//  }
//  if( !$a ){
//  echo "TEST7 : a is true <br/>";
//  }else{
//  echo "TEST7 : a is false<br/>";
//  }
//  if( !$b ){
//  echo "TEST8 : b is true <br/>";
//  }else{
//  echo "TEST8 : b is false<br/>";
//  }

// // Assignment Operators
// $a = 42;
//  $b = 20;
 
//  $c = $a + $b; /* Assignment operator */
//  echo "Addition Operation Result: $c <br/>";
//  $c += $a; /* c value was 42 + 20 = 62 */
//  echo "Add AND Assignment Operation Result: $c <br/>";
//  $c -= $a; /* c value was 42 + 20 + 42 = 104 */
//  echo "Subtract AND Assignment Operation Result: $c <br/>";
//  $c *= $a; /* c value was 104 - 42 = 62 */
//  echo "Multiply AND Assignment Operation Result: $c <br/>";
//  $c /= $a; /* c value was 62 * 42 = 2604 */
//  echo "Division AND Assignment Operation Result: $c <br/>";
//  $c %= $a; /* c value was 2604/42 = 62*/
//  echo "Modulus AND Assignment Operation Result: $c <br/>";

// Arithmetic Operators
// $a = 10;
// $b = 20;

// $result =($a > $b ) ? $a :$b;
// echo "TEST1: Value of result is $result<br/ >";
// $result = ($a < $b ) ? $a :$b;
// echo "TEST2 : Value of result is $result,br/ >"; 

// // Switch Statement:
// $d=date("D");
// switch ($d)
// {
// case "Mon":
//  echo "Today is Monday";
//  break;
// case "Tue":
//  echo "Today is Tuesday";
//  break;
// case "Wed":
//  echo "Today is Wednesday";
//  break;
// case "Thu":
//  echo "Today is Thursday";
//  break;
// case "Fri":
//  echo "Today is Friday";
//  break;
// case "Sat":
//  echo "Today is Saturday";
//  break;
// case "Sun":
//  echo "Today is Sunday";
//  break;
// default:
//  echo "Wonder which day is this ?";
// }

// loop iterations:
// $a = 0;
// $b = 0;

// for ($i=0; $i<5; $i++) {
//     $a +=10;
//     $b += 5;
// }
// echo ("At the end of the loop a=$a and b=$b");

// // while iteration
// $i = 0;
// $num = 50;

// while ($i < 10) {
//     $num--;
//     $i++;
// }
// echo("Loop stopped at i = $i and num = $num");

// $array = array( 1, 2, 3, 4, 5);
// foreach ( $array as $value )
// {
//     echo "Value is $value <br/>";
// }

// Break 
// $i = 0;

// while ( $i < 10)
// {
//     $i++;
//     if( $i == 3 )break;
// }
// echo ("Loop stopped at i = $i")

// $array = array( 1, 2, 3, 4, 5);
// foreach( $array as $value)
// {
//     if ($value == 3)continue;
//     echo "Value is $value <br />";
// }

// Numeric Arrays
// $numbers = array( 1, 2, 3, 4, 5);
// foreach( $numbers as $value )
// {
//  echo "Value is $value <br />";
// }
// /* Second method to create array. */
// $numbers[0] = "one";
// $numbers[1] = "two";
// $numbers[2] = "three";
// $numbers[3] = "four";
// $numbers[4] = "five";
// foreach( $numbers as $value )
// {
//  echo "Value is $value <br />";
// }

// Associative Arrays:
// $salaries = array( 
//  "mohammad" => 2000, 
//  "qadir" => 1000, 
//  "zara" => 500
//  );
// echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
// echo "Salary of qadir is ". $salaries['qadir']. "<br />";
// echo "Salary of zara is ". $salaries['zara']. "<br />";
// /* Second method to create array. */
// $salaries['mohammad'] = "high";
// $salaries['qadir'] = "medium";
// $salaries['zara'] = "low";
// echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
// echo "Salary of qadir is ". $salaries['qadir']. "<br />";
// echo "Salary of zara is ". $salaries['zara']. "<br />";

// Multidimensional array:
//  $marks = array( 
// "mohammad" => array
// (
// "physics" => 35, 
// "maths" => 30, 
// "chemistry" => 39 
// ),
// "qadir" => array
//  (
//  "physics" => 30,
//  "maths" => 32,
//  "chemistry" => 29
//  ),
//  "zara" => array
//  (
//  "physics" => 31,
//  "maths" => 22,
//  "chemistry" => 39
//  )
//  );
//  /* Accessing multi-dimensional array values */
//  echo "Marks for mohammad in physics : " ;
//  echo $marks['mohammad']['physics'] . "<br />"; 
//  echo "Marks for qadir in maths : ";
//  echo $marks['qadir']['maths'] . "<br />"; 
//  echo "Marks for zara in chemistry : " ;
//  echo $marks['zara']['chemistry'] . "<br />";

// strlen()function
// echo strlen("Hello world!")
// strpos()function:
// echo strpos("Hello world!","world");


// Identifying input and browser:
//     $viewer = getenv( "HTTP_USER_AGENT" );
//     $browser = 'An unidentified browser';
//     if ( preg_match( "/MSIE/i", "$viewer" ) ) {
//     $browser = "Internet Explorer";
//  }
//  else if( preg_match( "/Netscape/i", "$viewer" ) )
//  {
//  $browser = "Netscape";
//  }
//  else if( preg_match( "/Mozilla/i", "$viewer" ) )
//  {
//  $browser = "Mozilla";
//  }
//  $platform = "An unidentified OS!";
//  if( preg_match( "/Windows/i", "$viewer" ) )
//  {
//  $platform = "Windows!";
//  }
//  else if ( preg_match( "/Linux/i", "$viewer" ) )
//  {
//  $platform = "Linux!";
//  }
//  echo("You are using $browser on $platform");

// srand() function:
// srand( microtime() * 100000 );
//  $num = rand( 1, 4 );
 
//  switch( $num ) 
//   {
//  case 1: $image_file = "1st-tut/imgs/Teddy.jpg";
//  break;
//  case 2: $image_file = "/1st-tut/imgs/thickers.jpg";
//  break;
//  case 3: $image_file = "/1st-tut/imgs/think.jpg";
//  break;
//  case 4: $image_file = "/1st-tut/imgs/Tim.jpg";
//  break;
//  }
//  echo "Random Image : <img src=$image_file />";

// Using html forms:
// if( $_POST["name"] || $_POST["age"] )
//  {
//  echo "Welcome ". $_POST['name']. "<br />";
//  echo "You are ". $_POST['age']. " years old.";
//  exit();
//  }

// File downloader
// print "Content-Type:application/octet-stream; name=\"FileName\"\r\n";
// print "Content-Disposition: attachment; filename=\"FileName\"\r\n\n";
// # Actual File Content
// open( FILE, "<FileName" );
// while(read(FILE, $buffer, 100) )
// {
//  print("$buffer");
// }

?>
</body>
</html