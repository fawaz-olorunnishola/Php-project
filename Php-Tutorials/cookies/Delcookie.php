<?php
 setcookie( "name", "", time()- 60, "/","", 0);
 setcookie( "age", "", time()- 60, "/","", 0);
 ?>
 <!DOCTYPE html>
<html>
<head> 
    <title>Deleting Cookies with PHP</title>
</head>
<body>

<?php echo "Deleted Cookies" ?>
</body>
</html>