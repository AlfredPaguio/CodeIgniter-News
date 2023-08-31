<?= $this->extend('templates/app') ?>

<?= $this->section('page_title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<?php

use CodeIgniter\I18n\Time;

?>


<div class="container mt-4">

    <div class="p-5 text-center bg-light">
        <h1 class="display-4 mb-3 h2">Welcome to News Website</h1>
        <p class="lead mb-3">Explore our latest news and updates to stay informed.</p>
        <a class="btn btn-primary m-2 btn-lg" href="<?= esc(site_url('news')) ?>" role="button">View News</a>

    </div>

    <hr class="hr" />

    <div class="row">
        <div class="col-md-9 mb-4">

            <h4 class="mb-2"><strong>Recent News</strong></h4>
            <section>
                <?php if (!empty($news) && is_array($news)) : ?>
                    <!-- Post -->
                    <?php foreach ($news as $news_item) : ?>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                                    <img src="https://fakeimg.pl/780x520?text=Placeholder" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-8 mb-4">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h5 class="mb-0"><?= esc($news_item['title']) ?></h5>
                                        <p class="mb-0 opacity-75">Topic? something like Programming > PHP > Codeigniter</p>
                                    </div>
                                    <small class="opacity-50 text-nowrap"><?= esc(Time::parse($news_item['updated_at'])->humanize()) ?></small>
                                </div>
                                <!-- <h5>Very long post title</h5> -->
                                <p>
                                <?= esc($news_item['body']) ?>
                                </p>

                                <a type="button" class="btn btn-primary" href="<?= url_to('news_item', esc($news_item['slug'], 'url')) ?>">Read</a>
                            </div>
                        </div>
                    <?php endforeach ?>
            </section>
        <?php else : ?>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h3 class="mb-3">No News</h3>
                <p class="text-muted">Unable to find any news for you.</p>
            </div>
        <?php endif ?>
        </div>
        <div class="col-md-3 mb-4">
            <section class="sticky-top" style="top: 80px;">
                <h4 class="mb-2"><strong>Technologies</strong></h4>

                <section class="text-center border-bottom pb-4 mb-4">
                    <div class="bg-image bg-dark hover-overlay ripple mb-4">
                        <img src="	https://codeigniter4.github.io/userguide/_static/ci-logo-text.svg" class="img-fluid" />
                        <a href="https://codeigniter4.github.io/userguide/intro/index.html" target="_blank">
                            <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                        </a>
                    </div>
                    <h5>CodeIgniter4</h5>

                    <p>
                        CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries.
                    </p>
                    <a role="button" class="btn btn-primary" href="https://codeigniter4.github.io/userguide/intro/index.html" target="_blank">Go to their documentation<i class="fas fa-right-long ms-2"></i></a>
                </section>
                
                <section class="text-center border-bottom pb-4 mb-4">
                    <div class="bg-image hover-overlay ripple mb-4">
                        <img src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp" class="img-fluid" />
                        <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                            <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                        </a>
                    </div>
                    <h5>Material Design for Bootstrap 5</h5>

                    <p>
                        500+ components, free templates, 1-min installation, extensive tutorial, huge
                        community. MIT license - free for personal & commercial use
                    </p>
                    <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
                </section>

                <section class="text-center">
                    <h5 class="mb-4">Learn the newest Bootstrap 5</h5>

                    <div class="embed-responsive embed-responsive-16by9 shadow-4-strong mb-2">
                        <iframe class="embed-responsive-item rounded" src="" allowfullscreen></iframe>
                    </div>
                    <a role="button" class="btn btn-primary" href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">Go to their documentation<i class="fas fa-right-long ms-2"></i></a>
                </section>


            </section>
        </div>
    </div>
</div>
<?= $this->endSection() ?>