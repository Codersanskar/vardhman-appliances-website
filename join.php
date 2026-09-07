<?php include 'header.php'; ?>
    <div class="swiper home-swiper">
        <div class="swiper-wrapper rounded-4">
            <!-- <div class="swiper-slide">
                <div class="home_banner overflow-hidden" style="background-image: url(img/banner-new.webp);">
                    <div class="container-outer">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h4 data-aos="fade-right">Committed to</h4>
                                    <h2 data-aos="fade-right">Manufacturing Excellence</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="swiper-slide">
                <div class="home_banner overflow-hidden" style="background-image: url(img/banner-careers.webp);">
                    <div class="container-outer">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h4 data-aos="fade-right">Join</h4>
                                    <h2 data-aos="fade-right">Our Team</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-slide">
                <div class="home_banner overflow-hidden" style="background-image: url(img/banner-image.webp);">
                    <div class="container-outer">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h4 data-aos="fade-right">DETERMINED</h4>
                                    <h2 data-aos="fade-right">TO ENSURE QUALITY</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-9">
                    <div class="heading-bar text-center">
                        <h2 class="fw-bolder pb-4 fs-3 text-primary" data-aos="fade-up"><span data-splitting class="word-set">LIFE AT VARDHMAN</span></h2>
                        <p class="text-black fs-5 fw-light pb-1" data-aos="fade-up">We value talent and remain committed to nurture a culture of creativity and collaboration. Come, join our dynamic team and explore opportunities to kickstart a fulfilling journey of professional as well as personal growth.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <img src="img/career-img-2.webp" class="img-fluid" data-aos="zoom-in">   
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold text-primary fs-3">JOIN OUR TEAM</h3>
                    <h4 data-aos="fade-up">Be a part of our dynamic team and explore exciting career opportunities!</h4>
                    <div class="contact-form mt-5">
                        <h3><span data-splitting class="word-set" data-aos="fade-up"><span data-splitting">Query Form</span></span></h3>
                        <form id="contactForm">
                            <input type="hidden" name="type" value="Careers Form">    
                            <div class="form-group">
                              <label for="">Full name <span>*</span></label>
                              <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                              <label for="">Phone <span>*</span></label>
                              <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                              <label for="">Email <span>*</span></label>
                              <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                              <label for="">Interest <span>*</span></label>
                              <input type="text" class="form-control" name="interest" required>
                            </div>
                            <div class="form-group" data-aos="fade-up">
                                <label for="">Resume Link <span>*</span></label>
                                <input type="text" class="form-control" name="cv_link" required>
                                <p style="font-size: 12px;" class="mt-15 text-sm fw-light">Upload Resume in Google/Microsoft Drive and share the link</p>
                            </div>
                            <div class="form-group mt-5" data-aos="fade-up">
                                <button type="submit" class="btn btn-primary btn-icon">Send Message <i class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </form>
                        
                        <div id="response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


<?php include 'footer.php'; ?>