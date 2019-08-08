<?php $this->load->view('layout/header');?>
<!--::banner part start::-->
    <section class="banner_part" style="background-image: url('<?php echo base_url();?>assets/img/banner_bg1.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">        
                            <h1>About <span>Us</span></h1>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!--::banner part start::-->

    <!--::about_us part start::-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center">
                        <h5>Tentang Project kami</h5>
                        <?php
                            foreach ($about as $key => $value) {
                        ?>
                        <h2><?php echo $value->judul; ?></h2>
                        <p><?php echo $value->deskripsi; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->
    <div class="container">
        <img src="<?php echo base_url();?>assets/img/kelapa.png">
    </div>
   

    <!--::review_part part start::-->
    <section class="review_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-8">
                  
                        <div class="review_part_text text-center">
                            <h2>Tujuan adanya web ini adalah</h2>
                            <p>Sistem ini dibuat agar petani bisa memanajemen keuangan nya setelah panen, dan memastikan hasil panen tersebut berguna untuk kepentingan bagi kedepannya.</p>
                        </div>
                    

                </div>
            </div>
        </div>
    </section>
    <!--::review_part part end::-->
<?php $this->load->view('layout/footer');?>