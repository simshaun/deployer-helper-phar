Push-Location phar
composer install -n -q
Pop-Location

php -d phar.readonly=0 generate.php

Write-Output "PHAR generated"