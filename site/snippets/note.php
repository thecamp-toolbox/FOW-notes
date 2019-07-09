 <div class="col-md-4 col-sm-6 col-lg-3 p-5 mb-3 note-card">
    <div class="note-content">
        <a href="<?= $note->url() ?>">
        	<?php $theorg = page('orgs')->find($note->org()) ?>

            <div class="card-img-cover">
            	<?php if ($note->cover() != '') : ?>
            		<div class="hide-over">
                        <!-- basleine était là -->    
            		</div>
                    <?php if ($note->cover() != '') : ?>
                        <?php $thumb = $note->cover()->toFile()->thumb($options = [
                          'autoOrient' => true,
                          'crop'       => false,
                          'blur'       => false,
                          'grayscale'  => false,
                          'height'     => null,
                          'quality'    => 100,
                          'width'      => 350,
                        ]); ?>
            		  <img class="note-cover img-fluid pb-3" src="<?= $thumb->url() ?>">
                    <?php endif ?> 
        	   <?php endif ?>
            </div>
        </a>
        <div class="note-card-meta">
            <a href="<?= $note->url() ?>">
        	    <h2>
                    <?= $note->title() ?>
                    <?php if ($theorg != '') : ?>
                        <br>– <span class="company"><?= $theorg->title() ?></span>
                    <?php endif ?>        
                </h2>
            </a>

    	    <p class="bold">
    	    	<?= snippet('authors', array('note'=>$note)) ?>
    	    </p>
        </div>
        
    </div>
</div>