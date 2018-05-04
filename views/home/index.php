<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-primary"><?= $data['title'] ?></h1>
			<div><?=$data['content'] ?></div>
		</div>
		<div class="col-md-12">
			<td><a href="<?= URL ?>/user/edit/<?= $data['content'][$i]['$id'] ?>"> <?php echo 'name'?></a></td>
		</div>
	</div>
</div>