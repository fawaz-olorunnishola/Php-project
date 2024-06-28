<!DOCTYPE html>
<html>
<head> 
    <title>passing Argument by Reference</title>
</head>
<body>

    <?php
    function addFive($num)
    {
        $num += 5;
    }
    function addSix(&$sum)
    {
        $num += 6;
    }
    $orignum = 10;
//    addFive( &$orignum );
    echo "Original value is $orignum<br />";
    addSix( $orignum );
    echo "Original value is $orignum<br />";
    ?>
</body>
</html>