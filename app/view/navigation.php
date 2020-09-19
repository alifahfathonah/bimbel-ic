    <!-- Header Area-->
    <header class="header-area <?= ($_GET['mod']=='home') ? NULL : 'header2' ; ?>">
      <div class="container">
        <div class="classy-nav-container breakpoint-off <?= ($_GET['mod']=='home') ? NULL : 'navbar2' ; ?>">
          <nav class="classy-navbar justify-content-between" id="saasboxNav">
            <!-- Logo--><a class="nav-brand mr-5" href="indonesia-college-yogyakarta.html"><img src="assets/themes/img/core-img/<?= ($_GET['mod']=='home') ? 'logo' : 'logo-white' ; ?>.png" alt="Logo Bimbel IC" style="max-height:70px"></a>
            <!-- Navbar Toggler-->
            <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span><span></span></span></div>
            <!-- Menu-->
            <div class="classy-menu">
              <!-- close btn-->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Nav Start-->
              <div class="classynav">
                <ul id="corenav">
                  <li><a href="indonesia-college-yogyakarta.html">Beranda</a>
                  </li>
                  <li><a href="#">Tentang IC</a>
                    <ul class="dropdown">
                      <li><a href="profil.html">- Profil</a></li>
                      <li><a href="keunggulan.html">- Keunggulan</a></li>
                      <li><a href="visi-dan-misi.html">- Visi dan Misi</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Program Bimbingan</a>
                    <div class="megamenu">
                      <?php foreach ($program_bimbingan as $key => $value) : ?>
                        <ul class="single-mega cn-col-3">
                          <li><?= $value->program_name ?></li>
                          <?php foreach ($value->rows as $keySubOne => $valueSubOne) : ?>
                          <li><a href="program-bimbingan-<?= seo($valueSubOne->title).'-'.$valueSubOne->id_subbimbingan ?>.html"><?= $valueSubOne->title ?></a></li>
                          <?php endforeach ; ?>
                        </ul>
                      <?php endforeach ; ?>
                    </div>
                  </li>
                  <li><a href="jadwal.html">Jadwal</a></li>
                  <li><a href="biaya.html">Biaya</a></li>
                  <li><a href="#">Pendaftaran</a>
                    <ul class="dropdown">
                      <li><a href="cara-pendaftaran.html">- Cara Pendaftaran</a></li>
                      <li><a href="daftar-online.html">- Daftar Online</a></li>
                    </ul>
                  </li>
                  <li><a href="kontak.html">Kontak</a></li>
                </ul>
                <!-- Login Button-->
                <!-- <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="#">Buy Now</a></div> -->
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>