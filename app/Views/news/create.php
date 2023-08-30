<?= $this->extend('templates/app') ?>
<?= $this->section('page_title') ?>
Create a news
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors('bs5list') ?>

<!-- <form action="/news/create" method="post"> -->

<?= form_open(url_to('news_add')) ?>

<?= csrf_field() ?>

<div class="mb-3">
	<label for="title" class="form-label">Title</label>
	<input type="input" class="form-control" id="title" name="title" value="<?= set_value('title') ?>">
</div>

<div class="mb-3">
	<label for="body" class="form-label">Text</label>
	<textarea name="body" class="form-control" id="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
</div>

<input type="submit" class="btn btn-primary" name="submit" value="Create news item">
<!-- </form> -->

<?= form_close() ?>

<?= $this->endSection() ?>