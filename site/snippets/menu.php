<nav id="menu">
    <ul>
        <?php foreach ($site->children()->listed() as $item) : ?>
            <li <?php e($item->isOpen(), 'aria-current ') ?>>
                <a href="<?= $item->url() ?>">
                    <?= $item->title() ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>

<nav id="languages">
  <ul>
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a class="navLink" href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->code()) ?>
      </a>
    </li>
  <?php endforeach ?>
  </ul>
</nav>