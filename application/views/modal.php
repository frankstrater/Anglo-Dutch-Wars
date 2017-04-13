<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalOCD"><?= $ocd_object['title'] ?></h4>
		</div>
		<div class="modal-body">
			<img src="<?= $ocd_object['url'] ?>" class="img-responsive">
		</div>
		<div class="modal-footer">
			<?= $ocd_object['author'].' '.$ocd_object['year'] ?><br>
			<?= $ocd_object['rights'].' '.$ocd_object['collection'] ?>
		</div>
	</div>
</div>