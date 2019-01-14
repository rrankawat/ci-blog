<p><a class="btn btn-secondary" href="<?php echo base_url('posts'); ?>">Back</a></p>
<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<br/>
<p><img src="<?php echo base_url('assets/images/posts/') . $post['post_image']; ?>"></p>
<div class="post-body">
	<p><?php echo $post['body']; ?></p>
</div>

<hr>

<div class="row">
	<div class="col-md-11">
		<a class="btn btn-success pull-left" href="<?php echo base_url('posts/edit/'.$post['slug']); ?>">Edit</a>
	</div>
	<div class="col-md-1">
		<?php echo form_open('posts/delete/'.$post['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger">
		<?php echo form_close(); ?>
	</div>
</div>

<hr />

<h4>Comments</h4><br/>
<?php if(isset($comments)): ?>
	<?php foreach($comments as $comment): ?>
		<div class="breadcrumb">
			<?php echo $comment['body']; ?> by &nbsp; <strong><?php echo $comment['name']; ?></strong>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<p>No comments to display!</p>
<?php endif; ?>

<hr />

<h4>Add Comment</h4><br/>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button type="submit" class="btn btn-success">Submit</button>
<?php echo form_close(); ?>

<br/>