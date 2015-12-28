<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: Online invoicing';
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
                <strong>Project</strong>: Online invoicing
            </p>
            <p>
                <strong>Launch</strong>: March 2012
            </p>
            <p>
                <strong>Role</strong>: Lead Developer
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                Following the <a href="printed-com-online-payments.php">online payments</a> project launch, this was a
                logical next step as some customers would still be ordering first and not paying until later.
            </p>
            <p>
                I did a similar thing when I worked for King Street Computers in Australia, so I already had a clear
                idea of how it would work. Replacing an antiquated Word invoicing setup, I developed the ability for
                customers to download invoice PDFs and pay them through the My Account screens. This then fed through to
                the back-end screens and Finance could see which orders were paid or unpaid. I also
                developed a basic REST API so the accounting system (Opera) could mark invoices as paid.
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
