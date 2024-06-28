<?php

try {
    $error = 'Always show this error';
    throw new Exception($error);


echo 'Never executed';
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

echo 'Hello world';
?>