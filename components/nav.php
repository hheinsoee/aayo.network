<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand">
      <img src="./assets/images/logo.svg" alt="<?= info()->site->name_short; ?>" height="50px">
      <?= info()->site->name_short; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        foreach (info()->site->navs as $nav) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#<?= $nav[0]; ?>"><?= $nav[1] ?></a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>