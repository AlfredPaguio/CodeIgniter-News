<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title" class="form-label">Title</label>
    <input type="input" class="form-control" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body" class="form-label">Text</label>
    <textarea name="body" class="form-control" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

   
    <input type="submit" class="btn btn-primary" name="submit" value="Create news item">
</form>