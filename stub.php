<?php

Phar::mapPhar('app.phar');

require_once 'phar://app.phar/vendor/autoload.php';

__HALT_COMPILER();
