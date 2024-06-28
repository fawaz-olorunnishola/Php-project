<?php

$filename = "newfile.txt";
$file = fopen( $filename, "w");
if ( $file == false )
{
    echo ("Error in opening new file");
    exit();
}
fwrite($file, "This is a simple test\n");
fclose( $file );
?>


<html >
<head>

    <title>Writing a file name</title>
</head>
<body>
    <?php
    if ( file_exists( $filename ) )
    {
        $filesize = filesize( $filename );
        $msg = " File created with name $filename";
        $msg .= " containing $filename";
        echo ($msg);
    }
    else {
        echo( "File $filename does not exist");
    }
    ?>
</body>
</html>