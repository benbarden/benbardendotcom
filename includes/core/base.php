<?php
date_default_timezone_set('Europe/London');

$includeGtm = false;
if (isset($_SERVER['HTTP_HOST'])) {
    if ($_SERVER['HTTP_HOST'] == 'www.benbarden.com') {
        $includeGtm = true;
    }
}
