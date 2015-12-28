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
        <div class="col-md-6">
            <h2>Professional Profile:</h2>
            <ul>
                <li>I currently work for a London newspaper (City AM). I head up the technical team.
                    My <a href="https://www.linkedin.com/in/benbarden">LinkedIn profile</a> expands on this.</li>
                <li>I'm a manager with strong technical skills. I have long-term experience in coding, so
                    I fully appreciate the challenges faced by developers, and work with them to achieve the best possible results.</li>
                <li>I've worked as a tester and I'm therefore very quality-focused. I report every bug I find.</span></li>
                <li>I'm a problem solver - I get to the bottom of an issue quickly, and then propose solutions.</li>
                <li>I'm very organised. I use a mixture of tools (JIRA, Google Docs, Excel, Evernote) when organising
                    the priorities for my team.</li>
                <li>Areas of interest: CMS architecture, information architecture, exploratory testing, usability testing,
                    admin screens/reports, UX, blogging.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Personal Profile:</h2>
            <ul>
                <li>I'm a blogger, currently running a <a href="https://benbarden.wordpress.com/">mixed topic blog</a>.</li>
                <li>I'm a composer of instrumental music. See <a title="Music" href="/music/">my music page</a> for more.</li>
                <li>I'm a keen listener of funk and soul music, and have a long-standing love of trance.</li>
                <li>I'm a fan of various TV shows, especially sci-fi and comedy. (Red Dwarf is a favourite!)
                    Here are some of my <a title="TV" href="http://www.benbarden.com/tv/">favourite TV shows</a>.</li>
                <li>I'm not the most travelled person, but here's a page listing 
                    <a title="Destinations" href="destinations.php">the places I've been</a>.</li>
                <li>To get in touch, <a href="mailto:fromtheblog@benbarden.com">email me</a>.</li>
            </ul>
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
