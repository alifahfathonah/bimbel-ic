    <!-- Welcome Area-->
    <section class="welcome-area" id="home">
        <!-- Hero Background Shape-->
        <div class="background-shape">
            <div class="circle1 wow fadeInLeftBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInLeftBig;"></div>
            <div class="circle2 wow fadeInRightBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInRightBig;"></div>
            <div class="circle3 wow fadeInLeftBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInLeftBig;"></div>
        </div>

      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 order-1 order-md-0 col-md-5">
            <!-- Content-->
            <div class="welcome-content owl-carousel hero-slides pr-3">
                <?php foreach ($slide as $key => $value): ?>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide mr-xxl-5">
                        <h2 data-animation="fadeInUp" data-delay="300ms"><?= $value->nama ?></h2>
                        <p class="mb-4" data-animation="fadeInUp" data-delay="500ms"><?= $value->deskripsi ?> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat nisi ut aliquip ex ea commodo consequat. nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat nisi ut aliquip ex ea  </p><a class="btn saasbox-btn white-btn mr-3 mt-3 mb-3" href="#" data-animation="fadeInUp" data-delay="750ms">Selengkapnya</a>
                    </div>
                <?php endforeach; ?>
            </div>
          </div>
          <div class="col-12 order-0 order-md-1 col-md-7">
            <div class="card hero-video-card">
                <div class="video-card-slides owl-carousel">
                    <?php foreach ($slide as $key => $value): ?>
                        <img src="assets/img/slide/<?= $value->gambar ?>" alt="<?= $value->nama ?>">
                    <?php endforeach; ?>
                </div>
                <!-- <a class="video-play-btn" href="https://www.youtube.com/watch?v=X_93H_60Pls"><i class="lni-play"></i><span class="video-sonar"></span></a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Area-->
    <section class="service-area" id="service">
        <div class="background-shape-2 h-100 w-100">
        
            <div class="top h-50 w-100">
                <div class="circle-1 wow fadeInRightBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInRightBig;"></div>
                <div class="circle-2 wow fadeInRightBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInRightBig;"></div>
            </div>
            <div class="bottom h-50 w-100">
                <div class="circle-1 wow fadeInLeftBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInLeftBig;"></div>
                <div class="circle-2 wow fadeInLeftBig" data-wow-duration="4000ms" style="visibility: visible; animation-duration: 4000ms; animation-name: fadeInLeftBig;"></div>
            </div>
        </div>
        <div class="container">           
            <div class="row g-5 justify-content-center">
                <div class="col-12 mb-80 mb-sm-200">
                    <div class="section-heading text-center">
                        <h1 class="text-white">Kenapa Memilih Indonesia College?</h1>
                    </div>
                    <img src="assets/img/gedung.png" class="mx-auto d-block w-75" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="service-area pb-5" style="background: var(--cs-primary);margin-top: 57px;">            
      <div class="container">           
        <div class="row g-5 justify-content-center">
          <div class="pengajar-ahli owl-carousel">
            <!-- Single Service Area-->
            <div class="">
              <div class="card service-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="card-body">
                  <div class="icon"><i class="lni-android"></i></div>
                  <h4>Pengajar Ahli</h4>
                  <p>It's crafted with the latest trend of design quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
            <!-- Single Service Area-->
            <div class="">
              <div class="card service-card activeX wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <div class="card-body">
                  <div class="icon"><i class="lni-pie-chart"></i></div>
                  <h4>Tes Progresif Berkala</h4>
                  <p>It's crafted with the latest trend of design quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
            <!-- Single Service Area-->
            <div class="">
              <div class="card service-card wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                <div class="card-body">
                  <div class="icon"><i class="lni-wordpress"></i></div>
                  <h4>Pengajar Ahli</h4>
                  <p>It's crafted with the latest trend of design quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- saasbox Features Area-->
    <div class="saasbox-tab-area section-padding-120XX">
      <div class="section-heading text-center header-testimoni"><i class="lni-wechat"></i>
        <h2 class="text-white">Testimoni Siswa Lolos</h2>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-12 col-lg-12">
            <!-- Client Feedback Content-->
            <div class="client-feedback-content">
              <div class="client-feedback-slides owl-carousel">
								<?php foreach ($testimoni as $key => $value) : ?>
									<!-- Single Feedback Slide-->
									<div class="card feedback-card wow fadeInUp mb-3" data-wow-delay="<?= (($key+1)*300) ?>ms" data-wow-duration="1000ms" style="">
                    <div class="rounded-circle overflow-hidden w-50 mx-auto mb-3">
                      <img src="assets/img/testimoni/<?= $value->gambar ?>" alt="" data-toggle="tooltip" data-html="true" title="Nama : <?= $value->nama ?><br>Asal sekolah : <?= $value->asal_sekolah ?><br>Diterima : <?= $value->diterima ?>">
                    </div>
										<div class="card-body" style="background: #c6e7fa; border-radius: 15px;">
											<div class="client-info d-flex align-items-center text-center">
												<div class="client-name" style="line-height: 1.5em;height: 4.5em;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
													<h6><?= $value->nama ?></h6>
													<p><?= $value->asal_sekolah ?></p>
													<p>Diterima <?= $value->diterima ?></p>
												</div>
											</div>
											<p class="mt-3 text-center" style="line-height: 1.5em;height: 9em;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 6;-webkit-box-orient: vertical;">
												<?= strip_tags($value->isi) ?>
											</p>
										</div>
									</div>
								<?php endforeach ; ?>
              </div>
              <div class="text-center">
                <a class="btn fadeInUp mb-1 mt-5 mt-sm-3 saasbox-btn text-capitalize white-btn wow" href="testimoni-indonesia-college-yogyakarta.html" data-wow-delay="900ms" data-wow-duration="1000ms" style="background-color: #971e23;color: #ffffff;box-shadow: 4px 4px 0px 0px #d37e83;border-radius: 8px;">Testimoni Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Area-->
    <div class="feature-area">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-lg-12 col-md-12 pt-3 video-title-home">
            <div class="d-inline-flex section-heading text-center"><i class="lni-video"></i>
              <h2 class="p-3">IC VIDEO</h2>
            </div>
          </div>
          
          <?php if ( count($video) < 1 ) : ?>
            <div class="col-12">
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading text-center">Video not found at this time!</h4>
              </div>
            </div>
          <?php else : ?>
            <?php foreach ( $video as $key => $value ) : ?>
              <?php if ( $key === 0 ) : ?>
                <div class="col-12 col-lg-6 col-md-6 first-video-home mb-3 mb-sm-0">
                  <div class="card blog-card wow fadeInUp border-0" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="image-wrap"><img class="card-img-top" src="https://img.youtube.com/vi/<?= $value->videoId ?>/maxresdefault.jpg" alt="">
                      <!-- Video--><span class="video-content"><a class="video-play-btn" href="https://www.youtube.com/watch?v=<?= $value->videoId ?>"><i class="lni-play"></i></a></span>
                    </div>
                    <div class="p-sm-4 post-content pt-2">
                      <h4><?= $value->judul ?> DITERIMA <?= $value->diterima ?> DARI <?= $value->asal_sekolah ?></h4>
                    </div>
                  </div>
                </div>
              <?php else : ?>
                <?php 
                  if ( $key === 1 ) {
                    echo '<div class="col-12 col-md-6 col-lg-6">';  
                  }
                ?>
                  <div class="card blog-card wow fadeInUp mb-3 border-0" data-wow-delay="<?= ($key*350) ?>ms" data-wow-duration="1000ms">
                    <div class="row g-0">
                      <div class="col-4">
                        <div class="image-wrap h-100"><img class="card-img-topXXX h-100" src="https://img.youtube.com/vi/<?= $value->videoId ?>/mqdefault.jpg" alt="" style="max-width:unset">
                          <!-- Video--><span class="video-content"><a class="video-play-btn" href="https://www.youtube.com/watch?v=<?= $value->videoId ?>"><i class="lni-play"></i></a></span>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="card-body pb-0 pb-sm-3 pt-0 pt-sm-3">
                          <h5 class="card-title text-truncate  mb-0" style="line-height: unset !important;" title="<?= $value->judul ?>">NAMA : <?= $value->judul ?></h5>
                          <h5 class="card-title text-truncate  mb-0" style="line-height: unset !important;" title="<?= $value->asal_sekolah ?>">ASAL SEKOLAH : <?= $value->asal_sekolah ?></h5>
                          <h5 class="card-title text-truncate  mb-0" style="line-height: unset !important;" title="<?= $value->diterima ?>">DITERIMA DI : <?= $value->diterima ?></h5>
                          <p class="card-text text-justify" style="line-height: 1.5em;height: 6em;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?= strip_tags($value->deskripsi) ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  if ( $key === (count($video)-1) ) {
                    echo '</div>';
                  }
                ?>              
              <?php endif ; ?>
            <?php endforeach ; ?>
          <?php endif ; ?>
          <div class="text-center">
            <a class="btn fadeInUp mb-4 mt-3 saasbox-btn text-capitalize white-btn wow" href="video-indonesia-college-yogyakarta.html" data-wow-delay="900ms" data-wow-duration="1000ms" style="background-color: #0b0757;color: #ffffff;box-shadow: 4px 4px 0px 0px #7dc6d9;border-radius: 8px;">Video Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing Plan Area-->
    <section class="saasbox-pricing-plan-area" style="background:var(--cs-primary)">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 pt-3">
            <div class="section-heading text-center">
              <h2 class="text-white">HOTLINE SERVICE</h2>
              <div class="gx-2 gx-sm-5 mb-3 row row-cols-3">
                <div class="col wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                  <a href="#">
                    <img src="assets/img/hotline/wa1.png"  alt="MUSTOFA">
                  </a>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                  <a href="#">
                    <img src="assets/img/hotline/wa2.png"  alt="RATNA">
                  </a>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                  <a href="#">
                    <img src="assets/img/hotline/wa2.png"  alt="NANDA">
                  </a>
                </div>
              </div>

            </div>
            <div class="section-heading text-center mb-0">
              <h2 class="text-white">Ikuti Media Sosial Kami</h2>
              <div class="row row-cols-2 row-cols-md-4 g-3">
                <?php foreach ($sosmed as $key => $value ) : ?>
                  <div class="col wow fadeInUp" data-wow-delay="<?= (($key+1)*200) ?>ms" data-wow-duration="1000ms">
                    <a href="<?= $value->link ?>" target="_blank" title="<?= $value->nama ?>">
                      <img src="assets/img/sosmed/<?= $value->gambar ?>" alt="<?= $value->nama ?>">
                    </a>
                  </div>
                <?php endforeach ; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Google Maps-->
    <div class="google-maps-wrapper container-fluid" style="background:var(--cs-primary)">
      <iframe class="pt-3 pb-2" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63242.57000846092!2d110.36419506545612!3d-7.825697966146739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sindonesia%20college!5e0!3m2!1sid!2sid!4v1600413665672!5m2!1sid!2sid" allowfullscreen=""></iframe>
    </div>    
    <!-- Cookie Alert Area-->
    <div class="cookiealert mb-0" role="alert">
      <p>This site uses cookies. We use cookies to ensure you get the best experience on our website. For details, please check our <a href="#" target="_blank"> Privacy Policy.</a></p>
      <button class="btn btn-primary acceptcookies" type="button" aria-label="Close">I agree</button>
    </div>