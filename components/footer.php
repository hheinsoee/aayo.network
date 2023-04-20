<footer class="d-flex flex-wrap justify-content-between align-items-center py-4 bg-primary text-white">
  <div class="col-md-4 d-flex align-items-center">
    <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none lh-1">
      <svg class="bi" width="30" height="24">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>
    <span>© <?= date('Y') . ' ' . info()->org->name; ?></span>
  </div>

  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <div class="px-2">
      <i class="mx-2 mx-md-3 fa-brands fa-facebook fa-xl"></i>
      <i class="mx-2 mx-md-3 fa-brands fa-youtube fa-xl"></i>
      <i class="mx-2 mx-md-3 fa-brands fa-twitter fa-xl"></i>
    </div>
  </ul>
</footer>