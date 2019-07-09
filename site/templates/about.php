<?php snippet('header') ?>

<main class="pb-5">

  <div class="container-mini mt-10">
    <div class="text">
      <h1><?= $page->title() ?></h1>
      <div class="pt-3">
        <?= $page->text()->kt() ?>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
