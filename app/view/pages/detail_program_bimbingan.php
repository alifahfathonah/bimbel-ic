    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title"><?= $row->title ?></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item">Program Bimbingan</li>
                  <li class="breadcrumb-item">Detail</li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#"><?= $row->title ?></a></li>
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
          <div class="row">
            <div class="col-12">
              <?= $row->content ?>
              <a href="daftar-online.html?a=<?= $row->program_id ?>&b=<?= $row->id_subbimbingan ?>&c=<?= $row->title ?>" class="align-items-center btn btn-block btn-outline-primary d-flex h-100XX justify-content-center" role="button" style="font-size:30px;height:100px">KLIK DISINI UNTUK DAFTAR ONLINE "<?= $row->title ?>"</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-bottom"></div>
    </div>