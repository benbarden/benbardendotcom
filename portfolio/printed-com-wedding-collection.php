<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: Wedding Collection';
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
                <strong>Project</strong>: Wedding Collection
            </p>
            <p>
                <strong>Launch</strong>: November 2013
            </p>
            <p>
                <strong>Role</strong>: Technical Project Manager
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                Following the introduction of the <a href="printed-com-new-ordering-wizard.php">new ordering wizard</a>,
                it was put to the test in our biggest product launch yet. The Wedding Collection was to include 17 brand
                new products, each with a dedicated landing page linked from a top-level category page.
                Additionally, each product had its own set of options to choose from in the ordering wizard.
                In all, there was a large amount of work to get live.
            </p>
            <p>
                For this project I stepped into the role of Technical Project Manager, working closely with the
                Product Manager, Head of Design and the development team. I sourced copy and images, agreed product names
                and URLs, advised how to set up some of the new products, and trained the development team on how to
                extend the new ordering wizard for the project. I assisted in getting all of the product details on the
                landing pages set up to be fully dynamic, so a change to the product options didn’t require a lot of
                rework from the front-end team.
            </p>
            <p>
                I did some of the coding to help out where I could, although for the first time I attempted to be less
                hands-on so I could see the project as a whole. Additionally, I was heavily involved in QA and channelled
                all the necessary feedback between the teams so any bugs or final copy changes could be dealt with quickly.
                Finally, I coordinated the code release, communicated openly with the whole team on the status of the work,
                and performed further testing after the project went live.
            </p>
            <p>
                Everything went live on time and to spec, ready for the Marketing team to begin promoting the new products.
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
