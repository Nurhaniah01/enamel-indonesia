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