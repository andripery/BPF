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
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaW9TVrV2GSZF0a1dJ8SG427cioCCJJE&callback=initMap">
        </script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Saran dan Masukan</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
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