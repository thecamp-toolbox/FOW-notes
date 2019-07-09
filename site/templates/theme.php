<?php snippet('header') ?>

<main class="pb-5">

  <header class="intro <?= $page->uid() ?>">
    <div class="w-100 pt-3 pb-5 text-center">
      <img id="fow" src="<?= $site->url() ?>/assets/vector/FSOW_THECAMP.svg">
    </div>
    <div class="container-mini pt-5 pb-5">
      <h1><?= $page->title() ?></h1>
      <h5><?= $page->baseline() ?></h5>
      <p><?= $page->text()->kt() ?></p>
    </div>
    <div class="text-center w-100 pt-5">
      <a href="#content">
        <img id="arrow" src="<?= $site->url() ?>/assets/vector/ARROW_DOWN.svg">
      </a>
    </div>
  </header>

  <div id="content" class="mt-5 pl-3 pr-3 row">
    <?php foreach(page('notes')->children()->filterBy('theme','*=',$page) as $note) : ?>
      <?= snippet('note', array('note'=>$note)) ?>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
