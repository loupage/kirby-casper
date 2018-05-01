<nav class="site-nav">
<?php $image = $site->siteLogo()->toFile();?>
    <div class="site-nav-left">
    <?php if($page->isHomePage()): ?>
      
    <ul class="nav" role="menu">
            <?php foreach($pages->visible() as $item): ?>
                <li class="">
                <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                </li>
        <?php endforeach ?>
        </ul>
        <?php else: ?>
        <?php if($image): ?>
        <a class="site-nav-logo" href="<?= $site->url() ?>"><img src="<?= $image->url() ?>" alt="<?php $site->title() ?>" /></a>
        <?php endif ?>
        <ul class="nav" role="menu">
            <?php foreach($pages->visible() as $item): ?>
                <li class="">
                <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                </li>
        <?php endforeach ?>
        </ul>
    <?php endif ?>    
    </div>
    <div class="site-nav-right">
        <div class="social-links">
          
        </div>
        
    </div>
</nav>
