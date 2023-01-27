<?php snippet('header');
$id = 0;
?>

<?php foreach ($page->images()->filterBy('template', 'shape') as $shape) : ?>
    <div class="x">
        <img class="y" src="<?= $shape->url() ?>" alt="">
    </div>
<?php endforeach ?>

<div class="homepage">
    <ul id="home-gallery">
        <?php foreach ($page->images()->filterBy('template', 'images') as $image) : ?>
            <?php $id++ ?>
            <li id="<?= $id ?>">
                <?= $image->resize(600) ?>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<?= js('assets/js/home.js') ?>
</body>

</html>