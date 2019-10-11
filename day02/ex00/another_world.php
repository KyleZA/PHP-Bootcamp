#!/usr/bin/php
<?php
$str = preg_replace('/\t/', ' ', $argv[1]);
echo trim(preg_replace('/\s+/', ' ', $str));
echo"\n";
?>