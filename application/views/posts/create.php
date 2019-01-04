<h2><?php echo $title; ?></h2><br/>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
	</div>
	<label>Category</label>
	<p>
		<select name="category_id" class="form-control">
		<?php foreach($categories as $category): ?>
			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		<?php endforeach; ?>
		</select>
	</p>
	<div class="form-group">
		<label>Upload Image</label><br/>
		<input type="file" name="userfile" size="20">
	</div>
	<p><button type="submit" class="btn btn-success">Submit</button></p>
<?php echo form_close(); ?>