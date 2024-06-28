<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reading a file using PHP</title>
</head>
<body>
    
    <?php 
    $filename = "tmp.txt";
    $file = fopen( $filename, "r");
    if( $file == false) {
        echo ( "Error in opening file" );
        exit();
    }
    $filesize = filesize( $filename );
    $filetext = fread( $file, $filesize);

    fclose( $file );

    echo( "File size : $filesize bytes");
    echo ( "<pre>$filetext</pre>" );
    ?>
</body>
</html>