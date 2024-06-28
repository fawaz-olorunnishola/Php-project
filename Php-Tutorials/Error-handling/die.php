<?php
if(!file_exists("test.txt"))
{
die("File not found");
}
else
{
$file=fopen("test.txt","r");
print "Opened file sucessfully";
}
// Test of the code here.
?>