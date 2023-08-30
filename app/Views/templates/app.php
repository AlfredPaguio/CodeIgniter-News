<?= helper('html'); ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News - <?= $this->renderSection('page_title', true) ?></title> <!-- or esc($title) -->
  <?= link_tag(base_url('assets/css/style.css'), 'stylesheet', 'text/css') ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="d-flex flex-column min-vh-100">
  <?= $this->include('templates/navbar'); ?>
  <?= $this->include('templates/breadcrumb_view'); ?>
  <main class="container p-0 flex-grow-1">
    <?= $this->renderSection('content') ?>
  </main>
  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>About This</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem eaque culpa alias dolorem ratione asperiores minima deleniti consectetur velit iure veritatis harum nobis distinctio voluptatem necessitatibus qui reprehenderit, sequi magnam?</p>
        </div>
        <div class="col-md-3">
          <h5>Explore</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Connect</h5>
          <ul class="list-unstyled">
            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            <li><a href="#"><i class="fab fa-github"></i> GitHub</a></li>
          </ul>
        </div>
      </div>
      <em>&copy; 2022</em>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?= script_tag(base_url('assets/js/main.js')); ?>

</body>
</html>