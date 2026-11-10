<?php
require_once __DIR__ . '/config.php';
?>
<!-- Footer Section -->
<footer class="site-footer" id="footer">
    <div class="footer-top">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Column 1: About Company -->
                <div class="footer-col footer-col-about">
                    <a href="index.php" class="footer-logo">
                        <img src="assets/img/logo-color.png" alt="Metrics Mart Infoline Pvt Ltd" width="220" height="42">
                    </a>
                    <p class="footer-desc">
                        Metrics Mart Infoline Pvt Ltd is a premier digital marketing and web solutions agency based in Mumbai and Noida. We empower businesses to expand their reach, generate verified leads, and build sustainable online growth.
                    </p>
                    <div class="footer-hours-box">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <div>
                            <strong>Business Hours:</strong>
                            <p><?php echo safeOut(BUSINESS_HOURS); ?></p>
                            <span class="badge-holiday">Sat - Sun: Holiday</span>
                        </div>
                    </div>
                    <div class="footer-social-links">
                        <a href="<?php echo safeOut(SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="<?php echo safeOut(SOCIAL_TWITTER); ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="<?php echo safeOut(SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="<?php echo safeOut(SOCIAL_LINKEDIN); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="<?php echo safeOut(SOCIAL_PINTEREST); ?>" target="_blank" rel="noopener noreferrer" aria-label="Pinterest"><i class="fa-brands fa fa-pinterest"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-col footer-col-links">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-menu">
                        <li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa fa-angle-right"></i> About Us</a></li>
                        <li><a href="service.php"><i class="fa fa-angle-right"></i> All Services</a></li>
                        <li><a href="our-work.php"><i class="fa fa-angle-right"></i> Our Work &amp; Portfolio</a></li>
                        <li><a href="technology.php"><i class="fa fa-angle-right"></i> Technology Stack</a></li>
                        <li><a href="blog.php"><i class="fa fa-angle-right"></i> Insights &amp; Blog</a></li>
                        <!-- <li><a href="faqs.php"><i class="fa fa-angle-right"></i> FAQs</a></li> -->
                        <!-- <li><a href="career.php"><i class="fa fa-angle-right"></i> Careers</a></li> -->
                        <li><a href="contact.php"><i class="fa fa-angle-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Core Services -->
                <div class="footer-col footer-col-services">
                    <h3 class="footer-heading">Core Services</h3>
                    <ul class="footer-menu">
                        <li><a href="seo.php"><i class="fa fa-angle-right"></i> Search Engine Optimization</a></li>
                        <li><a href="local-seo.php"><i class="fa fa-angle-right"></i> Local SEO Services</a></li>
                        <li><a href="ecommerce-seo.php"><i class="fa fa-angle-right"></i> E-Commerce SEO</a></li>
                        <li><a href="google-ads.php"><i class="fa fa-angle-right"></i> Google Ads &amp; PPC</a></li>
                        <li><a href="google-my-business.php"><i class="fa fa-angle-right"></i> Google My Business &amp; Maps</a></li>
                        <li><a href="social-media-marketing.php"><i class="fa fa-angle-right"></i> Social Media Marketing</a></li>
                        <li><a href="web-development.php"><i class="fa fa-angle-right"></i> Web &amp; App Development</a></li>
                        <li><a href="online-reputation-management.php"><i class="fa fa-angle-right"></i> Online Reputation (ORM)</a></li>
                        <li><a href="lead-generation.php"><i class="fa fa-angle-right"></i> Performance Lead Generation</a></li>
                    </ul>
                </div>

                <!-- Column 4: General Support & Contact -->
                <div class="footer-col footer-col-contact">
                    <h3 class="footer-heading">General Support</h3>
                    <div class="footer-contact-block">
                        <span class="contact-label">Email Support</span>
                        <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>" class="contact-value highlight-link">
                            <i class="fa fa-envelope-o"></i> <?php echo safeOut(EMAIL_INFO); ?>
                        </a>
                    </div>
                    <div class="footer-contact-block">
                        <span class="contact-label">Direct Client Helpline</span>
                        <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="contact-value highlight-link">
                            <i class="fa fa-phone"></i> <?php echo safeOut(PHONE_PRIMARY); ?>
                        </a>
                    </div>
                    <div class="footer-contact-block">
                        <span class="contact-label">Landline Office</span>
                        <a href="tel:<?php echo safeOut(PHONE_LANDLINE_RAW); ?>" class="contact-value">
                            <i class="fa fa-phone-square"></i> <?php echo safeOut(PHONE_LANDLINE); ?>
                        </a>
                    </div>
                    <!-- <div class="footer-contact-block">
                        <span class="contact-label">Careers &amp; HR</span>
                        <a href="mailto:<?php echo safeOut(EMAIL_SUPPORT); ?>" class="contact-value">
                            <i class="fa fa-briefcase"></i> <?php echo safeOut(EMAIL_SUPPORT); ?>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Office Locations Section -->
    <div class="footer-offices">
        <div class="footer-container">
            <div class="offices-grid">
                <div class="office-box">
                    <span class="office-tag">India</span>
                    <h4 class="office-title">Head Office (Mumbai)</h4>
                    <p class="office-address">
                        <i class="fa fa-location-arrow"></i>
                        <?php echo safeOut(ADDRESS_MUMBAI); ?>
                    </p>
                    <p class="office-phone">
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?php echo safeOut(PHONE_LANDLINE_RAW); ?>"><?php echo safeOut(PHONE_LANDLINE); ?></a> / 
                        <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a>
                    </p>
                </div>

                <div class="office-box">
                    <span class="office-tag">India</span>
                    <h4 class="office-title">Branch Office (Delhi NCR / Noida)</h4>
                    <p class="office-address">
                        <i class="fa fa-location-arrow"></i>
                        <?php echo safeOut(ADDRESS_NOIDA); ?>
                    </p>
                    <p class="office-phone">
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_SEC_RAW); ?></a>
                    </p>
                </div>

                <div class="office-box">
                    <span class="office-tag">United Arab Emirates</span>
                    <h4 class="office-title">Dubai</h4>
                    <!-- <p class="office-address">
                        <i class="fa fa-globe"></i>
                        Serving clients across Mumbai, Delhi NCR, Bangalore, Dubai, and worldwide with data-driven digital execution.
                    </p>
                    <p class="office-phone">
                        <i class="fa fa-comments"></i>
                        <a href="<?php echo safeOut(WHATSAPP_LINK); ?>" target="_blank" rel="noopener noreferrer">Instant WhatsApp Consultation</a>
                    </p> -->
                    <p class="office-address">
                        <i class="fa fa-location-arrow"></i>
                        <?php echo safeOut(ADDRESS_DUBAI); ?>
                    </p>
                    <p class="office-phone">
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_SEC_RAW); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom" style="display: flex; justify-content:center;">
        <div class="footer-container footer-bottom-inner">
            <p class="copyright-text">
                &copy; <?php echo date("Y"); ?> <?php echo safeOut(SITE_NAME); ?>. All rights reserved.
            </p>
            <!-- <ul class="footer-legal-links">
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="terms-conditions.php">Terms &amp; Conditions</a></li>
                <li><a href="refund-cancellation.php">Refund &amp; Cancellation</a></li>
                 <li><a href="career.php">Careers</a></li> 
                <li><a href="faqs.php">FAQs</a></li>
            </ul> -->
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->
<div class="floating-social-widget">
    <a href="<?php echo safeOut(WHATSAPP_LINK); ?>" target="_blank" rel="noopener noreferrer" class="float-btn float-whatsapp" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="float-tooltip">Chat with us</span>
    </a>
    <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="float-btn float-call" title="Call Us" aria-label="Call Us">
        <i class="fa fa-phone"></i>
        <span class="float-tooltip">Call Now</span>
    </a>
    <button type="button" class="float-btn float-top" id="backToTopBtn" title="Back to top" aria-label="Back to top">
        <i class="fa fa-angle-up"></i>
    </button>
</div>
