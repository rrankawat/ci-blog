<h2><?php echo $title; ?>
<?php if($this->session->userdata('logged_in')): ?>
	<a class="btn btn-info float-right" href="<?php echo base_url('categories/create'); ?>">Create New</a>
<?php endif; ?>
</h2>

<br/><br/>

<ul class="list-group">
	<?php foreach($categories as $category): ?>
		<li class="list-group-item"><a href="<?php echo base_url('categories/posts/' . $category['id']); ?>"><?php echo $category['name']; ?></a></li>
	<?php endforeach; ?>
</ul>