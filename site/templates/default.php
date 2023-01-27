<?php snippet('header') ?>
<main>

    <div class="content">
        <h1><?= $page->title() ?></h1>

        <?php if ($page->text()->isNotEmpty()) : ?>
            <?= kirbytext($page->text()) ?>
        <?php endif ?>

        <?php if ($page->redirectiontext()->isNotEmpty()) : ?>
            <div class="homelinkdiv">
            <a href="<?= $site->url() ?>" class="homelink" aria-label="homepage"><?= $page->redirectiontext()?></a>
            </div>
        <?php endif ?>

    </div>

    <aside class="default">
        <img src="<?= $pages->images()->filterBy('template', 'shape') ?>" alt="">
    </aside>
</main>
<?= js('assets/js/app.js') ?>
</body>

</html>