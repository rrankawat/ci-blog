<h2><?php echo $title; ?></h2><br/>

<?php echo validation_errors(); ?>

<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter username">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter password">
			</div>
			<button type="submit" class="btn btn-success">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>