<?php snippet('header') ?>

<main class="pt-5 pb-5 mt-5">
    
    <header class="note-header container-mini">
      <?php $theorg = page('orgs')->children()->find($page->org()) ?>
      <p class="bold">
        <?= snippet('authors', array('note'=>$page)) ?>
      </p>

      <h1>
        <?= $page->title() ?>
      </h1>
      <h2>
        <?php if ($theorg != '') : ?>
            – <span class="company"><?= $theorg->title() ?></span>
        <?php endif ?>
      </h2>
    </header>

    <div class="container-max mt-5">
      <?php if ($page->cover() != '') : ?>
        <img class="img-fluid pb-5" src="<?= $page->cover()->toFile()->url() ?>">
      <?php endif ?>
    
      <!-- encart orga --> 
      <?php if ($theorg != '') : ?>
        <div class="row mt-5 mb-5">
          <div class="col-sm-3 text-right">
            <?php $logo = $theorg->logo()->toFile() ?>
            <?php if ($logo != '') : ?>
              <?php $logotiny = $logo->crop(80) ?>
              <a href="<?= $theorg->theurl() ?>" target="_blank">
                <img class="img-fluid" src="<?= $logotiny->url() ?>" alt="<?= $page->title() ?> logo">
              </a>
            <?php endif ?>
            <div class="tiny text-right pt-2">
              <?php if ($theorg->location() != '') : ?>
                Où ? <?= $theorg->location() ?><br>
              <?php endif ?>      
              <?php if ($theorg->employees() != '') : ?>
                <?= $theorg->employees() ?> Employés<br>
              <?php endif ?>
              <?php if ($theorg->creation() != '') : ?>
                Date de création : <?= $theorg->creation() ?>
              <?php endif ?>
            </div>
          </div>
          <div class="col-sm-9">
            <b><?= $theorg->baseline()->kt() ?></b>
            <?= $theorg->text()->kt() ?>
          </div>
        </div>
      <?php endif ?><!-- fin encart orga --> 

      <blockquote class="mt-5 text-center">
        <?php if ($page->baseline() != '') :?>
          <h2 class="quote">"<?= $page->baseline() ?>"</h2>
        <?php endif ?>
        <?php if ($page->quotede() != '') : ?>
          <div class="text-center">
            <p class="bold">— <?= $page->quotede() ?></p>
          </div>
        <?php endif ?>
      </blockquote>

    </div>
    

    <article class="container-mini">

    <div class="note-text text">
      <?= $page->text()->kt() ?>
    </div>

    <?php if ($page->sources() != '') : ?>
      <hr>

      <div class="sources">
        <h4>Sources</h4>

        <ol>
          <?php foreach ($page->sources()->toStructure() as $source) : ?>
            <a href="<?= $source->sourcelink() ?>" target="_blank">
              <li class="source"><?= $source->sourcetitle() ?> <i class="ml-1 fas fa-link"></i></li>
            </a>
          <?php endforeach ?>
        </ol>
      </div>

    <?php endif ?>

  </article>
</main>


<?php snippet('footer') ?>
