    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Kontak Indonesia College</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="indonesia-college-yogyakarta.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Kontak Kami</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Area-->
    <div class="saasbox-contact-us-area section-padding-120-40">
      <div class="container">                       
        <div class="row justify-content-between">
          <!-- Contact Side Info-->
          <div class="col-12 col-lg-6">
            <div class="contact-side-info mb-80">
              <div class="contact-mini-card-wrapper">
                <?php foreach ($kontakk as $key => $value) : ?>
                  <!-- Contact Mini Card-->
                  <div class="contact-mini-card">
                    <div class="contact-mini-card-icon">
                      <!-- <i class="lni lni-envelope"></i> -->
                      <img src="assets/img/hubungikami/<?= $value->gambar ?>" alt="" class="mt-1 ml-2">
                    </div>
                    <div class="row">
                      <p class="col"><?= $value->alamat ?></p>
                      <?php if ($value->phone) : ?>
                        <p class="col"><?= $value->phone ?></p>
                      <?php endif ; ?>
                    </div>
                  </div>
                <?php endforeach ; ?>
              </div>
            </div>
          </div>
          <!-- Contact Form-->
          <div class="col-12 col-lg-6">
            <p>Anda bisa mengirim pesan dengan cara mengisi from dibawah ini dan jawaban akan kami kirim via email. Terimakasih</p>
            <div class="contact-form mb-80">
              <form id="main_contact_form" action="http://demo.designing-world.com/saasbox-v1.5.0/php/mail.php" method="POST">
                <div id="success_fail_info"></div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label for="name">Nama *:</label>
                    <input type="text" name="nama" placeholder="Masukan nama anda disini..." value="" class="form-control mb-30" required="">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="email">Email *:</label>
                    <input class="form-control mb-30" id="email" type="email" name="email" placeholder="email@gmail.com" name="email" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="subject">Alamat *:</label>
                    <input class="form-control mb-30" id="topics" type="text" name="alamat" placeholder="Masukan alamat anda disini..." name="topics" value="">
                  </div>
                  <div class="col-12">
                    <label for="message">Pesan *:</label>
                    <textarea class="form-control mb-30" id="message" name="pesan" placeholder="Tulis pesan anda disini..."></textarea>
                  </div>
                  <div class="col-12 text-center">
                    <button class="btn saasbox-btn w-100" type="submit">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Google Maps-->
    <div class="google-maps-wrapper">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63242.57000846092!2d110.36419506545612!3d-7.825697966146739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sindonesia%20college!5e0!3m2!1sid!2sid!4v1600413665672!5m2!1sid!2sid" allowfullscreen=""></iframe>
    </div>