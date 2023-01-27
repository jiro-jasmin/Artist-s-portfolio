<?php
$onNavPage = false;
if ($page->template() == 'peinture' || $page->template() == 'dessin') {
    $pageChildren = $page->parent()->children()->listed();
} else {
    $pageChildren = $page->children()->listed();
    $onNavPage = true;
}
?>

<span class="scroll" id="start"></span>
<ul class="projects-menu">
    <?php foreach ($pageChildren as $project) : ?>
        <li 
        <?php e($project->isOpen() || ($onNavPage && $project->isFirst()), 'class="current-project"'); ?>>
            <a href="<?= $project->url() ?>" aria-label="<?= $project->title() ?>">
                    <?= $project->images()->sortBy('sort')->first()->crop(100) ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
<span class="scroll" id="end"></span>