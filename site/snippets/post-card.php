<?php foreach($page->children()->visible()->flip() as $article): ?>

<?php $image = $article->coverImage()->toFile(); ?>

 <article class="post-card home-template" >  
    <a class="post-card-image-link" href="<?= $article->url() ?>">
        <div class="post-card-image" <?php if($image): ?>
style="background: url(<?php if($image) {echo $image->url(); } ?>)<?php endif ?>"></div></a>
    <div class="post-card-content">
        <a class="post-card-content-link" href="<a href="<?= $article->url() ?>">
        <header class="post-card-header">
            <h2 class="post-card-title"><?= $article->title()->html() ?></h2>
        </header>
        <section class="post-card-excerpt">
            <p><?= $article->text()->excerpt(150) ?></p>
        </section>
        </a>
        <footer class="post-card-meta">
                
            </footer>
        </div>
    </article>
<?php endforeach ?>