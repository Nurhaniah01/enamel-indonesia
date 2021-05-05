<section id="resume" class="resume section-bg" style="background-color: floralwhite;">
      <div class="container">

      <div class="section-title">
          <h2 align=center>Price List</h2>

        <br>  
        <div class="row">
        <?php 
        $data = $con->query("SELECT * FROM tbl_pelayanan");
        while($pelayanan = $data->fetch_assoc()){
        ?>
            
               <div class="card col-md-4" style="margin-bottom:10px;">
                  <div class="resume-item pb-0 text-center">
                  <div class="card-header" style="background-color:lavender;">
                    <h4><?= $pelayanan['nama_pelayanan'] ?></h4>
                  </div>
                    <div class="card-body">
                    <img src="klinik/admin/assets/images/pelayanan/<?= $pelayanan['foto_ilustrasi']?>" align=center style="width:100px;height: 100px; border-radius:50px;" >
                    <br>
                    <br>
                    <p>                                        
                      Rp. <?=   number_format($pelayanan['harga_pelayanan'],0) ?>                    
                    </p>                    
                    </div>
                  </div>
               </div>
             
           
            <?php } ?>
            
          </div>
          </div>
        </div>

      </div>
    </section>