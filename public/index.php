<?php
require '../includes/core/base.php';
require '../includes/creds/instagram.php';

$pageTitle = 'Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['Instagram']['ClientId'] = $instagramClientId;
$bindings['Instagram']['AccessToken'] = $instagramAccessToken;

$outputHtml = $twig->render('home/index.twig', $bindings);
print($outputHtml);
