<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h6>Enamel Indonesia | Dental Clinic</h6>
            <br>
            <br>
            <p>
            <?php
              include 'koneksi.php';
                $data = $con->query("SELECT * FROM tbl_contact");

                while($contact = $data->fetch_array()){
            ?>
              <strong>Phone:</strong> <?= $contact['notelp'] ?><br>
              <strong>Email:</strong> <?= $contact['email'] ?><br>
            </p>
            <br>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/enamelindonesia.dc/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <?php } ?>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=pricelist">Price List</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=branch">Branch</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=news">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=karier">Career</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About Us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=our_service">Our Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=our_story">Our Story</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=visimisi">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=dokter">Doctor's Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=gallery">Gallery</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Search</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Enamel Indonesia | Dental Clinic</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
        Designed by <a href="https://bootstrapmade.com/">Nurhaniah</a>
      </div>
    </div>
  </footer>