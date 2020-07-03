<?php

declare(strict_types=1);

use App\Scraper;

require __DIR__ . '/../vendor/autoload.php';

$scraper = new Scraper();
$tracker = ['udp://tracker.coppersurfer.tk:6969/announce'];
$hash    = ['4344503B7E797EBF31582327A5BAAE35B11BDA01'];

$info = $scraper->scrape($hash, $tracker);
var_export($info);

// Check if we have any errors.
if ($scraper->has_errors()) {
    // Get the errors and print them.
    var_export($scraper->get_errors());
}
