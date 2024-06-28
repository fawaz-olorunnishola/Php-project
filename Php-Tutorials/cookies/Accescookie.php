<!DOCTYPE html>
<html>
<head> 
    <title>Writing PHP Function</title>
</head>
<body>
    <?php
    echo $_COOKIE["name"]. "<br />";

    echo $HTTP_COOKIE_VARS["name"]. "<br />";

    echo $_COOKIE["age"]. "<br />";

    echo $HTTP_COOKIE_VARS["name"]. "<br />"
    ?>
</body>
</html>