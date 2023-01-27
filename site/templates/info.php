<?php snippet('header') ?>
<main>
    <aside>

        <?= $page->image() ?>

    </aside>
    <div class="content">
        <?php if ($page->title1()->isNotEmpty()) : ?>
            <h2><?= $page->title1() ?></h2>
        <?php endif ?>

        <?php if ($page->text()->isNotEmpty()) : ?>
            <?= kt($page->text()) ?>
        <?php endif ?>

        <?php if ($page->title2()->isNotEmpty()) : ?>
            <h3><?= $page->title2() ?></h3>
        <?php endif ?>

        <?php if ($page->asidetext()->isNotEmpty()) : ?>
            <?= kt($page->asidetext()) ?>
        <?php endif ?>

        <?php if ($p = page('mentions-legales')): ?>
            <a href="<?= $p->url() ?>" aria-label="legal-mentions"><?= $p->title() ?></a>
        <?php endif ?>
    </div>
</body>

</html>