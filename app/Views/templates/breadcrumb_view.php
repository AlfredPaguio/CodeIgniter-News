<?php

helper('array');

//* this code is based on https://stackoverflow.com/a/21392434
// Add Home breadcrumb
$breadcrumbs[] = [
    'label' => 'Home',
    'url' => site_url(),
    'icon' => '<i class="fa-solid fa-house" width="16" height="16"></i>',
];

// Get current route segments
$segments = service('request')->uri->getSegments();

// Build breadcrumbs dynamically based on segments
$urlSegments = '';
foreach ($segments as $segment) {
    $urlSegments .= $segment . '/';
    $breadcrumbs[] = [
        'label' => ucfirst($segment), // Capitalize segment name
        'url' => site_url($urlSegments),
        'icon' => '',
    ];
}
?>
<?php if (end($breadcrumbs)["label"] != 'Home') : ?>
<div class="container my-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3">
            <?php foreach ($breadcrumbs as $breadcrumb) : ?>

                <?php if (!empty($breadcrumb['url'])) : ?>
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis text-decoration-none" href="<?= esc($breadcrumb['url']) ?>">
                            <?= $breadcrumb['icon'] ?>
                            <span class="<?php if ($breadcrumb['label'] == 'Home') : ?>visually-hidden<?php endif; ?>"><?= esc($breadcrumb['label']) ?></span>
                        </a>
                    </li>
                <?php else : ?>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= esc($breadcrumb['label']) ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </nav>
</div>
<?php endif; ?>