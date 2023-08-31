<?php
//* this code is based on https://stackoverflow.com/a/21392434
// Add Home breadcrumb
$breadcrumbs[] = [
    'label' => 'Home',
    'url' => site_url(),
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
    ];
}
?>

<?php if (end($breadcrumbs)["label"] != 'Home') : ?>
    <div class="p-5 bg-light mb-4">
        <h1 class=""><?= esc(end($breadcrumbs)["label"]) ?></h1>
        <!-- Breadcrumb -->
        <nav class="d-flex">
            <h6 class="mb-0">

                <?php foreach ($breadcrumbs as $index => $breadcrumb) : ?>

                    <?php if (!empty($breadcrumb['url'])) : ?>
                        <a href="<?= esc($breadcrumb['url']) ?>" class="text-reset"><?= esc($breadcrumb['label']) ?></a>
                    <?php else : ?>
                        <span href="" class="text-reset" aria-current="page"><u><?= esc($breadcrumb['label']) ?></u></span>
                    <?php endif; ?>
                    <!-- I need to know if this is the final iteration -->
                    <?php if ($index < count($breadcrumbs) - 1) : ?>
                        <span>/</span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </h6>
        </nav>
        <!-- Breadcrumb -->
    </div>
<?php endif; ?>