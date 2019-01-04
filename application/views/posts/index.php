<h2><?php echo $title; ?><a class="btn btn-info float-right" href="<?php echo base_url('posts/create'); ?>">Create New</a></h2><br/><br/>

<?php foreach($posts as $post): ?>
	<div class="row">
		<div class="col-md-3">
			<img width="100%" height="100%" src="<?php echo base_url('assets/images/posts/') . $post['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<h4><?php echo $post['title']; ?></h4>
			<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small>
			<p><?php echo word_limiter($post['body'], 60); ?>
			<p><a class="btn btn-success" href="<?php echo base_url('posts/'.$post['slug']); ?>">Read More</a></p>
		</div>
	</div>
	<br/><br/>
<?php endforeach; ?>