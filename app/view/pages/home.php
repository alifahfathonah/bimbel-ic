    <!-- Welcome Area-->
    <section class="welcome-area hero4" id="home">
      <!-- Hero Background Shape-->
      <div class="hero4-bg-shape"><img src="assets/themes/img/core-img/hero-4.png" alt=""></div>
      <!-- Hero Background Shape-->
      <div class="hero4-bg-shape2"><img src="assets/themes/img/core-img/hero-4-2.png" alt=""></div>
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-md-5">
            <!-- Content-->
            <div class="welcome-content owl-carousel hero-slides pr-3">
                <?php foreach ($slide as $key => $value): ?>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide mr-xxl-5">
                        <h2 data-animation="fadeInUp" data-delay="300ms"><?= $value->nama ?></h2>
                        <p class="mb-4" data-animation="fadeInUp" data-delay="500ms"><?= $value->deskripsi ?> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p><a class="btn saasbox-btn white-btn mr-3 mt-3" href="#" data-animation="fadeInUp" data-delay="750ms">Selengkapnya</a>
                    </div>
                <?php endforeach; ?>
            </div>
          </div>
          <div class="col-12 col-md-7">
            <div class="card hero-video-card">
                <!-- Shape-->
                <div class="video-shape">
                    <img src="assets/themes/img/core-img/hero-3-2.png" alt="">
                </div>
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
    <section class="service-area service3 section-padding-120 bg-gray" id="service">
      <div class="container">           
        <div class="row g-5 justify-content-center">
          <!-- Single Service Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="card service-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
              <div class="card-body">
                <div class="icon"><i class="lni-android"></i></div>
                <h4>Mobile Apps Developement</h4>
                <p>It's crafted with the latest trend of design.</p>
              </div>
            </div>
          </div>
          <!-- Single Service Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="card service-card active wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
              <div class="card-body">
                <div class="icon"><i class="lni-pie-chart"></i></div>
                <h4>Digital Content &amp; SEO Marketing</h4>
                <p>It's crafted with the latest trend of design.</p>
              </div>
            </div>
          </div>
          <!-- Single Service Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="card service-card wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
              <div class="card-body">
                <div class="icon"><i class="lni-wordpress"></i></div>
                <h4>WordPress 5.0 Ultimate Solution</h4>
                <p>It's crafted with the latest trend of design.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- saasbox Features Area-->
    <div class="saasbox-tab-area section-padding-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9 col-lg-6">
            <div class="section-heading text-center"><i class="lni-crown"></i>
              <h2>Awesome stunning feature for your website</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="tab--area">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Design & Development</a></li>
                <li class="nav-item"><a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Digital Marketing</a></li>
                <li class="nav-item"><a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Business Solution</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <!-- Tab Pane-->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                      <div class="tab--text mt-5">
                        <h6>Design & Development.</h6>
                        <h2>We provide best design & development solution.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, tempore placeat corrupti enim, cumque ex? Mollitia nihil sint cumque omnis iure nisi.</p><span class="d-block mt-4 mb-1">Clients Satisfaction Rate: 90%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="tab-thumb mt-5"><img src="assets/themes/img/bg-img/4.png" alt=""></div>
                    </div>
                  </div>
                </div>
                <!-- Tab Pane-->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                  <div class="row justify-content-between align-items-center">                       
                    <div class="col-12 col-md-6 col-xxl-5">
                      <div class="tab-thumb mt-5"><img src="assets/themes/img/bg-img/bg-1.png" alt=""></div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="tab--text mt-5">
                        <h6>Digital Marketing.</h6>
                        <h2>We provide digital marketing solution.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, tempore placeat corrupti enim, cumque ex? Mollitia nihil sint cumque omnis iure nisi.</p><span class="d-block mt-4 mb-1">Clients Return Rate: 70%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Tab Pane-->
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                      <div class="tab--text mt-5">
                        <h6>Business Solution.</h6>
                        <h2>We provide creative business solution.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, tempore placeat corrupti enim, cumque ex? Mollitia nihil sint cumque omnis iure nisi.</p><span class="d-block mt-4 mb-1">Business Solution Rate: 85%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="tab-thumb mt-5"><img src="assets/themes/img/bg-img/bg-2.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="border-top"></div>
    </div>
    <!-- Feature Area-->
    <div class="feature-area feature3 section-padding-120-70">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-md-6 col-lg-5">
            <!-- Feature Section Image-->
            <div class="feature-side-img mb-50"><img src="assets/themes/img/bg-img/hero-2.png" alt=""></div>
          </div>
          <div class="col-12 col-md-6">
            <!-- Feature Content-->
            <div class="feature--content mb-50">
              <h6>Creative, Awesome &amp; Smart</h6>
              <h2>Introducing Saasbox</h2>
              <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
              <ul class="pl-0">
                <li>Best for Creative Agency</li>
                <li>Built with Latest Technology</li>
                <li>Super Responsive</li>
                <li>Creative Design</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing Plan Area-->
    <section class="saasbox-pricing-plan-area price2 section-padding-120 bg-gray">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
            <div class="section-heading text-center">
              <h6>Pricing Plan</h6>
              <h2>Simple, Transparent Price</h2>
              <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="pricing-table-switch mb-100">
              <ul class="nav nav-tabs border-bottom-0 justify-content-center" id="priceTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="month--tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a></li>
                <li class="nav-item"><a class="nav-link" id="yearly--tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="popular-badge">Save 20%</span>Yearly</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="tab-content" id="priceTabContent">
              <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="month--tab">
                <div class="row g-0 justify-content-center">
                  <!-- Single Pricing Plan-->
                  <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                    <div class="card pricing-card mb-30">
                      <div class="pricing-heading d-flex align-items-center">
                        <div class="price-icon"><i class="lni-pizza"></i></div>
                        <div class="price">
                          <h5>Basic</h5>
                          <h2>$19</h2><span>per month</span>
                        </div>
                      </div>
                      <div class="pricing-desc">
                        <ul class="pl-0">
                          <li>1 Month Usage</li>
                          <li>Lifetime Updates</li>
                          <li class="times">1 Website License</li>
                          <li class="times">Free Support</li>
                          <li class="times">Download New Release</li>
                        </ul>
                      </div>
                      <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                    </div>
                  </div>
                  <!-- Single Pricing Plan-->
                  <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                    <div class="card pricing-card active mb-30">
                      <div class="pricing-heading d-flex align-items-center">
                        <div class="price-icon"><i class="lni-offer"></i></div>
                        <div class="price">
                          <h5>Standard</h5>
                          <h2>$29</h2><span>per month</span>
                        </div>
                      </div>
                      <div class="pricing-desc">
                        <ul class="pl-0">
                          <li>1 Month Usage</li>
                          <li>Lifetime Updates</li>
                          <li>1 Website License</li>
                          <li class="times">Free Support</li>
                          <li class="times">Download New Release</li>
                        </ul>
                      </div>
                      <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                    </div>
                  </div>
                  <!-- Single Pricing Plan-->
                  <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                    <div class="card pricing-card mb-30">
                      <div class="pricing-heading d-flex align-items-center">
                        <div class="price-icon"><i class="lni-burger"></i></div>
                        <div class="price">
                          <h5>Business</h5>
                          <h2>$49</h2><span>per month</span>
                        </div>
                      </div>
                      <div class="pricing-desc">
                        <ul class="pl-0">
                          <li>1 Month Usage</li>
                          <li>Lifetime Updates</li>
                          <li>1 Website License</li>
                          <li>Free Support</li>
                          <li>Download New Release</li>
                        </ul>
                      </div>
                      <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="yearly--tab">
                <div class="row g-0 justify-content-center">
                  <!-- Single Pricing Plan-->
                  <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                    <div class="card pricing-card mb-30">
                      <div class="pricing-heading d-flex align-items-center">
                        <div class="price-icon"><i class="lni-pizza"></i></div>
                        <div class="price">
                          <h5>Basic</h5>
                          <h2>$39</h2><span>per year</span>
                        </div>
                      </div>
                      <div class="pricing-desc">
                        <ul class="pl-0">
                          <li>1 Month Usage</li>
                          <li>Lifetime Updates</li>
                          <li class="times">1 Website License</li>
                          <li class="times">Free Support</li>
                          <li class="times">Download New Release</li>
                        </ul>
                      </div>
                      <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                    </div>
                  </div>
                  <!-- Single Pricing Plan-->
                  <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                    <div class="card pricing-card active mb-30">
                      <div class="pricing-heading d-flex align-items-center">
                        <div class="price-icon"><i class="lni-offer"></i></div>
                        <div class="price">
                          <h5>Standard</h5>
                          <h2>$89</h2><span>per year</span>
                        </div>
                      </div>
                      <div class="pricing-desc">
                        <ul class="pl-0">
                          <li>1 Month Usage</li>
                          <li>Lifetime Updates</li>
                          <li>1 Website License</li>
                          <li class="times">Free Support</li>
                          <li class="times">Download New Release</li>
                        </ul>
                      </div>
                      <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                    </div>
                  </div>
                  <!-- Single Pricing Plan-->
                  <div class="col-12 col-sm-8 col-md-7 col-lg-4">
                    <div class="card pricing-card mb-30">
                      <div class="pricing-heading d-flex align-items-center">
                        <div class="price-icon"><i class="lni-burger"></i></div>
                        <div class="price">
                          <h5>Business</h5>
                          <h2>$149</h2><span>per year</span>
                        </div>
                      </div>
                      <div class="pricing-desc">
                        <ul class="pl-0">
                          <li>1 Month Usage</li>
                          <li>Lifetime Updates</li>
                          <li>1 Website License</li>
                          <li>Free Support</li>
                          <li>Download New Release</li>
                        </ul>
                      </div>
                      <div class="pricing-btn"><a class="btn saasbox-btn" href="#">Choose Plan</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Client Feedback Area-->
    <section class="client-feedback-area d-md-flex align-items-center justify-content-between section-padding-120">
      <!-- Client Shape-->
      <div class="client-shape"><img src="assets/themes/img/core-img/testimonial.png" alt=""></div>
      <!-- Client Feedback Heading-->
      <div class="client-feedback-heading">
        <div class="section-heading mb-0 text-right">
          <h6>Testimonials</h6>
          <h2 class="mb-0">Our Customers Reviews</h2>
        </div>
      </div>
      <!-- Client Feedback Content-->
      <div class="client-feedback-content">
        <div class="client-feedback-slides owl-carousel">
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>You've saved our business! Thanks guys, keep up the good work! The best on the net!</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t1.png" alt=""></div>
                <div class="client-name">
                  <h6>Lim Jannat</h6>
                  <p>UX/UI Designer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>I STRONGLY recommend agency to EVERYONE interested in running a successful business!</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t2.png" alt=""></div>
                <div class="client-name">
                  <h6>Pryce R.</h6>
                  <p>CEO</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>Absolutely wonderful! I wish I would have thought of it first. I would be lost without agency.</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t3.png" alt=""></div>
                <div class="client-name">
                  <h6>Cy N.</h6>
                  <p>Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>I STRONGLY recommend agency to EVERYONE interested in running a successful business!</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t4.png" alt=""></div>
                <div class="client-name">
                  <h6>Juergen T.</h6>
                  <p>Business Owner</p>
                </div>
                <!-- Single Feedback Slide-->
              </div>
            </div>
          </div>
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>You've saved our business! Thanks guys, keep up the good work! The best on the net!</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t1.png" alt=""></div>
                <div class="client-name">
                  <h6>Lim Jannat</h6>
                  <p>UX/UI Designer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>I STRONGLY recommend agency to EVERYONE interested in running a successful business!</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t2.png" alt=""></div>
                <div class="client-name">
                  <h6>Pryce R.</h6>
                  <p>CEO</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>Absolutely wonderful! I wish I would have thought of it first. I would be lost without agency.</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t3.png" alt=""></div>
                <div class="client-name">
                  <h6>Cy N.</h6>
                  <p>Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feedback Slide-->
          <div class="card feedback-card">
            <div class="card-body"><i class="lni-quotation"></i>
              <p>I STRONGLY recommend agency to EVERYONE interested in running a successful business!</p>
              <div class="client-info d-flex align-items-center">
                <div class="client-thumb"><img src="assets/themes/img/bg-img/t4.png" alt=""></div>
                <div class="client-name">
                  <h6>Juergen T.</h6>
                  <p>Business Owner</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Partner Area-->
    <div class="our-partner-area section-padding-0-120">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="our-partner-slides owl-carousel">
              <div class="single-partner"><img src="assets/themes/img/partner-img/1.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/2.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/3.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/4.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/5.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/6.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/1.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/2.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/3.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/4.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/5.png" alt=""></div>
              <div class="single-partner"><img src="assets/themes/img/partner-img/6.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="border-dashed"></div>
    </div>
    <!-- News Area-->
    <section class="saasbox-news-area section-padding-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-lg-7 col-xxl-6">
            <div class="section-heading text-center">
              <h6>Latest info</h6>
              <h2>Our Latest News</h2>
              <p>It's crafted with the latest trend of design & coded with all modern approaches. It's a robust & multi-dimensional usable template.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center g-5">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="#"><img class="card-img-top" src="assets/themes/img/bg-img/blog1.jpg" alt=""></a>
              <div class="post-content p-4"><a class="d-block text-muted mb-2" href="#">Sep 15, 2020</a><a class="post-title d-block mb-2" href="blog-card.html">
                  <h4>Seven ways agency can improve your business</h4></a>
                <p>It's crafted with the latest trend of design with all modern approaches.</p>
                <div class="post-meta d-flex align-items-center justify-content-between"><a class="post-author" href="#"><img src="assets/themes/img/bg-img/t1.png" alt=""></a><span class="text-muted">2 min read</span></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
              <div class="image-wrap"><img class="card-img-top" src="assets/themes/img/bg-img/blog2.jpg" alt="">
                <!-- Video--><span class="video-content"><a class="video-play-btn" href="https://www.youtube.com/watch?v=X_93H_60Pls"><i class="lni-play"></i></a></span>
              </div>
              <div class="post-content p-4"><a class="d-block text-muted mb-2" href="#">Sep 21, 2020</a><a class="post-title d-block mb-2" href="blog-card.html">
                  <h4>The reason why everyone love business</h4></a>
                <p>It's crafted with the latest trend of design with all modern approaches.</p>
                <div class="post-meta d-flex align-items-center justify-content-between"><a class="post-author" href="#"><img src="assets/themes/img/bg-img/t2.png" alt=""></a><span class="text-muted">7 min read</span></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms"><a href="#"><img class="card-img-top" src="assets/themes/img/bg-img/blog3.jpg" alt=""></a>
              <div class="post-content p-4"><a class="d-block text-muted mb-2" href="#">Sep 29, 2020</a><a class="post-title d-block mb-2" href="blog-card.html">
                  <h4>Seven ways agency can improve your business</h4></a>
                <p>It's crafted with the latest trend of design with all modern approaches.</p>
                <div class="post-meta d-flex align-items-center justify-content-between"><a class="post-author" href="#"><img src="assets/themes/img/bg-img/t3.png" alt=""></a><span class="text-muted">4 min read</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center mt-5"><a class="btn saasbox-btn" href="#">View All News</a></div>
        </div>
      </div>
    </section>
    <!-- Cool Facts Area-->
    <section class="cta-area cta3 py-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-sm-8">
            <div class="cta-text mb-4 mb-sm-0">
              <h4 class="text-white mb-0">Let's start with the simple way to create a website.</h4>
            </div>
          </div>
          <div class="col-12 col-sm-4 text-sm-right"><a class="btn saasbox-btn white-btn" href="#">Buy Now</a></div>
        </div>
      </div>
    </section>
    <!-- Cookie Alert Area-->
    <div class="cookiealert mb-0" role="alert">
      <p>This site uses cookies. We use cookies to ensure you get the best experience on our website. For details, please check our <a href="#" target="_blank"> Privacy Policy.</a></p>
      <button class="btn btn-primary acceptcookies" type="button" aria-label="Close">I agree</button>
    </div>