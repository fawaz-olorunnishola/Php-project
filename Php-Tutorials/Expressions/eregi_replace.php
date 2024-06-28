<?php
 $copy_date = "Copyright 2000";
 $copy_date = eregi_replace("([a-z]+)", "&Copy;", $copy_date);
 
 print $copy_date;
?>