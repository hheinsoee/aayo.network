<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-white sticky-top">
  <div class="container">
    <a class="navbar-brand">
      <img class="bg-white rounded-circle p-1 me-2" src="./assets/images/logo.svg" alt="<?= info()->site->name_short; ?>" height="50px">
      <b><?= info()->site->name_short; ?></b>
    </a>

      <i class="mx-2 mx-md-3 fa-brands fa-facebook fa-xl d-lg-none"></i>
      <i class="mx-2 mx-md-3 fa-brands fa-youtube fa-xl d-lg-none"></i>
      <i class="mx-2 mx-md-3 fa-brands fa-twitter fa-xl d-lg-none"></i>
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
    <div class="d-none d-lg-block">
      <i class="mx-2 mx-md-3 fa-brands fa-facebook fa-xl"></i>
      <i class="mx-2 mx-md-3 fa-brands fa-youtube fa-xl"></i>
      <i class="mx-2 mx-md-3 fa-brands fa-twitter fa-xl"></i>
    </div>
  </div>
</nav>