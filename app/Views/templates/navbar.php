<?php
$navItems = [
  ''     => 'Home',
  'news' => 'News',
];
$currentSegment = service('request')->uri->getSegment(1);
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?= $this->renderSection('page_title', true) ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($navItems as $segment => $label) : ?>
          <li class="nav-item">
            <a class="nav-link <?= $currentSegment === $segment ? 'active' : '' ?>" href="<?= site_url($segment) ?>"><?= $label ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>

