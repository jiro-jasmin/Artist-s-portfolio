<!DOCTYPE html>
<html lang="<?= $kirby->language() ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php snippet('meta_information'); ?>
    <?php snippet('robots'); ?>

    <?= css('assets/css/default.css') ?>
    
    <?php //  Load the same css file for the following pages
    $projectsPages = ['peintures', 'peinture', 'dessins', 'dessin', 'expositions', 'exposition'];
    if (in_array($page->template(), $projectsPages)) : ?>
        <?= css('assets/css/templates/projects.css') ?>
    <?php endif ?>
    <?= css('@auto') ?>

    <title><?= ($page->template() == 'home') ? $site->title() : $site->title() . " | " . $page->title() ?></title>
    <meta name="google-site-verification" content="HiCjgGBPQfmBSzjBm4lITeOsSSFAYyn_pmYX_gXPgzw" />
</head>

<body>

    <header>
        <div id="titleContainer">
            <a id="siteTitle" href="<?= $site->url() ?>" aria-label="homepage">
                Fabiola Amaudric<br>du Chaffaut
            </a>
        </div>

        <?php snippet('menu') ?>
    </header>