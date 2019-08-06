<?php $this->load->view('layout/header');?>

  <!--::banner part start::-->
    <section class="banner_part" style="background-image: url('<?php echo base_url();?>assets/img/banner_bg.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h5>Model Photography</h5>
                            <h1>Creative <span>Studio</span></h1>
                            <p>Capturing moments from today</p>
                            <a href="<?php echo base_url();?>assets/#" class="btn_1">view work</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!--::banner part start::-->

    <!--::about_us part start::-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center">
                        <h5>About our Web</h5>
                        <h2>Perkembangan Perkebunan Kelapa Sawit di Riau</h2>
                        <p>Perkembangan perkebunan kelapa sawit di Provinsi Riau memberikan peran penting
dalam kesejahteraan masyarakatnya dan kemajuan daerah, dilihat dari profibilitas kelapa sawit
yang tinggi. Adanya peningkatan luas lahan dari tahun ke tahun yang artinya mulai banyak
pihak yang berinvestasi pada perkebunan kelapa sawit, baik dari perkebunan swasta ataupun
perkebunan rakyat yang keduanya sama-sama memiliki peran penting disektor pertanian
Provinsi Riau. Dapat dilihat dari kontribusi pertaniannya terhadap Produk Domestik Regional
Bruto (PDRB) yang cukup besar, di tahun 1990 sebesar 25,47%, tahun 2000 sebesar 43,48%,
dan tahun 2009 sebesar 33,86%. Sedangkan kontribusi pertanian terhadap lapangan kerja juga
masih cukup besar yaitu, pada tahun 1990 mencapai angka 58,13% dan pada tahun 2010
mencapai angka 43,89%. Pada tabel 1.3 berikut dapat dlihat perkembangan luas perkebunan
kelapa sawit Provinsi Riau dari tahun 1984-2009 (dalam Chalid, 2011) .</p>
                        <a href="<?php echo base_url();?>assets/#" class="btn_2">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-2">
                    <div class="section_tittle">
                        <p>recent project</p>
                        <h2>Check latest work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="portfolio-filter filters">
                        <ul>
                            <li class="active" data-filter="all">Semua Foto</li>
                            <li data-filter="1">Pengelolaan Sawit</li>
                            <li data-filter="2">fashion</li>
                            <li data-filter="3">portrait</li>
                            <li data-filter="4">magazine</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item filtr-container">
                        <a href="<?php echo base_url();?>assets/portfolio_details.html" class="img-gal filtr-item" data-category="1"
                            style="background-image: url('<?php echo base_url();?>assets/img/gallery/kelolasawit1.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url();?>assets/portfolio_details.html" class="img-gal width-1 filtr-item" data-category="1"
                            style="background-image: url('<?php echo base_url();?>assets/img/gallery/kelolasawit2.jpg')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url();?>assets/portfolio_details.html" class="img-gal width-2 filtr-item" data-category="3"
                            style="background-image: url('<?php echo base_url();?>assets/img/gallery/gallery_item_3.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url();?>assets/portfolio_details.html" class="img-gal width-2 filtr-item" data-category="4"
                            style="background-image: url('<?php echo base_url();?>assets/img/gallery/gallery_item_4.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url();?>assets/portfolio_details.html" class="img-gal width-1 filtr-item" data-category="1"
                            style="background-image: url('<?php echo base_url();?>assets/img/gallery/gallery_item_5.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url();?>assets/portfolio_details.html" class="img-gal filtr-item" data-category="2"
                            style="background-image: url('<?php echo base_url();?>assets/img/gallery/gallery_item_6.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->

    <!--::our_service part start::-->
    <section class="our_service padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>our service</p>
                        <h2>what we offer</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center filtr-container">
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        <span class="flaticon-love-and-romance"></span>
                        <h4>wedding photography</h4>
                        <p>World the end of summer the sweltering heat makes human
                            sweat in the night and man plants and trees wilt even</p>
                        <a href="<?php echo base_url();?>assets/#" class="btn_1">read more</a>
                    </div>
                    <div class="single_offer_img d-none d-md-block">
                        <img src="<?php echo base_url();?>assets/img/single_offer_img_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single_offer_img d-none d-md-block">
                        <img src="<?php echo base_url();?>assets/img/single_offer_img_1.png" alt="">
                    </div>
                    <div class="single_offer_text text-center nature">
                        <span class="flaticon-leaf"></span>
                        <h4>Nature photography</h4>
                        <p>that the monsoon clouds are soon coming, there is a
                            strange silence in the ears, the sky gets darker and
                            darker, the flash of lightning illuminates the dark
                            skies all time needs band the sound of thunder fills the heart with fear.</p>
                        <a href="<?php echo base_url();?>assets/#" class="btn_1">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::review_part part start::-->
    <section class="review_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5">
                    <div class="review_img">
                        <img src="<?php echo base_url();?>assets/img/review_bg.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review_slider owl-carousel">
                        <div class="review_part_text">
                            <h5>Testimnonials</h5>
                            <h2>With efficiency to
                                unlock more opportunities</h2>
                            <p>Saw shall light. Us their to place had creepeth day
                                night great wher appear to. Hath, called, sea called,
                                gathering wherein open make living Female itself
                                gathering man. Waters and, two. Bearing. Saw she'd
                                all let she'd lights abundantly blessed.</p>
                            <h3>Mitchel Jeferson, <span>CEO of softking</span> </h3>
                        </div>
                        <div class="review_part_text">
                            <h2>With efficiency to
                                unlock more opportunities</h2>
                            <p>Saw shall light. Us their to place had creepeth day
                                night great wher appear to. Hath, called, sea called,
                                gathering wherein open make living Female itself
                                gathering man. Waters and, two. Bearing. Saw she'd
                                all let she'd lights abundantly blessed.</p>
                            <h3>Mitchel Jeferson, <span>CEO of softking</span> </h3>
                        </div>
                        <div class="review_part_text">
                            <h2>With efficiency to
                                unlock more opportunities</h2>
                            <p>Saw shall light. Us their to place had creepeth day
                                night great wher appear to. Hath, called, sea called,
                                gathering wherein open make living Female itself
                                gathering man. Waters and, two. Bearing. Saw she'd
                                all let she'd lights abundantly blessed.</p>
                            <h3>Mitchel Jeferson, <span>CEO of softking</span> </h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--::review_part part end::-->

    <!--::pricing part start::-->
    <section class="pricing_part section_padding home_page_pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>Price table</p>
                        <h2>pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="<?php echo base_url();?>assets/img/icon/feature_icon_1.svg" alt="">
                            <p>Standard</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$50.00 <span>/ mo</span></h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="<?php echo base_url();?>assets/#" class="btn_2">book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="<?php echo base_url();?>assets/img/icon/feature_icon_2.svg" alt="">
                            <p>Standard</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$50.00 <span>/ mo</span></h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="<?php echo base_url();?>assets/#" class="btn_2">book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="<?php echo base_url();?>assets/img/icon/feature_icon_3.svg" alt="">
                            <p>Standard</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$50.00 <span>/ mo</span></h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="<?php echo base_url();?>assets/#" class="btn_2">book Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::pricing part end::-->

    <!--::blog part start::-->
    <section class="catagory_post padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section_tittle">
                        <p>our blog</p>
                        <h2>Latest story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="<?php echo base_url();?>assets/img/blog/blog_1.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5><span> By Michal</span> / March 30 , 2019</h5>
                            <a href="<?php echo base_url();?>assets/blog.html">
                                <h3>Mad whales gathering open can't</h3>
                            </a>
                            <p>Is life form dominion under very seasons together
                                them divide so, she'd bearing sixth </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="<?php echo base_url();?>assets/img/blog/blog_2.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5><span> By Michal</span> / March 30 , 2019</h5>
                            <a href="<?php echo base_url();?>assets/blog.html">
                                <h3>Creepeth grass brought over man</h3>
                            </a>
                            <p>Is life form dominion under very seasons together
                                them divide so, she'd bearing sixth </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="<?php echo base_url();?>assets/img/blog/blog_3.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5><span> By Michal</span> / March 30 , 2019</h5>
                            <a href="<?php echo base_url();?>assets/blog.html">
                                <h3>Mad whales gathering open Evening</h3>
                            </a>
                            <p>Is life form dominion under very seasons together
                                them divide so, she'd bearing sixth </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog part end::-->

<?php $this->load->view('layout/footer');?>