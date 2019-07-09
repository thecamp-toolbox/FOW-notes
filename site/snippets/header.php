<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link rel="icon" href="<?= $site->url() ?>/assets/images/favicon.ico" />

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <?= css(['assets/css/index.css', '@auto']) ?>

</head>
<body>

  <!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>

  <!-- Overlay content / menu -->
  <div class="overlay-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 p-3">
          <?php foreach (page('themes')->children()->listed() as $theme): ?>
            <h4><a href="<?= $theme->url() ?>"><?= $theme->title() ?></a></h4>
          <?php endforeach ?>
        </div>
        <div class="col-sm-6 p-5 text-right">
          <?php foreach ($site->pages()->listed() as $item) : ?>
            <h4><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h4>
          <?php endforeach ?>
        </div>
      </div><!-- end row --> 


      <!-- Bannière bas menu-->
      <div class="row socials text-left">
        <div class="col-md-4 col-sm-12 p-3">
          <h4>
            <a href="http://thecamp.fr">
              <img class="galet-white" src="<?= $site->url() ?>/assets/vector/GALET_BURGER.svg">
             - Découvrir thecamp
           </a>
         </h4>
        </div>
        <!-- Réseaux sociaux -->
        <div class="col-md-2 col-sm-3 p-3">
          <a href="http://twitter.com/thecampProvence" target="_blank">
            <i class="fab fa-twitter"></i>
            thecampProvence
          </a>
        </div>
        <div class="col-md-2 col-sm-3 p-3">
          <a href="http://facebook.com/thecampprovence" target="_blank">
            <i class="fab fa-facebook"></i>
            thecampprovence
          </a>
        </div>
        <div class="col-md-2 col-sm-3 p-3">
          <a href="http://instagram.com/thecamp_provence" target="_blank">
            <i class="fab fa-instagram"></i>
            thecamp_provence
          </a>
        </div>
        <div class="col-md-2 col-sm-3 p-3">
          <a href="https://www.linkedin.com/company/thecamp/" target="_blank">
            <i class="fab fa-linkedin"></i>
            company/thecamp
          </a>
        </div>

      </div><!-- end row --> 
    </div>

  </div>

</div>

<!-- Home button galet fixed --> 
<div id="home-btn">
  <a href="<?= $site->url() ?>">
    <img src="<?= $site->url() ?>/assets/vector/galet.svg">
  </a>
</div>

<!-- Link thecamp absolute --> 
<div id="thecamp">
  <a href="http://thecamp.fr" target="_blank">
    <img src="<?= $site->url() ?>/assets/vector/thecamp.svg">
  </a>
</div>

<!-- La nav fixée en bas du site -->
<nav class="navbar fixed-bottom navbar-light bg-light">
  <ul class="navbar-nav nav-left">
    <!-- menu du site -->
    <li class="nav-item control align-middle">
      <a class="navbar-brand" href="#" onclick="openNav()">
        <img src="<?= $site->url() ?>/assets/vector/BURGER.svg">
      </a>
    </li>

    <!-- nav for notes -->
      <?php if ($page->template() == 'note') : ?>
        <?php if ($page->hasPrevListed()): ?>
          <li class="nav-item control">
            <a class="nav-link" href="<?= $page->prevListed()->url() ?>">
                <img src="<?= $site->url() ?>/assets/vector/ARROW_LEFT.svg">
            </a>
          </li>
        <?php endif ?>
        <?php if ($page->hasNextListed()) : ?>
          <li class="nav-item control">
            <a class="nav-link" href="<?= $page->nextListed()->url() ?>">
                <img src="<?= $site->url() ?>/assets/vector/ARROW_RIGHT.svg">
            </a>
          </li>
        <?php endif ?>
      <?php endif ?>
  </ul>

  <ul class="navbar-nav nav-right">
    <?php foreach (page('themes')->children()->listed() as $theme): ?>
      <?php if ($page->url() == $theme->url()) : ?>
        <?php $selected = 'active' ?>
      <?php endif ?>
      <li class="nav-item <?= $selected ?> d-none d-sm-block">
        <a class="nav-link" href="<?= $theme->url() ?>">
            <?= $theme->title() ?>
        </a>
      </li>
      <?php $selected = '' ?>
    <?php endforeach ?>
  </ul>
</nav>

  <div class="container-fluid pb-5">

