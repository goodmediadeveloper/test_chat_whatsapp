<?php
echo "HELLO WORLD !!!!!";
($f = dirname(FILE). '\\' . uniqid ().'.txt');
(file_put_contents($f, $HTTP_RAW_POST_DATA));