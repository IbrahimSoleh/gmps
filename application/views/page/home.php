<main id="main">

    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="content">
                        <h3>About <?= $settings['judul_halaman'] ?></h3>
                        <p>
                        Gerakan mahasiswa kepulauan seribu(GMPS) merupakan organisasi baru yang berada di kepulauan seribu  dengan tujuan utama menumbuhkan kesejahteraan di Kepulauan Seribu. Dalam rangka melaksanakan usaha-usaha untuk kesejahteraan sosial di wilayah ini. Untuk mencapai tujuannya, GMPS merencanakan berbagai inisiatif, mulai dari program pendidikan, pelatihan keterampilan, hingga proyek-proyek lingkungan.
                        </p>
                        <!-- <a href="#" class="about-btn">Baca Selengkapnya <i class="bx bx-chevron-right"></i></a> -->
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>VISI</h4>
                                <h6>"Mewujudkan Kepulauan Seribu yang sejahtera, berdaya saing, dan berkelanjutan melalui pengembangan potensi mahasiswa dan partisipasi masyarakat."</h6>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>MISI</h4>
                                <p>
                                    <ol>
                                        <li>Meningkatkan kemampuan kepemimpinan dan organisasi di kalangan mahasiswa.</li>
                                        <li>Melaksanakan program yang meningkatkan kesejahteraan sosial dan ekonomi masyarakat.</li>
                                        <li>Menjalankan program kesadaran lingkungan dan proyek konservasi di kepulauan seribu. </li>
                                        <li>Mengembangkan strategi penggalangan dana untuk mendukung program dan kegiatan GMPS.</li>
                                    </ol>
                                </p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts  section-bg">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Pengunjung/hari</strong>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Fotographer</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Wartawan</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Pekerja</strong></p>
                    </div>
                </div>

            </div>

        </div>
    </section>End Counts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="dokumentasi" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Dokumentasi</h2>
                <p>Dokumentasi Kegiatan GMPS</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                <?php
                foreach ($dokumentasi as $row) :
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" style="width: 100% !important; height: 336px !important; object-fit:cover;" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row->nama ?>"><i class="bx bx-plus"></i></a>
                                <a href="<?= base_url('landingpage/dokumentasi/') . $row->id_dokumentasi ?>#portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="<?= base_url('landingpage/alldokumentasi'); ?>" class="btn-biru text-center">Lihat Semua Postingan</a>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="other" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Coming soon!</h2>
                <p>Quote, Saran, Masukan, Pendapat</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <?php
                    foreach ($quote as $row) :
                    ?>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?= $row->quote; ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url('vendor/quote/') ?><?= $row->profile ?>" class="testimonial-img" alt="">
                                <h3><?= $row->nama ?></h3>
                                <h4><?= $row->pekerjaan ?></h4>
                            </div>
                        </div><!-- End testimonial item -->
                    <?php
                    endforeach;
                    ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact kontak">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat</h3>
                        <p>Panggang Island, Kepulauan Seribu Regency, Jakarta 14530</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p><?= $settings['email'] ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telepon</h3>
                        <p><?= $settings['phone'] ?></p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6676.378558665513!2d106.60024778769866!3d-5.742137004395198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a753dbe722c25%3A0xa4b29a15f0315b41!2sRPTRA%20Tanjong%20Timor!5e0!3m2!1sen!2sid!4v1722950851970!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="<?= base_url('landingpage') ?>" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->