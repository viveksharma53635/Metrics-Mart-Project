<?php
require_once __DIR__ . '/config.php';

// Detect current active page
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Top Contact Bar -->
<div class="top-bar">
    <div class="top-bar-container">
        <div class="top-bar-left">
            <div class="top-bar-item">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span><strong>Open:</strong> <?php echo safeOut(BUSINESS_DAYS_SHORT); ?></span>
            </div>
            <div class="top-bar-socials">
                <a href="<?php echo safeOut(SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?php echo safeOut(SOCIAL_TWITTER); ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter" title="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="<?php echo safeOut(SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo safeOut(SOCIAL_LINKEDIN); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="<?php echo safeOut(SOCIAL_PINTEREST); ?>" target="_blank" rel="noopener noreferrer" aria-label="Pinterest" title="Pinterest"><i class="fa-brands fa fa-pinterest"></i></a>
</div>
        </div>
        <div class="top-bar-right">
            <div class="top-bar-item">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <strong>Email:</strong> <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>"><?php echo safeOut(EMAIL_INFO); ?></a>
            </div>
            <div class="top-bar-item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <strong>Call Now:</strong> <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="site-header" id="siteHeader">
    <div class="header-container">
        <div class="header-left">
            <a href="index.php" class="brand-logo" aria-label="Metrics Mart Infoline Home">
                <img src="assets/img/logo-color.png" alt="Metrics Mart Infoline Pvt Ltd" width="220" height="42" class="logo-image">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="desktop-nav" aria-label="Main Navigation">
            <ul class="nav-list">
                <li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                    <a href="index.php" class="nav-link">Home</a>
                </li>

                <!-- Company Dropdown -->
                <li class="nav-item has-dropdown <?php echo in_array($currentPage, ['about.php', 'faqs.php', 'career.php', 'free-analysis.php']) ? 'active' : ''; ?>">
                    <a href="about.php" class="nav-link dropdown-toggle" aria-expanded="false" aria-haspopup="true">
                        Company <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="free-analysis.php">Free Analysis</a></li>
                        <li><a href="about.php#mission">Mission &amp; Vision</a></li>
                        <li><a href="index.php#why-us">Why Choose Us</a></li>
                        <!-- <li><a href="faqs.php">Frequently Asked Questions</a></li> -->
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </li>

                <!-- Services Mega-Menu -->
                <li class="nav-item has-mega-menu <?php echo in_array($currentPage, [
                    'service.php', 'seo.php', 'google-my-business.php', 'local-seo.php', 
                    'ecommerce-seo.php', 'google-ads.php', 'google-promotion.php', 
                    'online-reputation-management.php', 'performance-marketing.php', 
                    'facebook-marketing.php', 'instagram-marketing.php', 'email-marketing.php', 
                    'social-media-marketing.php', 'social-media-optimization.php', 'lead-generation.php',
                    'web-development.php', 'web-design.php', 'content-marketing.php'
                ]) ? 'active' : ''; ?>">
                    <a href="service.php" class="nav-link mega-toggle" aria-expanded="false" aria-haspopup="true">
                        Services <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <div class="mega-menu" role="region" aria-label="Services Submenu">
                        <div class="mega-menu-inner">
                            <div class="mega-columns-grid mega-services-grid">
                                <!-- Column 1: Digital Marketing -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="service.php#digital-marketing">Digital Marketing</a></h4> 
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="seo.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Search Engine Optimization (SEO)</a></li>
                                        <li><a href="social-media-optimization.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Social Media Optimization (SMO)</a></li>
                                        <li><a href="google-ads.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Paid Ads &amp; Google Ads</a></li>
                                        <li><a href="email-marketing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Email Marketing</a></li>
                                        <li><a href="performance-marketing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Performance Marketing</a></li>
                                        <li><a href="lead-generation.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Lead Generation Solutions</a></li>
                                        <li><a href="online-reputation-management.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Online Reputation (ORM)</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2: Search Optimization -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="seo.php">Search Optimization</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="seo.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Website SEO Services</a></li>
                                        <li><a href="local-seo.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Local SEO for Businesses</a></li>
                                        <li><a href="ecommerce-seo.php"><i class="fa fa-angle-right" aria-hidden="true"></i> E-Commerce SEO</a></li>
                                        <li><a href="google-my-business.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Google My Business &amp; Maps</a></li>
                                        <li><a href="google-promotion.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Google Promotion &amp; Ranking</a></li>
                                        <li><a href="service.php"><i class="fa fa-angle-right" aria-hidden="true"></i> View All SEO Capabilities</a></li>
                                    </ul>
                                </div>

                                <!-- Column 3: Web & Tech Development -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-laptop-code" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="web-development.php">Web &amp; Tech Development</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="web-development.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Website Development</a></li>
                                        <li><a href="web-development.php#php"><i class="fa fa-angle-right" aria-hidden="true"></i> Custom PHP Development</a></li>
                                        <li><a href="web-development.php#ecommerce"><i class="fa fa-angle-right" aria-hidden="true"></i> E-Commerce Development</a></li>
                                        <li><a href="web-development.php#wordpress"><i class="fa fa-angle-right" aria-hidden="true"></i> WordPress Development</a></li>
                                        <li><a href="web-design.php"><i class="fa fa-angle-right" aria-hidden="true"></i> UI/UX &amp; Web Design</a></li>
                                        <li><a href="web-development.php#maintenance"><i class="fa fa-angle-right" aria-hidden="true"></i> Website Maintenance</a></li>
                                    </ul>
                                </div>

                                <!-- Column 4: Social Media & Ads -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa-solid fa-share-nodes" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="social-media-marketing.php">Social Media &amp; Ads</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="social-media-marketing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Social Media Marketing</a></li>
                                        <li><a href="facebook-marketing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Facebook Marketing</a></li>
                                        <li><a href="instagram-marketing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Instagram Growth Marketing</a></li>
                                        <li><a href="content-marketing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Content Marketing</a></li>
                                        <li><a href="social-media-optimization.php"><i class="fa fa-angle-right" aria-hidden="true"></i> SMO &amp; Profile Growth</a></li>
                                        <li><a href="lead-generation.php"><i class="fa fa-angle-right" aria-hidden="true"></i> B2B &amp; B2C Paid Campaigns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mega-footer-bar">
                            <span>Ready to scale your business?</span>
                            <a href="contact.php" class="mega-cta-link">Request a Free Audit &amp; Strategy Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>

                <!-- Technology Mega-Menu -->
                <li class="nav-item has-mega-menu <?php echo in_array($currentPage, [
                    'technology.php', 'reactjs.php', 'angularjs.php', 'bootstrap.php',
                    'dbms.php', 'sql-server.php', 'mysql.php',
                    'aws.php', 'azure.php', 'gcp.php',
                    'ios-development.php', 'android-development.php',
                    'wordpress-development.php', 'php-development.php', 'python-development.php'
                ]) ? 'active' : ''; ?>">
                    <a href="technology.php" class="nav-link mega-toggle" aria-expanded="false" aria-haspopup="true">
                        Technology <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <div class="mega-menu" role="region" aria-label="Technology Submenu">
                        <div class="mega-menu-inner">
                            <div class="mega-columns-grid mega-tech-grid">
                                <!-- Column 1: Frontend -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="technology.php#frontend">Frontend</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="reactjs.php"><i class="fa fa-angle-right" aria-hidden="true"></i> ReactJS</a></li>
                                        <li><a href="angularjs.php"><i class="fa fa-angle-right" aria-hidden="true"></i> AngularJS</a></li>
                                        <li><a href="bootstrap.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Bootstrap</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2: Backend -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-server" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="technology.php#backend">Backend</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="dbms.php"><i class="fa fa-angle-right" aria-hidden="true"></i> DBMS</a></li>
                                        <li><a href="sql-server.php"><i class="fa fa-angle-right" aria-hidden="true"></i> SQL Server DB Development</a></li>
                                        <li><a href="mysql.php"><i class="fa fa-angle-right" aria-hidden="true"></i> My SQL</a></li>
                                    </ul>
                                </div>

                                <!-- Column 3: Platforms -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-cloud" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="technology.php#platforms">Platforms</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="aws.php"><i class="fa fa-angle-right" aria-hidden="true"></i> AWS</a></li>
                                        <li><a href="azure.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Azure</a></li>
                                        <li><a href="gcp.php"><i class="fa fa-angle-right" aria-hidden="true"></i> GCP</a></li>
                                    </ul>
                                </div>

                                <!-- Column 4: Mobile Development -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-mobile-screen-button" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="technology.php#mobile">Mobile Development</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="ios-development.php"><i class="fa fa-angle-right" aria-hidden="true"></i> iOS</a></li>
                                        <li><a href="android-development.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Android</a></li>
                                    </ul>
                                </div>

                                <!-- Column 5: CMS & E-Commerce -->
                                <div class="mega-column">
                                    <div class="mega-column-header">
                                        <div class="mega-col-icon"><i class="fa fa-cart-shopping" aria-hidden="true"></i></div>
                                        <h4 class="mega-column-title"><a href="technology.php#cms-ecommerce">CMS &amp; E-Commerce</a></h4>
                                    </div>
                                    <ul class="mega-column-links">
                                        <li><a href="wordpress-development.php"><i class="fa fa-angle-right" aria-hidden="true"></i> WordPress</a></li>
                                        <li><a href="php-development.php"><i class="fa fa-angle-right" aria-hidden="true"></i> PHP</a></li>
                                        <li><a href="python-development.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Python</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mega-footer-bar">
                            <span>Looking for custom technology solutions?</span>
                            <a href="contact.php" class="mega-cta-link">Consult Our Technology Specialists <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>

                <!-- Portfolio / Our Work -->
                <li class="nav-item <?php echo in_array($currentPage, ['our-work.php', 'portfolio.php']) ? 'active' : ''; ?>">
                    <a href="our-work.php" class="nav-link">Our Work</a>
                </li>

                <!-- Industries Dropdown -->
                <li class="nav-item has-dropdown <?php echo in_array($currentPage, [
                    'industry.php', 'finance-banking-industry.php', 'education-industry.php',
                    'healthcare-industry.php', 'igaming-industry.php', 'b2b-industry.php',
                    'ecommerce-industry.php', 'travel-tourism-industry.php'
                ]) ? 'active' : ''; ?>">
                    <a href="industry.php" class="nav-link dropdown-toggle" aria-expanded="false" aria-haspopup="true">
                        Industries <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="industry.php"><i class="fa fa-th-large" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> Industries We Serve</a></li>
                        <li style="border-top:1px solid #f1f5f9;margin:4px 0;padding:0;"></li>
                        <li><a href="finance-banking-industry.php"><i class="fa fa-landmark" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> Finance &amp; Banking</a></li>
                        <li><a href="education-industry.php"><i class="fa fa-graduation-cap" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> Education</a></li>
                        <li><a href="healthcare-industry.php"><i class="fa fa-stethoscope" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> Healthcare &amp; Medical</a></li>
                        <li><a href="igaming-industry.php"><i class="fa fa-gamepad" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> iGaming</a></li>
                        <li><a href="b2b-industry.php"><i class="fa fa-handshake" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> B2B</a></li>
                        <li><a href="ecommerce-industry.php"><i class="fa fa-shopping-cart" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> eCommerce</a></li>
                        <li><a href="travel-tourism-industry.php"><i class="fa fa-plane" style="color:var(--brand-gold);margin-right:6px;font-size:0.78rem;"></i> Travel &amp; Tourism</a></li>
                    </ul>
                </li>

                <!-- Blog -->
                <li class="nav-item <?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>">
                    <a href="blog.php" class="nav-link">Blog</a>
                </li>

                <!-- Contact -->
                <!-- <li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li> -->
            </ul>
        </nav>

        <!-- Right Header Action -->
        <div class="header-right">
            <a href="contact.php" class="btn btn-header-cta">Contact Us</a>
            <button class="mobile-toggle-btn" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobileDrawer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-drawer-overlay" id="drawerOverlay"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-hidden="true">
    <div class="mobile-drawer-header">
        <a href="index.php" class="drawer-logo">
            <img src="assets/img/logo-color.png" alt="Metrics Mart Logo" width="180" height="34">
        </a>
        <button class="drawer-close-btn" id="drawerCloseBtn" aria-label="Close navigation menu">&times;</button>
    </div>

    <div class="mobile-drawer-body">
        <ul class="mobile-nav-list">
            <li><a href="index.php" class="mobile-link">Home</a></li>

            <li class="mobile-accordion">
                <button type="button" class="mobile-accordion-toggle">Company <i class="fa fa-chevron-down"></i></button>
                <div class="mobile-accordion-content">
                    <a href="about.php">About Us</a>
                    <a href="free-analysis.php">Free Analysis</a>
                    <a href="about.php#mission">Mission &amp; Vision</a>
                    <a href="index.php#why-us">Why Choose Us</a>
                    <a href="faqs.php">FAQs</a>
                    <a href="contact.php">Contact</a>
                </div>
            </li>

            <li class="mobile-accordion">
                <button type="button" class="mobile-accordion-toggle">Services <i class="fa fa-chevron-down"></i></button>
                <div class="mobile-accordion-content">
                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-digital-marketing">
                            <span>Digital Marketing</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-digital-marketing" hidden>
                            <a href="seo.php">Search Engine Optimization (SEO)</a>
                            <a href="social-media-optimization.php">Social Media Optimization (SMO)</a>
                            <a href="google-ads.php">Paid Ads &amp; Google Ads</a>
                            <a href="email-marketing.php">Email Marketing</a>
                            <a href="performance-marketing.php">Performance Marketing</a>
                            <a href="lead-generation.php">Lead Generation Solutions</a>
                            <a href="online-reputation-management.php">Online Reputation (ORM)</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-search-optimization">
                            <span>Search Optimization</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-search-optimization" hidden>
                            <a href="seo.php">Website SEO Services</a>
                            <a href="local-seo.php">Local SEO for Businesses</a>
                            <a href="ecommerce-seo.php">E-Commerce SEO</a>
                            <a href="google-my-business.php">Google My Business &amp; Maps</a>
                            <a href="google-promotion.php">Google Promotion &amp; Ranking</a>
                            <a href="service.php">View All SEO Capabilities</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-web-tech">
                            <span>Web &amp; Tech Development</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-web-tech" hidden>
                            <a href="web-development.php">Website Development</a>
                            <a href="web-development.php#php">Custom PHP Development</a>
                            <a href="web-development.php#ecommerce">E-Commerce Development</a>
                            <a href="web-development.php#wordpress">WordPress Development</a>
                            <a href="web-design.php">UI/UX &amp; Web Design</a>
                            <a href="web-development.php#maintenance">Website Maintenance</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-social-media">
                            <span>Social Media &amp; Ads</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-social-media" hidden>
                            <a href="social-media-marketing.php">Social Media Marketing</a>
                            <a href="facebook-marketing.php">Facebook Marketing</a>
                            <a href="instagram-marketing.php">Instagram Growth Marketing</a>
                            <a href="content-marketing.php">Content Marketing</a>
                            <a href="social-media-optimization.php">SMO &amp; Profile Growth</a>
                            <a href="lead-generation.php">B2B &amp; B2C Paid Campaigns</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="mobile-accordion">
                <button type="button" class="mobile-accordion-toggle">Technology <i class="fa fa-chevron-down"></i></button>
                <div class="mobile-accordion-content">
                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-tech-frontend">
                            <span>Frontend</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-tech-frontend" hidden>
                            <a href="reactjs.php">ReactJS</a>
                            <a href="angularjs.php">AngularJS</a>
                            <a href="bootstrap.php">Bootstrap</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-tech-backend">
                            <span>Backend</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-tech-backend" hidden>
                            <a href="dbms.php">DBMS</a>
                            <a href="sql-server.php">SQL Server DB Development</a>
                            <a href="mysql.php">My SQL</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-tech-platforms">
                            <span>Platforms</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-tech-platforms" hidden>
                            <a href="aws.php">AWS</a>
                            <a href="azure.php">Azure</a>
                            <a href="gcp.php">GCP</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-tech-mobile">
                            <span>Mobile Development</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-tech-mobile" hidden>
                            <a href="ios-development.php">iOS</a>
                            <a href="android-development.php">Android</a>
                        </div>
                    </div>

                    <div class="mobile-category-item">
                        <button type="button" class="mobile-cat-btn" aria-expanded="false" aria-controls="mobile-subtopics-tech-cms">
                            <span>CMS &amp; E-Commerce</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-cat-subtopics" id="mobile-subtopics-tech-cms" hidden>
                            <a href="wordpress-development.php">WordPress</a>
                            <a href="php-development.php">PHP</a>
                            <a href="python-development.php">Python</a>
                        </div>
                    </div>

                    <div style="padding: 10px 0 4px 0;">
                        <a href="technology.php" style="color: var(--brand-gold); font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                            View All Technologies <i class="fa fa-arrow-right" style="font-size: 0.75rem;"></i>
                        </a>
                    </div>
                </div>
            </li>
            <li><a href="our-work.php" class="mobile-link">Our Work</a></li>

            <li class="mobile-accordion">
                <button type="button" class="mobile-accordion-toggle">Industries <i class="fa fa-chevron-down"></i></button>
                <div class="mobile-accordion-content">
                    <a href="industry.php">Industries We Serve</a>
                    <a href="finance-banking-industry.php">Finance &amp; Banking</a>
                    <a href="education-industry.php">Education</a>
                    <a href="healthcare-industry.php">Healthcare &amp; Medical</a>
                    <a href="igaming-industry.php">iGaming</a>
                    <a href="b2b-industry.php">B2B</a>
                    <a href="ecommerce-industry.php">eCommerce</a>
                    <a href="travel-tourism-industry.php">Travel &amp; Tourism</a>
                </div>
            </li>

            <li><a href="blog.php" class="mobile-link">Blog</a></li>
            <!-- <li><a href="contact.php" class="mobile-link">Contact</a></li> -->
        </ul>

        <div class="mobile-drawer-contact">
            <a href="contact.php" class="btn btn-primary btn-block">Get a Free Consultation</a>
            <div class="mobile-contact-info">
                <p><i class="fa fa-phone"></i> <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a></p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>"><?php echo safeOut(EMAIL_INFO); ?></a></p>
                <p><i class="fa fa-location-arrow"></i> Goregaon (W), Mumbai</p>
            </div>
            <div class="mobile-socials">
                <a href="<?php echo safeOut(SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?php echo safeOut(SOCIAL_TWITTER); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="<?php echo safeOut(SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo safeOut(SOCIAL_LINKEDIN); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="<?php echo safeOut(SOCIAL_PINTEREST); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</aside>