<?php snippet('header') ?>

<main>

    <div class="content">


        <ul>
            <?php foreach ($page->images()->sortBy('sort') as $image) : ?>
                <li>
                    <figure>
                        <a href="<?= $image->url() ?>" target="_blank" aria-label="open the image in a new tab">
                            <img src="<?= $image->resize(800, 800)->url() ?>" alt=" <?= $image->alt() ?>">
                        </a>
                        <?php if ($image->legend()->isNotEmpty()) : ?>
                            <figcaption><?= kt($image->legend()) ?></figcaption>
                        <?php endif ?>
                    </figure>
                </li>

            <?php endforeach ?>
        </ul>
    </div>

    <aside>
        <h1><?= $page->title() ?></h1>

        <div class="exhib-text">

            <?php if ($page->exhibtype()->isNotEmpty()) : ?>
                <?php if ($page->exhibtype() == "solo") : ?>
                    <h3><?= t('solo') ?></h3>
                <?php else : ?>
                    <h3><?= t('collective') ?></h3>
                <?php endif ?>
            <?php endif ?>

            <h5>
                <?php if ($page->location()->isNotEmpty()) : ?>
                    <?= $page->location() ?>,
                <?php endif ?>

                <?php if ($page->month()->isNotEmpty()) : ?>
                    <?= $page->month() ?>
                <?php endif ?>

                <?php if ($page->year()->isNotEmpty()) : ?>
                    <?= $page->year() ?>
                <?php endif ?>
            </h5>


            <?php if ($page->excerpt()->isNotEmpty()) : ?>
                <div class="excerpt"><?= kt($page->excerpt()) ?></div>
            <?php endif ?>

            <?php if ($page->maintext()->isNotEmpty()) : ?>
                <div class="main-text"><?= kt($page->maintext()) ?></div>
            <?php endif ?>

            <?php if ($page->title2()->isNotEmpty()) : ?>
                <h2><?= $page->title2() ?></h2>
            <?php endif ?>

            <?php if ($page->asidetext()->isNotEmpty()) : ?>
                <?= kt($page->asidetext()) ?>
            <?php endif ?>


        </div>


    </aside>

    <footer>
        <div class="pagination">
            <?php if ($page->hasPrev()) : ?>
                <a href="<?= $page->prev()->url() ?>" aria-label="previous page">＜</a>
            <?php else : ?>
                <span class="inactive">＜</span>
            <?php endif ?>
            <?php if ($page->hasNext()) : ?>
                <a href="<?= $page->next()->url() ?>" aria-label="next page">＞</a>
            <?php else : ?>
                <span class="inactive">＞</span>
            <?php endif ?>
        </div>

        <ul class="exhib-menu">
            <?php foreach ($page->parent()->children()->listed() as $exposition) : ?>
                <li <?php e($exposition->isOpen(), 'class="current"'); ?>>
                    <a href="<?= $exposition->url() ?>"><?= $exposition->title() ?> (<?= $exposition->year() ?>)</a>
                </li>
            <?php endforeach ?>

        </ul>
    </footer>
</main>



</body>

</html>