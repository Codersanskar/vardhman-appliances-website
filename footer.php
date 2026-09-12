
<footer class="footer">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-3">
        <div class="widget m-mb0 m-mt0" data-aos="fade-up">
            <img src="img/val-logo-full.png" alt="Vardhman Appliances Limited" class="img-fluid footer-logo">
            <p>Ground Floor, 43, <br>
            Rajasthani Udyog Nagar,<br>
            Jahangirpuri, New Delhi - 110033</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget m-mb0 m-mt0" data-aos="fade-up">
              <ul class="footer-menu">
                <li><a href="about.php">About Vardhman</a></li>
                <li><a href="manufacturing.php">Manufacturing Excellence</a></li>
                <li><a href="product.php">Our Portfolio</a></li>
                <li><a href="technology.php">Technology</a></li>
                <li><a href="responsibility.php">Sustainability</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget m-mb0 m-mt0" data-aos="fade-up">
              <ul class="footer-menu">
                <li><a href="awards.php">Awards and Recognition</a></li>
                <li><a href="join.php">Careers</a></li>
                <li><a href="investor.php">Investor Relations</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget m-mb0 m-mt0" data-aos="fade-up">
              <ul class="footer-menu">
                <li><a href="disclaimer.php">Disclaimer</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="conditions.php">Terms & Conditions</a></li>  
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="widget m-mb0 m-mt0" data-aos="fade-up">
          <ul class="footer-contact">
            <li><a href="mailto:info@vardhmanappliances.com"><i class="ri-mail-fill"></i> info@vardhmanappliances.com</a></li>
            <!-- <li><a href="#"><i class="ri-mail-fill"></i> enquiry@vardhmanappliances.com</a></li> -->
            <!--<li><a href="#"><i class="ri-smartphone-fill"></i> +91-9150805368</a></li>-->
            <li><a href="tel:+911143970000"><i class="ri-phone-fill"></i> 011-43970000</a></li>
            <li><i class="ri-building-fill"></i> CIN U27509DL2023PLC418176</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row d-lg-flex justify-content-between mt-5">
      <div>
        <!-- <ul class="copyright-link">
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul> -->
        <div class="copyright-text">&copy; Copyright 2024 | Vardhman Appliances Limited</div>
      </div>
    </div>
  </div>
  <img src="img/val-logo-mark-mono.png" alt="" class="img-fluid footer-icon">
</footer>  

</div><!-- smooth-scroll -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/plugins.js"></script>

    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <!-- <script src="https://unpkg.com/smooth-scrollbar@latest/dist/smooth-scrollbar.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/splittext@2.0.0/splitText.min.js"></script> -->
    <script src="js/anime.min.js"></script>
    <script src="js/custom.js?v=1.0"></script>
    
    <script>
        $(document).ready(function(){
            // Handle form submission
            $("#contactForm").submit(function(event){
                // Prevent default form submission
                event.preventDefault();

                // Get form data
                var formData = $(this).serialize();

                // Send form data to PHP script for processing
                $.ajax({
                    type: "POST",
                    url: "mail/mail.php", // Replace with your PHP script file
                    data: formData,
                    success: function(response){
                        // Display success message
                        $("#response").html(response);
                        // Clear form fields
                        $("#contactForm")[0].reset();
                    },
                    error: function(xhr, status, error){
                        // Display error message
                        
                        $("#response").html("Error: " + xhr.responseText);
                    }
                });
            });
            
           
        });
    </script>
    
  </body>
</html>