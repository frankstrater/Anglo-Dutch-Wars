
<h2 class="text-center"><?= $battle['name'] ?>, <?= $battle['year'] ?></h2>

<div class="panel-container">

<div id="ocd-object" class="text-center">
	<p><img src="<?= $ocd_object['url'] ?>" alt="<?= $ocd_object['title'] ?>" class="img-responsive"></p>
	<p>
		<?= $ocd_object['title'] ?> &mdash; <?= $ocd_object['author'] ?>, <?= $ocd_object['year'] ?> &mdash; <?= $ocd_object['rights'] ?> <?= $ocd_object['collection'] ?>
	</p>
</div>

<div class="panel panel-default panel-left">
	<div class="panel-body">

		<h5>Commonwealth of England</h5>

		<?php
			foreach($battle_commanders as $item) {
				if ($item['side'] == 'english') {

					$modal_url = '#';

					if ($item['ocd_id'] != '') {
						$modal_url = site_url().'modal/ocdobject/'.$item['ocd_source'].'~'.$item['ocd_id'];
					}

					if (intval($item['x_id']) > 0) {
						$modal_url = site_url().'modal/ocdxobject/'.$item['x_id'];
					}

		?>
		<div class="media">
			<a class="pull-left" href="<?= $modal_url ?>"<?= ($modal_url != '#') ? ' data-toggle="modal" data-target="#modalOCD"' : '' ?>>
				<img class="media-object" src="<?= base_url() ?>assets/img/<?= $item['avatar'] ?>" alt="<?= $item['name'] ?>">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><?= $item['name'] ?></h4>
				<p>
					<?= $item['command'] ?><br>
					<?= $item['ships'] ?> ships
				</p>
			</div>
		</div>

		<?php
				}
			}
		?>
		<?php
			if ($battle['winner'] == 'english') {
				echo '<div class="alert alert-success">Winner</div>'.PHP_EOL;
				echo $battle['result'];
			}
		?>

	</div>
</div>

<div class="panel panel-default panel-right">
	<div class="panel-body">

	<h5>United Provinces of the Netherlands</h5>

	<?php
		foreach($battle_commanders as $item) {

			if ($item['side'] == 'dutch') {

				$modal_url = '#';

				if ($item['ocd_id'] != '') {
					$modal_url = site_url().'modal/ocdobject/'.$item['ocd_source'].'~'.$item['ocd_id'];
				}
				
				if (intval($item['x_id']) > 0) {
					$modal_url = site_url().'modal/ocdxobject/'.$item['x_id'];
				}

				$modal_death_url = '';

				if ($item['death_battle_id'] ==  $battle['id'] && $item['death_ocd_id'] != '') {
					$modal_death_url = site_url().'modal/ocdobject/'.$item['death_ocd_source'].'~'.$item['death_ocd_id'];
				}

	?>
	<div class="media">
		<a class="pull-left" href="<?= $modal_url ?>" data-toggle="modal" data-target="#modalOCD">
			<img class="media-object" src="<?= base_url() ?>assets/img/<?= $item['avatar'] ?>" alt="<?= $item['name'] ?>">
		</a>
		<div class="media-body">
			<h4 class="media-heading">
				<?= $item['name'] ?><?php if ($modal_death_url != '') { ?>&nbsp;<a href="<?= $modal_death_url ?>" data-toggle="modal" data-target="#modalOCD">&#10013;</a><?php } ?>
			</h4>
			<p>
				<?= $item['command'] ?><br>
				<?= $item['ships'] ?> ships
			</p>
		</div>
	</div>

	<?php
			}
		}
	?>

	<?php
		if ($battle['winner'] == 'dutch') {
			echo '<div class="alert alert-success">Winner</div>'.PHP_EOL;
			echo $battle['result'];
		}
	?>

	</div>
</div>

</div>

<?php

	echo '<ul class="pager">'.PHP_EOL;

	if ($battle['prev_battle_id'] != 0) {
		echo '<li class="previous"><a href="'.site_url('battle/view/'.$battle['prev_battle_id']).'">&larr; Previous battle</a></li>'.PHP_EOL;
	}

	if ($battle['next_battle_id'] != 0) {
		echo '<li class="next"><a href="'.site_url('battle/view/'.$battle['next_battle_id']).'">Next battle &rarr;</a></li>'.PHP_EOL;
	}

	echo '</ul>'.PHP_EOL;

?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>Background</h3>
		<?= $battle['background'] ?>
		<h3>Battle</h3>
		<?= $battle['battle'] ?>
		<h3>Aftermath</h3>
		<?= $battle['aftermath'] ?>
	<div>
</div>

