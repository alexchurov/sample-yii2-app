<?php

// текущий каталог
echo getcwd() . "\n";

echo "DATE=".date(DATE_RFC2822)."<br/><br/>";

echo "USER=".exec('id')."<br/><br/>";

echo phpinfo();



?>