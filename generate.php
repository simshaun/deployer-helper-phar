<?php

$inputDir = __DIR__.'/phar/';
$outputFile = 'deployer-helper.phar';

@unlink($outputFile);

$phar = new Phar($outputFile);
$phar->buildFromDirectory($inputDir);
$phar->setStub(file_get_contents(__DIR__.'/stub.php'));

$phar->stopBuffering();