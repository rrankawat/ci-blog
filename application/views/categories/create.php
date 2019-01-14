<h2><?php echo $title; ?></h2><br/>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" placeholder="Enter name">
	</div>
	<p><button type="submit" class="btn btn-success">Submit</button></p>
<?php echo form_close(); ?>