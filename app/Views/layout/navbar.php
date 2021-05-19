  <!-- navbar -->
  <?php
    $request = \Config\Services::request();
    $hal = ' ';
    if ($request->uri->getTotalSegments() >= 2 && $request->uri->getSegment(2)) {
        $hal = $request->uri->getSegment(2);
        if (($request->uri->getSegment(1)) == 'home') {
            $hal = ' ';
        }
        if (($request->uri->getSegment(1)) == 'genres') {
            $hal = 'list';
        }
        if (($request->uri->getSegment(1)) == 'detail-manga') {
            $hal = 'list';
        }
        if (($request->uri->getSegment(1)) == 'baca-manga') {
            $hal = 'list';
        }
    }

    ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
          <a class="navbar-brand logo" href="<?= base_url('/'); ?>">MangaIndo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link <?= ($hal == ' ') ? 'active' : ' '; ?>" aria-current="page" href="<?= base_url('/'); ?>">Beranda</a>
                  <a class="nav-link <?= ($hal == 'list') ? 'active' : ' '; ?>" href="<?= base_url('pages/list') ?>">Kategori Manga</a>
                  <a class="nav-link <?= ($hal == 'about') ? 'active' : ' '; ?>" href="<?= base_url('pages/about') ?>">Tentang</a>
                  <a class="nav-link <?= ($hal == 'contact') ? 'active' : ' '; ?>" href="<?= base_url('pages/contact') ?>">Hubungi Kami</a>

              </div>
          </div>
      </div>
  </nav>