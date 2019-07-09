<?php snippet('header') ?>

<main class="mb-3">
  <header class="intro hp">
  	<div class="w-100 pt-3 pb-5 text-center">
  		<img id="fow" src="<?= $site->url() ?>/assets/vector/FSOW_THECAMP.svg">
  	</div>
    <div class="container-mini pt-10 pb-5">
    	<h1><?= $site->title() ?></h1>
    	<h5><?= $page->baseline() ?></h5>
	    <p><?= $page->text()->kt() ?></p>
    	<a class="btn" href="/about">En savoir +</a>
    </div>
    <div class="text-center w-100 pt-5">
    	<a href="/#content">
    		<img id="arrow" src="<?= $site->url() ?>/assets/vector/ARROW_DOWN.svg">
    	</a>
    </div>
  </header>

  <div id="content" class="notes mt-5 pl-3 pr-3 row">
    <?php foreach (page('notes')->children()->listed()->sortBy('date', 'desc') as $note): ?>
      <?php snippet('note', array('note'=>$note)) ?>
    <?php endforeach ?>
  </div>


</main>

<?php snippet('footer') ?>
