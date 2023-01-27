<?php $navPages = ['peintures', 'dessins'];
if (in_array($page->template(), $navPages)) {
    $thisPage = $page->children()->first();
} else {
    $thisPage = $page;
}
?>

<div class="project-gallery">
    <ul>
        <?php foreach ($thisPage->images()->sortBy('sort') as $image) : ?>
            <li>
                <figure>
                    <a href="<?= $image->url() ?>" target="_blank" aria-label="open the image in a new tab">
                        <img src="<?= $image->resize(800, 800)->url() ?>" alt=" <?= $image->alt() ?>" <?php e($image->title()->isNotEmpty(), 'title="' . $image->title() . '"'); ?>>
                    </a>
                </figure>
            </li>
        <?php endforeach ?>
    </ul>

</div>

<dl class="project-info" <?php if (in_array($page->template(), $navPages)) : ?> style="margin-bottom: 50px;" <?php endif ?>>
    <dt><em><?= $thisPage->title() ?></em></dt>,
    <?php if ($thisPage->height()->isNotEmpty() && $thisPage->width()->isNotEmpty()) : ?>
        <dd><?= $thisPage->height() ?> x
            <?= $thisPage->width() ?></dd>
        <?php if ($thisPage->depththreed()->isNotEmpty()) : ?>
            x <?= $thisPage->depththreed() ?></dd><?php endif ?> cm<?php endif ?>,

        <?php if ($thisPage->medium()->isNotEmpty()) : ?>
            <dd><?= $thisPage->medium() ?></dd><?= ($thisPage->year()->isEmpty() || $thisPage->location()->isEmpty()) ? "." : ", " ?>
        <?php endif ?>

        <?php if ($thisPage->year()->isNotEmpty()) : ?>
            <dd><?= $thisPage->year() ?></dd><?= ($thisPage->location()->isEmpty()) ? "." : ", " ?>
        <?php endif ?>

        <?php if ($thisPage->location()->isNotEmpty()) : ?>
            <dd><?= $thisPage->location() ?></dd>.
        <?php endif ?>
        <br>
        <?php if ($thisPage->link()->isNotEmpty()) : ?>
            <dd><a href="<?= $thisPage->link() ?>"><?= ($thisPage->linktext()->isNotEmpty()) ? $thisPage->linktext() : "Lien associé" ?></a></dd>
        <?php endif ?>

        <?php if ($thisPage->description()->isNotEmpty()) : ?>
            <article><?= kt($thisPage->description()) ?></article>
        <?php endif ?>
</dl>


<div class="pagination">

    <?php if ($thisPage->hasPrev()) : ?>
        <a href="<?= $thisPage->prev()->url() ?>" aria-label="previous page">＜</a>
    <?php else : ?>
        <span class="inactive">＜</span>
    <?php endif ?>
    <?php if ($thisPage->hasNext()) : ?>
        <a href="<?= $thisPage->next()->url() ?>" aria-label="next page">＞</a>
    <?php else : ?>
        <span class="inactive">＞</span>
    <?php endif ?>

</div>