<?php
    require '../includes/core/base.php';
    $projectTitle = 'City AM: Homepage/Category redesign';
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
                <strong>Project</strong>: City AM: Homepage/Category redesign
            </p>
            <p>
                <strong>Launch</strong>: changes up to March 2015
            </p>
            <p>
                <strong>Role</strong>: Project Manager
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                Since I joined City AM in June 2014, we've introduced a series of gradual changes to the site layout.
            </p>
            <p>
                The main changes can be grouped into a few areas:
            </p>
            <ul>
                <li>a new header</li>
                <li>a tiled layout</li>
                <li>getting the homepage and category pages to match</li>
                <li>mobile-first</li>
                <li>a refreshed sidebar with compelling content and greater variety</li>
            </ul>
            <p>
                Barring a few tweaks, the theme has stayed roughly the same.
            </p>
            <p>
                What did we change, and why did we make those changes?
            </p>
            <h2>New header</h2>
            <p>
                The previous header was quite compact, but it felt quite claustrophobic - there wasn't any space for
                additional categories.
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-header-2014-600x50.png" alt="cityam-header-2014" width="550" height="46" />
            </p>
            <p>
                We wanted to incorporate the "Business with personality" tagline, make the subcategories accessible,
                and show the user their current position within the site. We also had an additional set of links to add to the top. Later, we introduced the "FTSE bar" and trending tags.
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-header-2015-600x120.png" alt="cityam-header-2015" width="550" height="110" />
            </p>
            <p>
                As part of the layout changes, we also refined the look and feel. The social icons, search box and the
                navigation bar were all updated to feel more unified.
            </p>
            <h2>Tiled layout</h2>
            <p>
                The previous homepage layout incorporated a wide first column containing a lead story with headline and image,
                followed by an image/headline stream of content. Alongside this was a narrow second column containing
                text-only headlines of opinion pieces.
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-layout-homepage-1-588x600.png" alt="cityam-layout-homepage-1" width="550" height="561" />
            </p>
            <p>
                This didn't maximise the available space, and it was quite text-heavy. There were also several design
                elements we wanted to clean up; namely, the abundance of grey lines, and the double red arrows.
            </p>
            <p>
                We decided to introduce a tiled layout:
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-layout-homepage-2-600x555.png" alt="cityam-layout-homepage-2" width="550" height="509" />
            </p>
            <p>
                This took a while to get right. The increased emphasis on images brought the page to life, but it has
                required a greater focus on selecting good images for every story. The introduction of subtle "furniture"
                helped to differentiate between content pieces; coloured labels such as "New", "Opinion" and "Shares: xx"
                draw attention to certain content, while dates and author names add a little more information and also
                break up the stream.
            </p>
            <p>
                The lead story was the one place we felt that an intro paragraph and related links could be useful.
                Links aren't always used, but the intro always appears. This gives greater focus to the lead story.
            </p>
            <p>
                Positioning the headlines above or below the images took a few attempts. Having two columns means it's
                possible for a long headline to create a lot of whitespace if its neighbour has a very short headline.
                We debated whether it was better to have space above the headline and keep the headline and image attached,
                or line up the top of every headline but potentially have space between the headline and image. The
                former worked better. The result is that there is a certain amount of tweaking that goes on to make
                the stream balanced - which means no four-line decks alongside one-line decks.
            </p>
            <h2>Homepage and category pages</h2>
            <p>
                The category pages originally had a different layout to the homepage. Take a look:
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-news-1-600x532.png" alt="cityam-news-1" width="550" height="488" />
            </p>
            <p>
                We didn't feel the layout was particularly compelling. So we decided to reuse the tiled layout from the
                homepage:
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-news-2-600x583.png" alt="cityam-news-2" width="550" height="534" />
            </p>
            <p>
                This was always the intention - the tiled layout was designed to suit any area. There are slight variations
                on a few special pages such as <a href="http://www.cityam.com/topic/general-election-2015">topic pages</a>
                and <a href="http://www.cityam.com/company/zoopla-property-group">company pages</a>.
            </p>
            <h2>Mobile-first</h2>
            <p>
                A major focus throughout the work we did on the tiled layout was to put mobile first. We designed something
                that looks great on mobile, and scales up to tablet and desktop well.
            </p>
            <p>
                Leaving out the lead story for space reasons, here's how it looks on mobile:
            </p>
            <p>
                <img src="/assets/img/portfolio/cityam-2015-03-redesign/cityam-news-mobile1-356x600.png" alt="cityam-news-mobile" width="356" height="600" />
            </p>
            <p>
                I actually prefer it on mobile. This is perhaps my favourite part of the changes we made.
            </p>
            <h2>Sidebar</h2>
            <p>
                The sidebar is something we've changed a bit more than the rest of the layout:
            </p>
            <ul>
                <li>redesigning the Newsletter signup box;</li>
                <li>adding a "Data in Focus" box;</li>
                <li>reworking the second homepage column into a new sidebar box - "The Forum";</li>
                <li>added images to "Most Read" and changed this to update more often;</li>
                <li>when you reach the bottom of the sidebar, the ad and the Most Read box stick to the top.</li>
            </ul>
            <h2>Managing the changes</h2>
            <p>
                With so many changes to make, this would have been a big project if we tried to do everything at once.
                Instead, we took the approach of getting changes live as quickly as possible, so we could monitor any
                positive or negative effects on overall stats and conversions.
            </p>
            <p>
                This gradual but steady cycle of changes allowed us to respond quickly when we wanted to make a change.
                This was essential due to the small development team. When resources are precious, you need to think
                carefully before jumping into a huge project - especially if it's not clear if you will see benefits
                until you actually try it out.
            </p>
            <p>
                As for the results, they've generally gone one of two ways:
            </p>
            <ol>
                <li>Fail, learn, adapt</li>
                <li>Succeed, learn, grow</li>
            </ol>
            <p>
                Where we've seen no difference, we either gather more data or make a further change and monitor that
                instead.
            </p>
            <p>
                Sometimes, you have to fail to succeed. As long as you learn, it's all good.
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
