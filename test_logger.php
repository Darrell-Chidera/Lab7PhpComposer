<?php

require 'vendor/autoload.php';

use App\AppLogger;


$logger = new AppLogger();
$logger->logInfo('This is an informational log entry.');
$logger->logError('This is an error log entry.');

echo "Logging test completed. Check the logs directory for the output.";
