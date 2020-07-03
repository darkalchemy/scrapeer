<?php

declare(strict_types=1);

use Scrapeer\Scraper;

if (file_exists('Scraper.php')) {
    require 'Scraper.php';
} else {
    require '../Scraper.php';
}

$scraper = new Scraper();
$tracker = array('udp://tracker.coppersurfer.tk:6969/announce');
$hash = array('4344503B7E797EBF31582327A5BAAE35B11BDA01');

$info = $scraper->scrape($hash, $tracker);
var_export($info);

// Check if we have any errors.
if ($scraper->has_errors()) {
    // Get the errors and print them.
    var_export($scraper->get_errors());
}