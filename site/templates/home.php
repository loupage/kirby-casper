<!DOCTYPE html>
<html>
<head>
    <!-- Document Settings -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Page Meta -->
        <?php if($page->isHomePage()): ?>
            <?= "<title>" . $site->title() . "</title>" ?>
        <?php else: ?>
            <?= "<title>" . $site->title() ?> | <?= $page->title()->html() . "</title>" ?>
        <?php endif ?>
    </title>

    <meta name="description"  
        <?php if($page->description() != ""): ?>
            content="<?= $page->description()->html() ?>" />
        <?php else: ?>
            content="<?= $site->description()->html() ?>" />
        <?php endif ?>
    
       
    <!-- Mobile Meta -->
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Brand icon -->
    <link rel="shortcut icon" href="<?php echo url('/assets/images/favicon.ico') ?>" >

    <!-- Styles'n'Scripts -->
    <?= css('assets/css/screen.css') ?>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400" />
    <?= css('assets/css/syntax.css') ?>
    <!-- highlight.js -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/styles/default.min.css">
    <style>.hljs { background: none; }</style>

    <!-- Ghost outputs important style and meta data with this tag -->
    <?php snippet('head') ?>

</head>
<!--
<body class="{% if paginator.page > 1 %}paged archive-template{% elsif page.class %}{{ page.class }}{% else %}home-template{% endif %} nav-closed">

    <!-- The blog navigation links -->
    {% include navigation.html %}

    <div class="site-wrapper">

        <!-- All the main content gets inserted here, index.hbs, post.hbs, etc -->
        {{ content }}

        <!-- The tiny footer at the very bottom -->
        <footer class="site-footer clearfix">
          <section class="copyright"><a href="{{ site.baseurl }}">{{ site.name }}</a> &copy; {{  site.time | date: '%Y' }}</section>
          <section class="poweredby">Proudly published with <a href="https://jekyllrb.com/">Jekyll</a> using <a href="https://github.com/jekyller/jasper">Jasper</a></section>
        </footer>
    </div>
    <!-- highlight.js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- jQuery needs to come before `{{ghost_foot}}` so that jQuery can be used in code injection -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Ghost outputs important scripts and data with this tag -->
    <!-- {{ghost_foot}} -->
    <!-- Add Google Analytics  -->
    {% include analytics.html %}
    <!-- Fitvids makes video embeds responsive and awesome -->
    <script type="text/javascript" src="{{ site.baseurl }}assets/js/jquery.fitvids.js"></script>
    <!-- The main JavaScript file for Casper -->
    <script type="text/javascript" src="{{ site.baseurl }}assets/js/index.js"></script>

</body>
</html>