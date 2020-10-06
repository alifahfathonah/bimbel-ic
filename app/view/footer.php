    <!-- Footer Area-->
    <footer class="footer-area footer2 pt-3">
      <div class="container">
        <div class="row justify-content-between">
          <!-- Footer Widget Area-->
          <div class="col-12 col-sm-6">
            <div class="footer-widget-area mb-3">
              <h5 class="widget-title">Hubungi Kami</h5>
              <ul class="row row-cols-1 g-4XXX">
                <?php foreach ($hubungi_kami as $key => $value ) : ?>
                  <li class="col wow fadeInUp" data-wow-delay="<?= (($key+1)*200) ?>ms" data-wow-duration="1000ms">
                    <div class="d-flex link-terkait-item">
                      <img src="assets/img/hubungikami/<?= $value->gambar ?>" class="" style="height:30px" alt="...">
                      <p class="d-flex ml-3"><?= $value->alamat ?></p>
                    </div>
                  </li>
                <?php endforeach ; ?>
              </ul>
              <div class="">
                <a class="border btn fadeInUp mr-3 mt-3 rounded-pill saasbox-btn white-btn wow" href="#" data-wow-delay="300ms" data-wow-duration="1000ms">Cabang Lainnya</a>
              </div>
            </div>
          </div>
          <!-- Footer Widget Area-->
          <div class="col-12 col-sm-6">
            <div class="footer-widget-area mb-3">
              <h5 class="text-center text-sm-left widget-title">Link Terkait</h5>
              <ul class="row row-cols-4 row-cols-md-5 g-3">
                <?php foreach ($link_terkait as $key => $value ) : ?>
                  <li class="col wow fadeInUp text-center" data-wow-delay="<?= (($key+1)*200) ?>ms" data-wow-duration="1000ms">
                    <a href="<?= $value->link ?>" target="_blank" title="<?= $value->nama ?>" class="link-terkait-item">
                      <img src="assets/img/linkterkait/<?= $value->gambar ?>" class="mb-1" alt="<?= $value->nama ?>">
                      <?= $value->nama ?>
                    </a>
                  </li>
                <?php endforeach ; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-3 pb-3" style="background-color:var(--cs-primary)">
        <div class="row align-items-center">
          <div class="col-12">
            <!-- Copywrite Text-->
            <div class="footer--content-text">
              <p class="mb-0 text-center">© 2016-<?= date('Y') ?> IC. All Rights reserved by <a href="#" target="_blank">Bimbel IC</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- All JavaScript Files-->
    <script src="assets/themes/js/popper.min.js"></script>
    <script src="assets/themes/js/bootstrap.min.js"></script>
    <script src="assets/themes/js/jquery.min.js"></script>
    <script src="assets/themes/js/default/classy-nav.min.js"></script>
    <script src="assets/themes/js/waypoints.min.js"></script>
    <script src="assets/themes/js/jquery.easing.min.js"></script>
    <script src="assets/themes/js/default/jquery.scrollup.min.js"></script>
    <script src="assets/themes/js/owl.carousel.min.js"></script>
    <script src="assets/themes/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/themes/js/default/isotope.pkgd.min.js"></script>
    <script src="assets/themes/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/themes/js/jquery.animatedheadline.min.js"></script>
    <script src="assets/themes/js/jquery.counterup.min.js"></script>
    <script src="assets/themes/js/wow.min.js"></script>
    <script src="assets/themes/js/jarallax.min.js"></script>
    <script src="assets/themes/js/jarallax-video.min.js"></script>
    <script src="assets/themes/js/default/cookiealert.js"></script>
    <script src="assets/themes/js/default/jquery.passwordstrength.js"></script>
    <script src="assets/themes/js/default/mail.js"></script>
    <script src="assets/themes/js/default/active.js"></script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
  </body>
</html>