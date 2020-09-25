    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Daftar Online <?= empty($_GET['c']) ? 'Indonesia College' : $_GET['c'] ; ?></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="indonesia-college-yogyakarta.html">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Daftar Online</a></li>
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
          <h1 class="text-center pd-3 mb-5">PILIH PROGRAM BIMBINGAN</h1>
        <?php foreach ( $program_bimbingan as $key => $value ) : 
          $bg_set = NULL ;
            if($key % 2 == 0){
              $bg_set = 'bg-gray';
            }  
        ?>
          <div class="row mb-3 wow fadeInUp" data-wow-delay="<?= ($key*350) ?>ms" data-wow-duration="1000ms">
            <div class="col-lg-10">
              <div class="card <?= $bg_set ?>">
                <div class="card-body">
                  <h3 class="card-title"><a href="daftar-online.html?a=<?= $value->program_id ?>"><?= $value->program_name ?></a></h3>
                  <p>
                    <?php foreach ( $value->rows as $keySub => $valueSub ) : ?>
                      <a href="daftar-online.html?a=<?= $value->program_id ?>&b=<?= $valueSub->id_subbimbingan ?>&c=<?= $valueSub->title ?>"><span class="badge rounded-pill bg-secondary"><?= $valueSub->title ?></span></a>
                    <?php endforeach ; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a class="align-items-center btn btn-block btn-outline-primary d-flex h-100 justify-content-center" href="#" role="button" style="font-size:30px">DAFTAR KLIK DISINI</a>
            </div>
          </div>
        <?php endforeach ; ?>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-bottom"></div>
    </div>
<style>
h1.text-center.pd-3.mb-5::after {
    content: "";
    display: block;
    height: 6px;
    background-color: #9595c3;
    margin-left: 25%;
    margin-right: 25%;
    margin-top: 1rem;
}
</style>