<?= $this->extend('templates/app') ?>
<?= $this->section('page_title') ?>
Viewing <?= esc($news['title']) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
	<div class="card-body">
		<h5 class="card-title">
			<?= esc($news['title']) ?>
		</h5>
		<div class="card-body">
			<p class="card-text">
				<?= esc($news['body']) ?>
			</p>
		</div>
	</div>
</div>

<?= $this->endSection() ?>