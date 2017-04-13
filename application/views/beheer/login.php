<div class="well well-large">
	<?php
		$attributes = array('class' => 'form-horizontal');
		echo form_open('beheer/home', $attributes);
	?>
		<fieldset>
			<legend>Login</legend>
			<div class="control-group">
				<label class="control-label" for="username">Username</label>
				<div class="controls">
					<input type="text" id="username" name="username" placeholder="username" required="required">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password">Password</label>
				<div class="controls">
					<input type="password" id="password" name="password" placeholder="password" required="required">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Login</button>
				</div>
			</div>
		</fieldset>
	<?php
		echo form_close();
	?>
	<?php echo validation_errors(); ?>
</div>