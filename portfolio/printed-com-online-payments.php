<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: Online payments';
    $pageTitle = $projectTitle.' - Portfolio - Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li class="active"><?php print($projectTitle); ?></li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header"><?php print($projectTitle); ?></h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-4">
            <h2>Project details</h2>
            <p>
                <strong>Project</strong>: Online payments
            </p>
            <p>
                <strong>Launch</strong>: February 2012
            </p>
            <p>
                <strong>Role</strong>: Lead Developer
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                Originally, the site only allowed customers to place an order “on account”, and be invoiced for it later.
                We decided to rebuild the checkout screen, and create a new screen that was easier to use, while also
                incorporating card payments and PayPal. This was my first foray into online payments, so it took a bit
                of time to get things right.
            </p>
            <p>
                Beyond the core functionality that did the payment processing, I also set up an SSL certificate and made
                the appropriate parts of the site secure. I updated reports and added new ones to show payment methods
                and payment status. I worked with the Finance team to ensure our data exports to Opera (at the time not
                using an API) provided all the necessary info. Later, I added the ability to save card details to a wallet.
            </p>
            <p>
                Despite the large scale of changes and the lengthy project cycle (mainly due to frequent UX rework of
                the new checkout screen) the introduction of online payments was a huge success, and it definitely made
                the site simpler for new users who would be unfamiliar with the “pay on account” setup.
                The account payment option was retained for existing users.
            </p>
        </div>
    </div>

<?php
    require '../includes/theme/copyright.php';
?>

</div>
<!-- /.container -->

<?php
    require '../includes/core/scripts.php';
    require '../includes/core/footer.php';
?>
