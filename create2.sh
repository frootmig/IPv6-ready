#!/bin/bash

echo "<?php"
echo 'header("Content-type: image/gif");';
echo "if (strpos(\$_SERVER['REMOTE_ADDR'], ':') === false) {"
echo "  // ipv6_notready.gif"
echo -n "  echo hex2bin('"
php -r 'echo bin2hex(file_get_contents("ipv6_notready.gif"));'
echo "');"
echo '} else {'
echo "  // ipv6_ready.gif"
echo -n "  echo hex2bin('"
php -r 'echo bin2hex(file_get_contents("ipv6_ready.gif"));'
echo "');"
echo '}'
