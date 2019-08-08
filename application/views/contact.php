<?php $this->load->view('layout/header');?>

<!--::banner part start::-->
    <section class="banner_part" style="background-image: url('<?php echo base_url();?>assets/img/banner_bg1.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">        
                            <h1>Contact<span> Us</span></h1>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!--::banner part start::-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Saran dan Masukan</h2>
        </div>
        <div class="col-lg-8">
          <!-- <form method="POST" action="<?php echo site_url('blog/insertblog'); ?>">
                                <input type="hidden" name="id_blog" value="<?php if(isset($blog->id_blog)) {echo $blog->id_blog;} ?>">
                                <label for="email_address">Judul</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="" name="judul" value="<?php if(isset($blog->judul)) {echo $blog->judul;} ?>">
                                    </div>
                                </div>
                                <label for="email_address">Deskripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="" name="deskripsi" value="<?php if(isset($blog->deskripsi)) {echo $blog->deskripsi;} ?>">
                                    </div>
                                </div>
                                <label for="email_address">Tanggal</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="" name="tanggal" value="<?php if(isset($blog->tanggal)) {echo $blog->tanggal;} ?>">
                                    </div>
                                </div>
                                <label for="email_address">Bulan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="" name="bulan" value="<?php if(isset($blog->bulan)) {echo $blog->bulan;} ?>">
                                    </div>
                                </div>
                                <label for="email_address">Gambar</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="" name="gambar" value="<?php if(isset($blog->gambar)) {echo $blog->gambar;} ?>">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
              </form> -->
          <!-- <form class="form-contact contact_form" action="<?php echo site_url('kontak/insertkontak'); ?>" method="POST" id="contactForm"> -->
          <form method="POST" action="<?php echo site_url('kontak/insertkontakk'); ?>">
            <input type="hidden" name="id_kontak" value="<?php if(isset($kontak->id_kontak)) {echo $kontak->id_kontak;} ?>">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="pesan" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nama" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button-contactForm btn_2">Kirim </button>
            </div>
          </form>

        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Pekanbaru, Riau</h3>
              <p>Rumbai, 28265</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>(0761) 53939</h3>
              <p>Senin s/d Jumat 7am to 4pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>17tib@mahasiswa.pcr.ac.id</h3>
              <p>Kirimkan kami saran dan masukan yang membangun kapan saja!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <?php $this->load->view('layout/footer');?>