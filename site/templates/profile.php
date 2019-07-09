<?php snippet('header') ?>

<?php $param = param('id') ?>
<?php $theuser = $kirby->user($param) ?>


<div class="row text-center white border-bottom p-5">
	<div class="col-md-12 text-center">
		<h2>Les contributeurs</h2>
	</div>
</div>

<main class="">
	<div class="row">
		<div class="col-sm-6 p-5 panel-left text-center white border-right">
			<?php foreach ($kirby->users() as $aut) : ?>
				<h4>
					<a href="<?= $site->url() .'/profile/id:'.$aut ?>">
						<?= $aut->name() ?>
					</a>
				</h4>
			<?php endforeach ?>
		</div>
		<div class="col-sm-6 p-5">

			<?php if ($theuser != '') : ?>
				<div class="text-center">
					<a href="<?= $theuser->compurl() ?>" target="_blank">
						<span class="bold"><?= $theuser->company() ?></span>
					</a>

					<h3><?= $theuser->name() ?></h3>
				</div>

				<?php if ($theuser->avatar() != '') : ?>
					<img class="img-fluid mt-5" src="<?= $theuser->avatar()->url() ?>">
				<?php endif ?>

				<article class="mt-5">
					<?= $theuser->bio()->kt() ?>
				</article>

				<?php $themail = $theuser->email() ?>
				<?php $notes = page('notes')->children()->listed()->filterBy('author','*=', $themail) ?>

				<?php if ($notes != '') : ?>
					<div class="mt-5 mb-3">
						<h4>Publications</h4>
					</div>
					<div class="row pt-3">
						<?php foreach ($notes as $note) : ?>
							<?= snippet('note-sm', array('note' => $note)) ?>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			<?php endif ?>
		</div>
	</div>
</main>



<?php snippet('footer') ?>