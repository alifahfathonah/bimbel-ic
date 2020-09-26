    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Daftar Online <?= empty($_GET['c']) ? 'Indonesia College' : " \"{$_GET['c']}\" " ; ?></h2>
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
          <?php if ( empty($_GET['a']) || empty($_GET['b']) || empty($_GET['c']) ) : ?>
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
                <a class="align-items-center btn btn-block btn-outline-primary d-flex h-100 justify-content-center" href="daftar-online.html?a=<?= $value->program_id ?>" role="button" style="font-size:30px">DAFTAR KLIK DISINI</a>
              </div>
            </div>
            <?php endforeach ; ?>
          <?php else : ?>
            <h1 class="text-center pd-3 mb-5">FORMULIR PENDAFTARAN</h1>
            <form>
              <div class="card mb-3">
                <div class="card-body row g-3">
                  <h3 class="card-title">Biodata Diri</h3>
                  <div class="col-lg-12">
                    <label for="inputNamaPeserta" class="form-label">Nama peserta</label>
                    <input placeholder="Masukan nama ..." class="form-control" type="text" name="nama_peserta" required="">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Tempat lahir</label>
                    <input placeholder="Masukan tempat lahir..." class="form-control" type="text" name="tempat_lahir" required="">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Tanggal lahir</label>
                    <input type="date" placeholder="" class="form-control" id="inputNamaPeserta">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Jenis kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required=""><option value="Laki-laki">Laki-Laki</option><option value="Perempuan">Perempuan</option></select>
                  </div>
                  <div class="col-lg-12">
                    <label for="inputNamaPeserta" class="form-label">Alamat rumah</label>
                    <textarea placeholder="Masukan alamat lengkap..." class="form-control" name="alamat_rumah" required=""></textarea>
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">No HP</label>
                    <input type="text" placeholder="+628123456789" class="form-control" name="no_hp_peserta" required="">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">E-mail</label>
                    <input  type="email" placeholder="email@gmail.com" class="form-control" name="email" required="">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Asal sekolah</label>
                    <input type="text" placeholder="Masukan nama asal sekolah" class="form-control" name="asal_sekolah" required="">
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body row g-3">
                  <h3 class="card-title">Biodata Orang Tua</h3>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Nama</label>
                    <input placeholder="Masukan nama orang tua" type="text" name="nama_ortu" class="form-control" required="">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Pekerjaan</label>
                    <input placeholder="Masukan nama pekerjaan orang tua" type="text" name="pekerjaan" class="form-control" required="">
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">No HP</label>
                    <input placeholder="Masukan nama pekerjaan orang tua" type="text" name="pekerjaan" class="form-control" required="">
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body row g-3">
                  <h3 class="card-title">Program Bimbingan</h3>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Bimbingan</label>
                    <select name="bimbingan" class="form-control" id="bimbingan" required="">
                      <option value="" selected="" disabled="">- Pilih Bimbingan -</option>
                      <option value="87">PKN STAN</option>
                      <option value="86">IPDN</option>
                      <option value="85">POLSTAT STIS</option>
                      <option value="84">DEPHUB 1</option>
                      <option value="83">DEPHUB 2</option>
                      <option value="82">DEPHUB 3</option>
                      <option value="81">POLTEKIM</option>
                      <option value="80">POLTEKIP</option>
                      <option value="79">POLTEK SSN</option>
                      <option value="78">STIN</option>
                      <option value="77">STMKG</option>
                      <option value="76">STPN</option>
                      <option value="75">POLTEKKES</option>
                      <option value="74">UTBK SBMPTN (SAINTEK)</option>
                      <option value="73">UTBK SBMPTN (SOSHUM)</option>
                      <option value="72">UTUL UM UGM (SAINTEK)</option>
                      <option value="71">UTUL UM UGM (SOSHUM)</option>
                      <option value="70">KEDOKTERAN UMY</option>
                      <option value="69">KEDOKTERAN UII</option>
                      <option value="68">KEDOKTERAN UKDW</option>
                      <option value="67">KEDOKTERAN TERPADU 2021</option>
                      <option value="66">KEDINASAN TERPADU (STAN)</option>
                      <option value="65">KEDINASAN TERPADU (IPDN)</option>
                      <option value="64">KEDINASAN TERPADU (STIS)</option>
                      <option value="63">KEDINASAN TERPADU (DEPHUB)</option>
                      <option value="62">KEDINASAN TERPADU (POLTEKIM)</option>
                      <option value="61">KEDINASAN TERPADU (POLTEKIP)</option>
                      <option value="60">KEDINASAN TERPADU (STIN)</option>
                      <option value="59">KEDINASAN TERPADU (POLTEK SSN)</option>
                      <option value="58">KEDINASAN TERPADU (STMKG)</option>
                      <option value="48">PRESTASI KEDOKTERAN 2021</option>
                      <option value="47">PRESTASI KEDINASAN 2021</option>
                      <option value="43">IUP PPM UGM</option>
                      <option value="42">IUP IR (HI) UGM</option>
                      <option value="35">IUP BIOLOGY UGM</option>
                      <option value="34">IUP COMMUNICATION UGM</option>
                      <option value="18">IUP PSYCHOLOGY UGM</option>
                      <option value="17">IUP MIPA UGM</option>
                      <option value="15">IUP LAW UGM</option>
                      <option value="14">IUP FEB UGM</option>
                      <option value="13">IUP MEDICINE UGM</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Program</label>
                    <select name="program" class="form-control" id="program" required="">
                      <option value="" selected="" disabled="">- Pilih Program -</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <label for="inputNamaPeserta" class="form-label">Kelas</label>
                    <select name="kelas" class="form-control" id="kelas" required="">
                      <option value="" selected="" disabled="">- Pilih Kelas -</option>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label for="inputNamaPeserta" class="form-label">Tempat Program</label>
                    <select name="tempat_program" class="form-control" id="tempat_program" required="">
                      <option value="" selected="" disabled="">- Pilih Tempat Program -</option>
                      <option value="7">Yogyakarta</option>
                      <option value="4">Semarang</option>
                      <option value="3">Depok</option>
                      <option value="2">Malang</option>
                      <option value="1">Surabaya</option>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label for="inputNamaPeserta" class="form-label">Asrama</label>
                    <select name="asrama" class="form-control" id="asrama" required="">
                      <option value="" selected="" disabled=""> - Pilih Asrama - </option>
                      <option value="15"> -</option>
                      <option value="14">Ya</option>
                      <option value="13">Tidak</option>
                      <option value="12">Berdua dengan Peserta Lain (Khusus Supercamp)</option>
                      <option value="11">1 Kamar Sendiri (Khusus Supercamp)</option>
                      <option value="10">Single (1 kamar sendiri)</option>
                      <option value="9">Twin (Berdua dg peserta lain)</option>
                      <option value="8">Fullday (Tidak menginap)</option>
                      <option value="3">Ya</option>
                      <option value="1">Tidak (Kelas Online)</option>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label for="inputNamaPeserta" class="form-label">Saya dapat info bimbel dari</label>
                    <select name="get_information_id" class="form-control" required="">
                <option value="1">Website</option><option value="2">Brosur</option><option value="3">Media Sosial</option><option value="4">Teman atau Saudara</option><option value="7">Try Out</option><option value="8">Pameran</option><option value="9">Lainnya</option>            </select>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body row g-3">
                  <h3 class="card-title">Upload File</h3>
                  <div class="col-lg-6">
                    <label for="inputNamaPeserta" class="form-label">Foto Peserta</label>
                    <div class="form-file">
                      <input type="file" class="form-file-input" id="customFile">
                      <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose file...</span>
                        <span class="form-file-button">Browse</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="inputNamaPeserta" class="form-label">Bukti Pembayaran</label>
                    <div class="form-file">
                      <input type="file" class="form-file-input" id="customFile">
                      <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose file...</span>
                        <span class="form-file-button">Browse</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn saasbox-btn w-100 mt-5" type="submit">Kirim</button>
            </form
          <?php endif ; ?>
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