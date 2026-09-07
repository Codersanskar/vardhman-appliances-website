<?php include 'header.php'; ?>
<?php include 'investor-inc.php'; ?>
    <div class="swiper home-swiper">
        <div class="swiper-wrapper rounded-4">
            <div class="swiper-slide">
                <div class="home_banner overflow-hidden" style="background-image: url(img/banner-investor.webp);">
                    <div class="container-outer">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h4 data-aos="fade-right">Value to our</h4>
                                    <h2 data-aos="fade-right">Stakeholders</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-9">
                    <div class="heading-bar text-center">
                        <h2 class="fw-bolder pb-2 fs-3 text-primary" data-aos="fade-up"><span data-splitting class="word-set">Investor Relations</span></h2>
                        <p class="text-black fs-5 fw-light pb-1" data-aos="fade-up">Our commitment to transparent communication with our shareholders and the investment community — financial performance, governance, disclosures and shareholder information, in one place.</p>
                    </div>
                </div>
            </div>

            <div class="ir-grid" data-aos="fade-up">
                <a href="investor-financial-performance.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-line-chart-line"></i></div>
                    <h5>Financial Performance</h5>
                    <p>Quarterly and annual results, audited and unaudited financial statements.</p>
                </a>
                <a href="investor-corporate-governance.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-government-line"></i></div>
                    <h5>Corporate Governance</h5>
                    <p>Board composition, committee charters, and governance policies.</p>
                </a>
                <a href="investor-statutory-filings.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-file-shield-2-line"></i></div>
                    <h5>Statutory Filings &amp; Disclosures</h5>
                    <p>Regulatory filings and disclosures made in the ordinary course of business.</p>
                </a>
                <a href="investor-shareholder-information.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-team-line"></i></div>
                    <h5>Shareholder Information</h5>
                    <p>Shareholding pattern, registrar &amp; transfer agent details, and investor grievance redressal.</p>
                </a>
                <a href="investor-stock-information.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-stock-line"></i></div>
                    <h5>Stock Information</h5>
                    <p>Share price, trading data and listing details.</p>
                </a>
                <a href="investor-unclaimed-dividend.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-hand-coin-line"></i></div>
                    <h5>Unclaimed Dividend</h5>
                    <p>Details of unclaimed dividend amounts and the process to claim them.</p>
                </a>
                <a href="investor-iepf.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-safe-2-line"></i></div>
                    <h5>IEPF</h5>
                    <p>Investor Education and Protection Fund related information.</p>
                </a>
                <a href="investor-faqs.php" class="ir-tile">
                    <div class="ir-icon"><i class="ri-question-answer-line"></i></div>
                    <h5>Investor FAQs</h5>
                    <p>Answers to common questions raised by our shareholders and investors.</p>
                </a>
                <a href="about.php#leadership" class="ir-tile">
                    <div class="ir-icon"><i class="ri-user-star-line"></i></div>
                    <h5>Leadership &amp; Promoters</h5>
                    <p>Board of Directors, promoters and the management team steering Vardhman Group.</p>
                </a>
            </div>

            <div class="ir-note" data-aos="fade-up">
                This section is being built out in phases. Documents and disclosures will be published here as they are issued and approved by the company.
            </div>
        </div>
    </div>

    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-6">
                    <div class="contact-form mt-5">
                        <h3><span data-splitting class="word-set" data-aos="fade-up"><span data-splitting class="word-set">Investor Query Form</span></span></h3>
                        <form id="contactForm">
                                <input type="hidden" name="type" value="Investor Form">
                            <div class="form-group">
                              <label for="">Full name <span>*</span></label>
                              <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                              <label for="">Company <span>*</span></label>
                              <input type="text" class="form-control" name="company" required>
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
                              <label for="">Purpose of interest <span>*</span></label>
                              <textarea class="form-control" name="message" cols="40" row="10" required></textarea>
                            </div>
                            <div class="form-group">
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
