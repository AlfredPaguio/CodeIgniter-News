<?= $this->extend('templates/app') ?>
<?= $this->section('page_title') ?>
List of News
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php

use CodeIgniter\I18n\Time;

helper('array');
?>

<?php if (!empty($news) && is_array($news)) : ?>
	<?php
	$updated_at_column = array_column($news, 'updated_at');
	array_multisort($updated_at_column, SORT_DESC, $news);
	?>
	<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-3 align-items-center justify-content-center">
		<h1>Total Number of News: <?= esc(count($news)) ?></h1>
		<a type="button" class="btn btn-primary rounded-5" href="<?= url_to('news_add') ?>"><i class="fa-solid fa-plus"></i> Add News</a>
	</div>

	<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-3 align-items-center justify-content-center">
		<div class="list-group">
			<?php foreach ($news as $news_item) : ?>

				<a href="<?= url_to('news_item', esc($news_item['slug'], 'url')) ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
					<div class="d-flex gap-2 w-100 justify-content-between">
						<div>
							<h6 class="mb-0"><?= esc($news_item['title']) ?></h6>
							<p class="mb-0 opacity-75"><?= esc($news_item['body']) ?></p>
						</div>
						<small class="opacity-50 text-nowrap"><?= esc(Time::parse($news_item['updated_at'])->humanize()) ?></small>
					</div>
				</a>

			<?php endforeach ?>
		</div>
	</div>


<?php else : ?>

	<div class="d-flex flex-column align-items-center justify-content-center">
		<h3 class="mb-3">No News</h3>
		<a href="<?= url_to('news_add') ?>" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Add News</a>
		<p class="text-muted">Unable to find any news for you.</p>
	</div>

<?php endif ?>

<?= $this->endSection() ?>