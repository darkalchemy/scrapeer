<?php

declare(strict_types=1);

use Medariox\Scraper;

require __DIR__ . '/../vendor/autoload.php';

$scraper = new Scraper();
$tracker = ['udp://tracker.coppersurfer.tk:6969/announce'];
$hash    = ['4344503B7E797EBF31582327A5BAAE35B11BDA01'];

try {
    $info = $scraper->scrape($hash, $tracker);
    var_export($info);
} catch (Exception $e) {
    var_export($scraper->get_errors());
}
