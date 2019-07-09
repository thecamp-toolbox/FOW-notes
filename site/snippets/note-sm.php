<div class="col-sm-9 col-md-7 note-card mb-2">
	<h2>
		<a href="<?= $note->url() ?>">
		    <?php $theorg = page('orgs')->find($note->org()) ?>
		    <b><?= $note->title() ?></b>
		    <?php if ($theorg != '') : ?>
                <br>– <span class="company"><?= $theorg->title() ?></span>
            <?php endif ?> 
		</a>
	</h2>
</div>