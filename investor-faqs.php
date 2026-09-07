<?php include 'header.php'; ?>
<?php include 'investor-inc.php'; ?>
<div class="section">
    <div class="container">
        <div class="ir-breadcrumb"><a href="investor.php">Investor Relations</a> / Investor FAQs</div>
        <div class="row justify-content-center">
            <div class="col col-lg-9">
                <div class="heading-bar text-center">
                    <h2 class="fw-bolder pb-2 fs-3 text-primary" data-aos="fade-up"><span data-splitting class="word-set">Investor FAQs</span></h2>
                    <p class="text-black fs-5 fw-light pb-1" data-aos="fade-up">Answers to common questions raised by our shareholders and investors.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col col-lg-9">
                <div class="accordion" id="irFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#irFaq1">
                                Who do I contact for investor-related queries?
                            </button>
                        </h2>
                        <div id="irFaq1" class="accordion-collapse collapse show" data-bs-parent="#irFaqAccordion">
                            <div class="accordion-body">You can reach us via the Investor Query Form on this page, or write to investors@vardhmanappliances.com.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#irFaq2">
                                Where can I find the company's financial results?
                            </button>
                        </h2>
                        <div id="irFaq2" class="accordion-collapse collapse" data-bs-parent="#irFaqAccordion">
                            <div class="accordion-body">Quarterly and annual results will be published under the Financial Performance section as they are announced.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#irFaq3">
                                Is Vardhman Group currently listed on a stock exchange?
                            </button>
                        </h2>
                        <div id="irFaq3" class="accordion-collapse collapse" data-bs-parent="#irFaqAccordion">
                            <div class="accordion-body">This will be updated here as the company's listing status progresses.</div>
                        </div>
                    </div>
                </div>
                <div class="ir-note">Placeholder content — more questions will be added as they come up.</div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
