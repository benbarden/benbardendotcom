<?php
    require '../includes/core/base.php';
    $pageTitle = 'About Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">About</li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">About Ben Barden</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-8">
            <p>
                I’m a technical expert with deep knowledge of building easy to use web applications.
                I care greatly about user experience and delivering a product that “just works”.
                I have worked as a product owner, development manager, developer, and tester.
            </p>
            <h2>Strengths</h2>
            <ul>
                <li>Focus: I’m a problem solver. I enjoy getting to the root of issues, removing friction and pain points,
                    thereby maximising a product’s potential.</li>
                <li>Organisation: I’m unfazed by having multiple priorities. I align a product’s roadmap with team
                    capabilities and business needs.</li>
                <li>Attention to detail: I look at the big picture and I also get into the details when needed.</li>
                <li>Quality-focused: I believe that even the smallest bugs can add up to a below-par experience.
                    I address issues to maintain high product quality.</li>
                <li>Strong communication: I maintain clear and coherent communication whether I’m dealing with technical
                    or non-technical people. I can explain business requirements to developers, and translate jargon
                    into plain English as required.</li>
            </ul>
            <h2>Technical skills</h2>
            <p>
                PHP, Laravel, MySQL, HTML, CSS, Javascript, jQuery, Twig, Bootstrap, Git/GitHub, OSX, Linux, Apache,
                Varnish, nginx, Vagrant, Bash, Phing, JIRA, Google sheets, Microsoft Office, CDN setup, WireframeSketcher,
                Google Analytics, Google Webmaster Tools, Google Tag Manager, Doubleclick
            </p>
            <h2>Contact</h2>
            <p>
                For more, <a href="https://www.linkedin.com/in/benbarden" target="_blank">view my LinkedIn profile</a>.
                <br>
                To get in touch, <a href="mailto:fromtheblog@benbarden.com">email me</a>.
            </p>
        </div>
        <div class="col-md-2">
            <img src="/images/2015-09-Ben-Barden-360px.jpg" alt="Ben Barden" style="border: 0;">
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
