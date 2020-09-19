    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Video Indonesia College</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="indonesia-college-yogyakarta.html">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Video</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- saasbox Blog Area-->
      <div class="saasbox--blog--area blog-card-page section-padding-120">
        <div class="container">
          <div class="row g-5">
            <?php foreach ($video as $key => $value) : ?>
              <!-- Single Blog Post-->
              <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?= (($key+1)*250) ?>ms" data-wow-duration="1000ms">
                <div class="card blog-card h-100">
                  <div class="image-wrap"><img class="card-img-top" src="https://img.youtube.com/vi/<?= $value->videoId ?>/mqdefault.jpg" alt="">
                    <!-- Video--><span class="video-content"><a class="video-play-btn" href="https://www.youtube.com/watch?v=<?= $value->videoId ?>"><i class="lni-play"></i></a></span>
                  </div>
                  <div class="post-content p-4">
                    <h5 class="card-title" title="<?= $value->judul ?>">NAMA : <?= $value->judul ?></h5>
                    <h5 class="card-title" title="<?= $value->asal_sekolah ?>">ASAL SEKOLAH : <?= $value->asal_sekolah ?></h5>
                    <h5 class="card-title" title="<?= $value->diterima ?>">DITERIMA DI : <?= $value->diterima ?></h5>
                    <p class="card-text text-justify"><?= strip_tags($value->deskripsi) ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach ; ?>
        </div>
      </div>
    </div>