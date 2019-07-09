<?php snippet('header') ?>

<main>
  <header class="text-center p-5">
    <h1><?= $page->title() ?></h1>
  </header>

  <div class="row">
    <?php foreach ($page->children()->listed() as $org): ?>
    <article class="col-md-3 mb-3">
      <div class="media">
        <?php $logo = $org->logo()->toFile() ?>
        <?php if ($logo != '') : ?>
          <?php $logotiny = $logo->crop(64) ?>
          <img class="mr-3" src="<?= $logotiny->url() ?>" alt="<?= $org->title() ?> logo">
        <?php endif ?>
        <div class="media-body">
          <a href="<?= $org->url() ?>">
            <h5 class="mt-0 mb-0"><?= $org->title() ?></h5>
          </a>
          <?= $org->baseline() ?>
        </div>
      </div>
    </article>
    <?php endforeach ?>
  </div>

</main>

<?php snippet('footer') ?>
