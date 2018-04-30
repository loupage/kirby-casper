<?php if($page->isHomePage()): ?>
<link rel="canonical" href="<?= $site->url() ?>" />
<?php else: ?>
<link rel="canonical" href="<?= $page->url() ?>" />
<?php endif ?>

<meta name="referrer" content="origin" />
<meta property="og:site_name" content="<?= $site->title() ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" 
    <?php if($page->isHomePage()): ?>
        "content ="<?= $site->title() ?>" />
    <?php else: ?>
        "content ="<?= $page->title() ?>" />
    <?php endif ?>

<meta property="og:description"  
    <?php if($page->description() != ""): ?>
        content="<?= $page->description()->html() ?>" />
    <?php else: ?>
        content="<?= $site->description()->html() ?>" />
    <?php endif ?>

<meta property="og:url" 
    <?php if($page->isHomePage()): ?>
        content ="<?= $site->url() ?>" />
    <?php else: ?>
        content ="<?= $page->url() ?>" />
    <?php endif ?>

<?php
// Attempt to get page image
$image = $page->coverImage()->toFile();
?>

<?php if($image): ?>
  <meta property="og:image" content="<? $image ?>" />
<?php else: ?>
  <meta property="og:image" content="<?php echo url('assets/images/cover1.jpg') ?>" />
<?php endif ?>  

<!-- Twitter Card Next -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title"
    <?php if($page->isHomePage()): ?>
        content ="<?= $site->url() ?>" />
    <?php else: ?>
        content ="<?= $page->url() ?>" />
    <?php endif ?>
<meta name="twitter:description"  
    <?php if($page->description() != ""): ?>
        content="<?= $page->description()->html() ?>" />
    <?php else: ?>
        content="<?= $site->description()->html() ?>" />
    <?php endif ?>

<meta name="twitter:url"
    <?php if($page->isHomePage()): ?>
        content ="<?= $site->url() ?>" />
    <?php else: ?>
        content ="<?= $page->url() ?>" />
    <?php endif ?>
 
    <?php
// Attempt to get page image
$image = $page->coverImage()->toFile();
?>

<?php if($image): ?>
    <meta name="twitter:image:src" content="<? $image ?>" />
<?php else: ?>
<meta name="twitter:image:src" content="<?php echo url('assets/images/cover1.jpg') ?>" />
<?php endif ?>  

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Website",
    "publisher": "<?= $site->title() ?>",
    "name": "<?php if($page->isHomePage()): ?><?= $site->title() ?><?php else: ?><?= $page->title() ?>s<?php endif ?>",
    "url": "<?php if($page->isHomePage()): ?><?= $site->url() ?>"<?php else: ?><?= $page->url() ?><?php endif ?>,
    <?php $image = $page->coverImage()->toFile(); ?><?php if($image): ?>"image": "<? $image ?><?php else: ?>"image": "<?php echo url('assets/images/cover1.jpg') ?><?php endif ?>",  
    "description": "<?php if($page->description() != ""): ?><?= $page->description()->html() ?><?php else: ?><?= $site->description()->html() ?><?php endif ?>"
}
    </script>

<meta name="generator" content="Kirby 2.5.10" />
<link rel="alternate" type="application/rss+xml" href="<?= url('blog/feed') ?>" title="<?= $site->title() ?>" />