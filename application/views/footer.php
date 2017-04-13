	<!--
	<audio id="audioplayer" autoplay>
	  <source src="<?= base_url() ?>assets/audio/engelsche_fortuyn.mp3" type="audio/mpeg">
	</audio>
	-->

		</div>

	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {

			$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal');
			});

			$('#ocd-object img').click(function() {
				$('.panel-left, .panel-right').fadeToggle();
			});

		});

	</script>

</body>
</html>