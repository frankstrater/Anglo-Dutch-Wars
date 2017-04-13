
<h2 class="text-center"><?= $battle['name'] ?>, <?= $battle['year'] ?></h2>

<div class="panel-container">

<div id="map"></div>

<script>
	var map = L.mapbox.map('map', 'aj.Sketchy2', { zoomControl: false })
	.setView([<?= $battle['lat'] ?>, <?= $battle['lng'] ?>], 6);

	var featureLayer = L.mapbox.featureLayer()
	.loadURL('<?= site_url() ?>battle/geojson/<?= $battle['war'] ?>/<?= $battle['id'] ?>')
	.addTo(map);

	map.featureLayer.on('click', function(e) {
		map.panTo(e.layer.getLatLng());
	});
</script>

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

	</div>
</div>

<br>

<div class="text-center">
	<?php
		$attributes = array('class' => 'form-inline', 'role' => 'form');
		echo form_open('battle/view/'.$battle['id'], $attributes);
	?>
		<div class="radio">
			<label>
				<input type="radio" name="winner" id="optionsRadios1" value="english">
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

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>Background</h3>
		<?= $battle['background'] ?>
	<div>
</div>
