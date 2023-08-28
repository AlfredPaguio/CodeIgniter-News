<?php if (! empty($news) && is_array($news)): ?>
    <a type="button" class="btn btn-primary mb-4" href="<?= url_to('news_add') ?>">Add News</a>

    <?php foreach ($news as $news_item): ?>
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title"><?= esc($news_item['title']) ?></h3>
                <div class="card-text">
                    <?= esc($news_item['body']) ?>
                </div>
                <a href="/news/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-secondary mt-3">View Article</a>
            </div>
        </div>
    <?php endforeach ?>


<?php else: ?>

    <h3>No News</h3>
    <a type="button" class="btn btn-primary" href="<?= url_to('news_add') ?>">Add news</a>
    <p>Unable to find any news for you.</p>

<?php endif ?>