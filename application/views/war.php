<h2 class="text-center">The <?= $war['name'] ?> Anglo-Dutch War</h2>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?= $war['description'] ?>
		<div class="text-center">
			<a class="btn btn-primary" href="<?= site_url('battle/view/'.$war['battle_first_id']) ?>">Start war</a>
		</div>
	<div>
</div>
