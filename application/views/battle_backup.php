
<br>

<h2 class="text-center"><?= $battle['name'] ?>, <?= $battle['year'] ?></h2>

<div class="row">

	<div class="col-md-3">

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
			if ($show_result == true) {
				if ($battle['winner'] == 'english') {
					echo '<div class="alert alert-success">Winner</div>'.PHP_EOL;
					echo $battle['result'];
				} else { 
					echo '<div class="alert alert-danger">Defeated</div>'.PHP_EOL;
				}
			}
		?>
	</div>

	<div class="col-md-6">

		<?php
			if ($show_result == false) {
		?>
		<div id="map"></div>

		<script>
			var map = L.mapbox.map('map', 'aj.Sketchy2')
			.setView([<?= $battle['lat'] ?>, <?= $battle['lng'] ?>], <?= $battle['zoom'] ?>);

			var featureLayer = L.mapbox.featureLayer()
			.loadURL('<?= site_url() ?>battle/geojson/<?= $battle['war'] ?>/<?= $battle['id'] ?>')
			.addTo(map);

			map.featureLayer.on('click', function(e) {
				map.panTo(e.layer.getLatLng());
			});
		</script>
		<?php
			}
		?>

		<?php
			if ($show_result == true) {
				echo '<div id="ocd-object" class="text-center">'.PHP_EOL;
				echo '<p><img src="'.$ocd_object['url'].'" alt="'.$ocd_object['title'].'" class="img-responsive"></p>';
				echo '<p>';
				echo $ocd_object['title'].'<br>'.PHP_EOL;
				echo $ocd_object['author'].', '.$ocd_object['year'].'<br>'.PHP_EOL;
				echo $ocd_object['rights'].' '.$ocd_object['collection'].'<br>'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				echo '</div>'.PHP_EOL;

				echo '<ul class="pager">'.PHP_EOL;

				if ($battle['prev_battle_id'] != 0) {
					echo '<li class="previous"><a href="'.site_url('battle/view/'.$battle['prev_battle_id']).'">&larr; Previous battle</a></li>'.PHP_EOL;
				}

				if ($battle['next_battle_id'] != 0) {
					echo '<li class="next"><a href="'.site_url('battle/view/'.$battle['next_battle_id']).'">Next battle &rarr;</a></li>'.PHP_EOL;
				}

				echo '</ul>'.PHP_EOL;

				echo $battle['description'];
			}
		?>

	</div>

	<div class="col-md-3">

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

		?>
		<div class="media">
			<a class="pull-left" href="<?= $modal_url ?>" data-toggle="modal" data-target="#modalOCD">
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
			if ($show_result == true) {
				if ($battle['winner'] == 'dutch') {
					echo '<div class="alert alert-success">Winner</div>'.PHP_EOL;
					echo $battle['result'];
				} else { 
					echo '<div class="alert alert-danger">Defeated</div>'.PHP_EOL;
				}
			}
		?>
	</div>

</div>

<br>

<?php
	if ($show_result == true) {
?>

<?php
	}
?>

<?php
	if ($show_result == false) {
?>
<div class="text-center">
	<?php
		$attributes = array('class' => 'form-inline', 'role' => 'form');
		echo form_open('battle/view/'.$battle['id'], $attributes);
	?>
		<div class="radio">
			<label>
				<input type="radio" name="winner" id="optionsRadios1" value="english" checked>
				English
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Start Battle</button>
		<div class="radio">
			<label>
				<input type="radio" name="winner" id="optionsRadios2" value="dutch">
				Dutch
			</label>
		</div>
	</form>
</div>
<?php
	}
?>
