<h2><?php echo $title; ?><a class="btn btn-info float-right" href="<?php echo base_url('posts/create'); ?>">Create New</a></h2><br/><br/>

<?php foreach($posts as $post): ?>
	<h4><?php echo $post['title']; ?></h4>
	<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
	<p><?php echo $post['body']; ?>
	<p><a class="btn btn-success" href="<?php echo base_url('posts/'.$post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>