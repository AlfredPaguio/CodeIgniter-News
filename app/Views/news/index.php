<?= $this->extend('templates/app') ?>
<?= $this->section('page_title') ?>
List of News
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php

use CodeIgniter\I18n\Time;

?>

<?php if (!empty($news) && is_array($news)) : ?>


	<div class="card mb-3">
		<div class="card-header p-3">
			<div class="d-flex justify-content-between align-items-center">
				<h2 class="mb-0"><i class="fas fa-tasks me-2"></i>List</h2>
				<div class="d-grid gap-2 d-flex justify-content-end align-items-center">
					<a class="me-2 btn btn-link">Cancel</a>
					<a type="button" class="btn btn-primary" href="<?= url_to('news_add') ?>"><i class="fa-solid fa-plus me-2"></i>Add News</a>
				</div>
			</div>

		</div>
		<div class="d-flex justify-content-between align-items-center pt-3 mx-2">
			<h4 class="mb-0">Total Number of News: <?= esc(count($news)) ?></h4>
			<div class="d-grid gap-2 d-flex justify-content-end align-items-center">
				<p class="small mb-0 me-2 text-muted">Filter</p>
				<select class="select">
					<option value="1">All</option>
					<option value="2">Completed</option>
					<option value="3">Active</option>
					<option value="4">Has due date</option>
				</select>
				<p class="small mb-0 ms-2 me-2 text-muted">Sort</p>
				<select class="select">
					<option value="1">Descending</option>
					<option value="2">Ascending</option>
				</select>

				<p class="small mb-0 ms-2 me-2 text-muted">Limit</p>
				<select class="select">
					<option value="1">All</option>
					<option value="2">10</option>
					<option value="3">50</option>
					<option value="4">100</option>
				</select>
				<a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i class="fas fa-sort-amount-down-alt ms-2"></i></a>
			</div>
		</div>
		<hr class="hr">
		<div class="card-body" data-mdb-perfect-scrollbar="true">
			<div class="d-flex">
				<div class="overflow-auto">
					<?php foreach ($news as $news_item) : ?>
						<div class="card m-2">
							<div class="row g-0">
								<div class="col-md-4">
									<img src="https://fakeimg.pl/780x520?text=Placeholder" class="img-fluid rounded-start" />
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<div class="d-flex gap-2 w-100 justify-content-between">
											<div>
												<h5 class="mb-0"><?= esc($news_item['title']) ?></h5>
												<p class="mb-0 opacity-75">Topic? something like Programming > PHP > Codeigniter</p>
											</div>
											<small class="text-muted">Last updated <?= esc(Time::parse($news_item['updated_at'])->humanize()) ?></small>
										</div>
										<p class="card-text text-truncate">
											<?= esc($news_item['body']) ?>
										</p>
										<a type="button" class="btn btn-primary" href="<?= url_to('news_item', esc($news_item['slug'], 'url')) ?>">Read</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<div class="card-footer text-end p-3">
			<ul class="pagination justify-content-end">
				<li class="page-item disabled">
					<a class="page-link">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
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