<?php 

if( $_POST["name"] || $_REQUEST["age"])
{
    echo "Welcome ". $_REQUEST['name']. "<br />";
    echo "You are ". $_REQUEST['age']. "years old.";
    exit();
}
?>


<html>
<body>
    <form action="<?php $_SELF ?>" method="POST">

    Name: <input type="text" name="name" />
    Age: <input type="text" name="age" />

    <input type="submit" />
</body>
</html>