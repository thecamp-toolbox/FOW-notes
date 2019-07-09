<?php $authors = $note->author()->toUsers() ?>
<?php $count = $authors->count() ?>
<?php foreach ($authors as $aut) : ?>
  <a href="<?= $site->url().'/profile/id:'.$aut ?>">
    <?= $aut->name() ?>
  </a>
  <?php e($count>1,'et ') ?>
  <?php $count-- ?>
<?php endforeach ?>