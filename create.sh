#!/bin/bash

echo "<?php"
echo 'header("Content-type: image/png");';
echo "if (strpos(\$_SERVER['REMOTE_ADDR'], ':') === false) {"
echo "  // not-ready.png"
echo -n "  echo hex2bin('"
php -r 'echo bin2hex(file_get_contents("not-ready.png"));'
echo "');"
echo '} else {'
echo "  // ready.png"
echo -n "  echo hex2bin('"
php -r 'echo bin2hex(file_get_contents("ready.png"));'
echo "');"
echo '}'
