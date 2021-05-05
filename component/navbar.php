

  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="?page=home"><span>Enamel Indonesia</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="?page=home">Home</a></li>
          <li class="drop-down"><a href="">About Us</a>
            <ul>
              <li><a href="?page=our_service">Our Services</a></li>
              <li><a href="?page=our_story">Our Story</a></li>
              <li><a href="?page=visimisi">Visi & Misi</a></li>
              <li><a href="?page=dokter">Doctor's Profile</a></li>
              <li><a href="?page=gallery">Gallery</a></li>
            </ul>
          </li>
          <li><a href="?page=pricelist">Price List</a></li>
          <li><a href="?page=branch">Branch</a></li>
          <li><a href="?page=news">News</a></li>
          <li><a href="?page=karier">Career</a></li>
          <li><a href="?page=kontak">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>

  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/a.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to</h2>
                <?php
                include 'koneksi.php';
                  $data = $con->query("SELECT * FROM tbl_ket_lokasi");

                  while($lokasi = $data->fetch_array()){
                ?>
                <h2 class="animate__animated animate__fadeInDown">Enamel Indonesia | Dental Clinic</h2>
                <p class="animate__animated animate__fadeInUp"><?= $lokasi['alamat_lokasi'] ?></p>
                <a href="?page=branch" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>
          <?php }?>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/x.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class=" animate__animated animate__fadeInDown" style="color: whitesmoke;">Our Services</h2>
                <div class="row justify-content-between">
                <?php 
                include 'koneksi.php';
                    $data = $con->query("SELECT * FROM tbl_pelayanan");

                    while($pelayanan = $data->fetch_array()){
                ?>
                <div class="col-md-1">
                  <img data-toggle="tooltip" title="<?= $pelayanan['nama_pelayanan'] ?>" src="klinik/admin/assets/images/pelayanan/<?= $pelayanan['foto_ilustrasi']?>" style="width: 70px; height: 70px; border-radius: 20px; margin: 10px">
                </div>
                
                <?php }?>
                </div>
                <br>
                <br>
                <a href="?page=our_service" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item position-relative">
            <div class="carousel-background"><img src="assets/img/b.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class=" animate__animated animate__fadeInDown" style="color: whitesmoke;">Why Us</h2>
                <br>
                <br>
                <div class="row">
                <?php 
                //  include 'koneksi.php';
                    $data = $con->query("SELECT * FROM tbl_keunggulan");

                    while($keunggulan = $data->fetch_array()){
                ?>
                  <div style="width: 50%">
                    <img src="klinik/admin/assets/images/keunggulan/<?= $keunggulan['foto_keunggulan']?>" style="width: 100px; height: 100px; border-radius: 50px;"><br>
                    <h5 style="color:ivory";><?= $keunggulan['nama_keunggulan'] ?></h5>
                    <h9 style="color:ivory";><?= $keunggulan['ket_keunggulan'] ?></h9>
                  </div>
                <?php }?>
                </div>
                <br>
                </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>