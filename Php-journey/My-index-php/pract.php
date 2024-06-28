<?php

// Copying a file
// copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
// echo "File sucessfully copied to 'testfile2.txt";

// Alternate syntax forfor copying a file:
    // if(!copy('textfile.txt', 'testfile2.txt')) echo "Could not copy file";
    // else echo "File sucessfully copied to 'testfile2.txt'"; 

// // Moving a file
// if (!rename('testfile2.txt', 'testfile2.new'))
//     echo "Could not rename file";
// else echo "File successfully rename to 'testfile2.new'";

// // Deleting a file:
// if (!unlink('testfile2.new')) echo "Coul not delete file";
// else echo "File 'testfile2.new' successfully deleted";

// $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
// $text = fgets($fh);

// fseek($fh, 0, SEEK_END);
// fwrite($fh, "$text") or die("Coul not write to file");
// fclose($fh);

// echo "File 'testfile.txt' successfully updated";

// Updating a file with file locking:
// $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
// $text = fgets($fh); vbnm,

// if (flock($fh, LOCK_EX))
// {
//     fseek($fh, 0, SEEK_END);
//     fwrite($fh, "$text") or die("Could not write to file");
//     flock($fh, LOCK_UN);
// }

// fclose($fh);
// echo "File 'testfile.txt' successfully updated";

// Using file_get_contents:
// echo "<pre>";  // Enable display of line of feeds
// echo file_get_contents("testfile.txt");
// echo "</pre>"; // Terminates pre tag

// Using file_get_contents to fetch a file from a server acrossthe internet:
// echo file_get_contents("http://oreilly.com");

// printf functions
// printf("%'*7.5s", "Happy Birthday");/
?>