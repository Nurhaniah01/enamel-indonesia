<section id="services" class="services section-bg" style="background-image: url(assets/img/a.jpg); background-size: 100%;">
      <div class="container">

        <div class="section-title">
          <h2 align=center>Our Services</h2>
          <p>Layanan yang terdapat di Enamel Indonesia Dental Clinic Marapalam</p>
        </div>

        <div class="row">
        <?php 
        $data = $con->query("SELECT * FROM tbl_pelayanan");
        while($pelayanan = $data->fetch_assoc()){
        ?>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="icon-box mb-3" style="height: 250px;">
              <img src="klinik/admin/assets/images/pelayanan/<?= $pelayanan['foto_pelayanan']?>" alt="" class="img-fluid">
              <hr>
              <h4 class="title" align=center><a href="?page=info_service&id=<?= $pelayanan['id_pelayanan']?>"><?= $pelayanan['nama_pelayanan'] ?></a></h4>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services section-bg" style="background-color:lightblue; background-size: 100%;">
      <div class="container">

        <div class="section-title">
          <h2 align=center>Why Us</h2>
        </div>

                <div class="row" align=center>
                <?php 
                 include 'koneksi.php';
                    $data = $con->query("SELECT * FROM tbl_keunggulan");

                    while($keunggulan = $data->fetch_array()){
                ?>
                  <div style="width: 50%" ;>
                    <img src="klinik/admin/assets/images/keunggulan/<?= $keunggulan['foto_keunggulan']?>" style="width: 150px; height: 150px; border-radius: 20px;"><br>
                    <br>
                    <h5><?= $keunggulan['nama_keunggulan'] ?></h5>
                    <h9><?= $keunggulan['ket_keunggulan'] ?></h9>
                  </div>
                <?php }?>
            </div>
        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="testimonials" class="testimonials section-bg" style="background-image: url(assets/img/a.jpg); background-size: 100%;">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>  
        </div>
        
        <div class="owl-carousel testimonials-carousel p-0">
        <?php 
        $data = $con->query("SELECT * FROM tbl_testimoni");
        while($testimoni = $data->fetch_assoc()){
        ?>
        <div class="testimonial-item" style="min-height: 25px;">
          <p style="min-height: 150px;">
              <i class="bx bxs-quote-alt-left quote-icon-left "></i>
              <span class="text-white"><?= $testimoni['ket_testimoni'] ?></span>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img src="klinik/admin/assets/images/testimoni/<?= $testimoni['foto_testimoni']?>" alt="" class="testimonial-img">
              <hr>
              <h3><?= $testimoni['nama_user'] ?></h3>
              <h4><?= $testimoni['alamat_user'] ?></h4>
            </div>
          <?php } ?>
        </div> 
        </div>

    </section> <!-- End More Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team" style="background-color:lightblue; background-size: 100%;">
      <div class="container">

        <div class="section-title">
          <h2>News</h2>
          <p>Promo yang ada di Enamel Indonesia Dental Clinic Marapalam Padang</p>
        </div>

        <div class="row">
        <?php 
        $data = $con->query("SELECT * FROM tbl_news");
        foreach($data as $news){
        ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member">
              <img src="./klinik/admin/assets/images/news/<?= $news['foto_news']?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?= $news['nama_news'] ?></h4>
                  <span>Tanggal 5-10 April 2021</span>
                  <div class="portfolio-links">
                  <a href="?page=info_news&id=<?= $news['id_news']?>" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch infos">

          <div class="row">

          <div class="container">
            <div class="section-title">
          <h2 class="text-center">Contact Us</h2>
            </div>
          </div>
              <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                <i class="bx bx-map"></i>
                <?php
                include 'koneksi.php';
                  $data = $con->query("SELECT * FROM tbl_contact");

                  while($contact = $data->fetch_array()){
                ?>
                <h4>Address</h4>
                <p><?= $contact['alamat_contact'] ?></p>
              </div>
              <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p><?= $contact['notelp'] ?></p>
                <p>
                <a href="https://wa.me/6285765674596" class="btn btn-success">
                    <img src="assets/img/wa.png">
                    <span> Chat Us</span>
                    </a>
                </p>     
              </div>
              <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p><?= $contact['email'] ?></p>
              </div>
              <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Sat: 9AM to 9PM</p>
              </div>
            </div>
            <?php } ?>
        </div>

        <div class="col-lg-6">
          <div class="section-title">
          <h2 align=center>Kritik & Saran</h2>
        </div>
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" name="send" class="btn btn-outline-info">Send Message</button></div>
            </form>
            </div>
            <?php
            require "koneksi.php";
            if (isset($_POST['send'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $subject = $_POST['subject'];
              $message = $_POST['message'];
              $simpan = $con->query("INSERT INTO tbl_saran (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
              if($simpan == TRUE)
              {
                echo"<script>alert(berhasil)</script>";
              }else{
                echo"<script>alert(gagal)</script>";
              }
            }
           ?>
         </div>
          

        </div>

      </div>
    </section><!-- End Contact Us Section -->