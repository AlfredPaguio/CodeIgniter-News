<?= $this->extend('templates/app') ?>
<?= $this->section('page_title') ?>
Create a news
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors('bs5list') ?>

<section class="text-center mb-3">
	<div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -50px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
		<div class="card-body py-5 px-md-5">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<h2 class="fw-bold mb-5">Create News</h2>
					<?= form_open(url_to('news_add')) ?>
					<?= csrf_field() ?>
					<div class="form-outline mb-4">
						<input type="text" id="title" name="title" class="form-control" data-mdb-showcounter="true" maxlength="128" value="<?= set_value('title') ?>" />
						<label class="form-label" for="title">Title</label>
						<div class="form-helper"></div>
					</div>
					<div class="form-outline mb-4">
						<textarea class="form-control" id="body" name="body" rows="6" data-mdb-showcounter="true" maxlength="255"><?= set_value('body') ?></textarea>
						<label class="form-label" for="body">Message</label>
						<div class="form-helper"></div>
					</div>
					<button type="submit" class="btn btn-primary btn-block mb-4">
						Create News
					</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>