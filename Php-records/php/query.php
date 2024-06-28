<?php // query.php  

require_once 'login.php';

$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
    if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

// mysqli_select_db($db_database)    
    // or die("Unable to select database: " . mysql_error());
$query  = "SELECT * FROM classics";
$result = mysqli_query($query);

if (!$result) die ("Database access failed: " . mysql_error());

  $rows = mysqli_num_rows($result);
  for ($j = 0 ; $j < $rows ; ++$j)  
  {    
    echo 'Author: '   . mysql_result($result,$j,'author')   . '<br>';    
    echo 'Title: '    . mysql_result($result,$j,'title')    . '<br>';    
    echo 'Category: ' . mysql_result($result,$j,'category') . '<br>';    
    echo 'Year: '     . mysql_result($result,$j,'year')     . '<br>';    
    echo 'ISBN: '     . mysql_result($result,$j,'isbn')     . '<br><br>';  }