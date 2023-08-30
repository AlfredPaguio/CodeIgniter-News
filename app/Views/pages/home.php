<?= $this->extend('templates/app') ?>

<?= $this->section('page_title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="mb-2">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">Explore our latest news and updates to stay informed.</p>
        <a class="btn btn-primary btn-lg" href="<?= site_url('news') ?>" role="button">View News</a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Recent News</h4>
                    <ul class="list-group">
                        <li class="list-group-item">News Item 1</li>
                        <li class="list-group-item">News Item 2</li>
                        <li class="list-group-item">News Item 3</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- something something I don't know what to put -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>