<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<br/>
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
