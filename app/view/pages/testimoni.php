    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Testimoni Indonesia College</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="indonesia-college-yogyakarta.html">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Testimoni</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Area-->
    <section class="about-area about3 section-padding-120 bg-gray">
      <div class="container">
        <div class="hero--content--area">
          <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php foreach ($testimoni as $key => $value) : ?>
                <!-- Single Feedback Slide-->
            <div class="col">
              <div class="card hero-card feedback-card wow fadeInUp h-100" data-wow-delay="<?= (($key+1)*250) ?>ms" data-wow-duration="1000ms" style="box-shadow: 3px 3px 10px 0px #1413368c;">
                <div class="rounded-circle overflow-hidden w-50 mx-auto mt-3">
                  <img src="assets/img/testimoni/<?= $value->gambar ?>" alt="" data-toggle="tooltip" data-html="true" title="Nama : <?= $value->nama ?><br>Asal sekolah : <?= $value->asal_sekolah ?><br>Diterima : <?= $value->diterima ?>">
                </div>
                <div class="card-body">
                  <div class="client-info align-items-center text-center">
                    <div class="client-name" >
                      <h6><?= $value->nama ?></h6>
                      <p><?= $value->asal_sekolah ?></p>
                      <p>Diterima <?= $value->diterima ?></p>
                    </div>
                  </div>
                  <p class="mt-3 text-center">
                    <?= strip_tags($value->isi) ?>
                  </p>
                </div>
              </div>
            </div>
            <?php endforeach ; ?>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-bottom"></div>
    </div>