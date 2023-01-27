<?php snippet('header');
$idTitle = 0;
$idImg = 0; ?>

<main>
    <aside>

        <ul class="projects-menu">
            <?php foreach ($page->children()->listed() as $exposition) : ?>
                <?php $idTitle++ ?>
                <li class="exhib-title" id="<?= $idTitle ?>">
                    <a href="<?= $exposition->url() ?>"><?= $exposition->title() ?> (<?= $exposition->year() ?>)<br>
                        <?php if ($exposition->exhibtype()->isNotEmpty()) : ?>
                            <?php if ($exposition->exhibtype() == "solo") : ?>
                                <small><?= t('solo') ?></small>
                            <?php else : ?>
                                <small><?= t('collective') ?></small>
                            <?php endif ?>
                        <?php endif ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </aside>

    <div class="content">
        <section class="default">
            <img src="<?= $pages->images()->filterBy('template', 'shape') ?>" alt="">
        </section>
        <?php foreach ($page->children()->listed() as $exposition) : ?>
            <?php $idImg++ ?>
            <img class="exhib-img" id="<?= $idImg ?>" src="<?= $exposition->image()->resize(800, 800)->url() ?>" alt="<?= $exposition->image()->alt() ?>">
        <?php endforeach ?>

    </div>
</main>

<?= js('assets/js/exhib.js') ?>
</body>

</html>