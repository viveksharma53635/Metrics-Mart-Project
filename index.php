<?php
require_once __DIR__ . '/includes/config.php';

$formSuccess = false;
$formError = '';

// Handle Lead Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lead_submit'])) {
    $fullName = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $website = trim($_POST['website'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $honeypot = trim($_POST['extra_check'] ?? ''); // Anti-bot field

    if (!empty($honeypot)) {
        // Bot detected, silently ignore
        $formSuccess = true;
    } elseif (empty($fullName) || empty($email) || empty($phone)) {
        $formError = "Please fill in your name, email, and phone number.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = "Please provide a valid email address.";
    } else {
        // In a live environment, mail() or mailer is dispatched here
        $formSuccess = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo safeOut(SITE_NAME); ?> | Digital Marketing &amp; SEO Agency</title>
    <meta name="description" content="<?php echo safeOut(SITE_NAME); ?> is a premier digital marketing agency in Mumbai &amp; Noida specializing in SEO, Google Ads, SMO, Web Development, and Lead Generation.">
    <meta name="keywords" content="digital marketing agency mumbai, seo company goregaon, performance marketing noida, web development, google ads ppc, lead generation">
    <link rel="canonical" href="index.php">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo safeOut(SITE_NAME); ?> - Digital Marketing &amp; SEO Agency">
    <meta property="og:description" content="Drive organic visibility, higher conversion rates, and sustainable business revenue with data-driven digital marketing and technology solutions.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">
</head>

<body>

    <!-- Shared Header -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="mainContent">
        <!-- 1. Hero Section -->
        <!-- <section class="hero-banner" id="home">
            <div class="container hero-banner-inner">
                <div class="hero-content">
                    <span class="hero-badge"><i class="fa fa-chart-line" aria-hidden="true"></i> Strategic Growth Partner</span>
                    <h1 class="hero-title">
                        Rank Higher, Grow Faster with <span class="text-gradient">Data-Driven SEO</span> &amp; Digital Marketing
                    </h1>
                    <p class="hero-desc">
                        Unleash your business's true potential. We combine strategic search engine optimization, performance advertising, and custom web development to turn searchers into loyal customers.
                    </p>
                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Get Free Consultation</a>
                        <a href="service.php" class="btn btn-outline-white"><i class="fa fa-th-large" aria-hidden="true"></i> Explore Our Services</a>
                    </div>
                    <div class="hero-trust-list">
                        <div class="hero-trust-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Campaign ROI</div>
                        <div class="hero-trust-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Transparent Reporting</div>
                        <div class="hero-trust-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Certified Marketing Team</div>
                    </div>
                </div> -->

        <!-- <div class="hero-visual">
                    <div class="hero-card-main">
                        <div class="hero-card-header">
                            <h3>Performance Focus</h3>
                            <span class="hero-stat-badge">2026 Ready</span>
                        </div>
                        <div class="hero-feature-pills">
                            <div class="hero-feature-pill">
                                <div class="hero-pill-icon icon-blue"><i class="fa fa-search" aria-hidden="true"></i></div>
                                <div class="hero-pill-text">
                                    <h4>Search Engine Optimization</h4>
                                    <p>Technical, On-Page &amp; Local search dominance.</p>
                                </div>
                            </div>
                            <div class="hero-feature-pill">
                                <div class="hero-pill-icon icon-red"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                                <div class="hero-pill-text">
                                    <h4>Paid Ads &amp; PPC Marketing</h4>
                                    <p>High-intent Google Ads &amp; Social PPC campaigns.</p>
                                </div>
                            </div>
                            <div class="hero-feature-pill">
                                <div class="hero-pill-icon icon-cyan"><i class="fa fa-code" aria-hidden="true"></i></div>
                                <div class="hero-pill-text">
                                    <h4>Modern Web Development</h4>
                                    <p>Fast, responsive, high-converting digital platforms.</p>
                                </div>
                            </div>
                            <div class="hero-feature-pill">
                                <div class="hero-pill-icon icon-purple"><i class="fa fa-shield-alt" aria-hidden="true"></i></div>
                                <div class="hero-pill-text">
                                    <h4>Online Reputation Management</h4>
                                    <p>Protect, build, and scale your brand authority.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

        <!-- <div class="hero-visual">
                    <div class="hero-carousel" id="heroCarousel">
                        <div class="hero-slide active">
                            <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide1.jpg" alt="Digital marketing slide 1">
                        </div>
                        <div class="hero-slide">
                            <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide2.jpg" alt="Digital marketing slide 2">
                        </div>
                        <div class="hero-slide">
                            <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide3.jpg" alt="Digital marketing slide 3">
                        </div>
                        <div class="hero-slide">
                            <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide4.jpg" alt="Digital marketing slide 4">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



        <section class="hero-banner" id="homepage-hero">
            <!-- Full hero background carousel -->
            <div class="hero-visual">
                <div class="hero-carousel" id="heroCarousel">
                    <div class="hero-slide active">
                        <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide1.png" alt="">
                    </div>
                    <div class="hero-slide">
                        <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide2.png" alt="">
                    </div>
                    <div class="hero-slide">
                        <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide3.png" alt="">
                    </div>
                    <!-- <div class="hero-slide">
                        <img src="../Metrics-Mart-DigitalWebsite/assets/img/slide4.png" alt="">
                    </div> -->
                </div>
            </div>

            <div class="container hero-banner-inner">
                <div class="hero-content">
                    <span class="hero-badge"><i class="fa fa-chart-line" aria-hidden="true"></i> Strategic Growth Partner</span>
                    <h1 class="hero-title">
                        Rank Higher, Grow Faster with <span class="text-gradient">Data-Driven SEO</span> &amp; Digital Marketing
                    </h1>
                    <p class="hero-desc">
                        Unleash your business's true potential. We combine strategic search engine optimization, performance advertising, and custom web development to turn searchers into loyal customers.
                    </p>
                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Get Free Consultation</a>
                        <a href="service.php" class="btn btn-outline-white"><i class="fa fa-th-large" aria-hidden="true"></i> Explore Our Services</a>
                    </div>
                    <div class="hero-trust-list">
                        <div class="hero-trust-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Campaign ROI</div>
                        <div class="hero-trust-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Transparent Reporting</div>
                        <div class="hero-trust-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Certified Marketing Team</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Three Pillars / Value Proposition Section -->
        <section class="pillars-section">
            <div class="container">
                <div class="pillars-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon-box"><i class="fa fa-brain" aria-hidden="true"></i></div>
                        <div class="pillar-content">
                            <h3>Smart Insights with Data &amp; AI</h3>
                            <p>Unlock actionable clarity by turning complex market analytics into targeted growth opportunities and informed business decisions.</p>
                        </div>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon-box"><i class="fa fa-crosshairs" aria-hidden="true"></i></div>
                        <div class="pillar-content">
                            <h3>Profit-Focused Strategy in Action</h3>
                            <p>We execute multi-channel campaigns engineered around measurable ROI, customer acquisition cost reduction, and sustainable lifetime value.</p>
                        </div>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon-box"><i class="fa fa-handshake" aria-hidden="true"></i></div>
                        <div class="pillar-content">
                            <h3>Shared-Success Mindset</h3>
                            <p>We work as a dedicated extension of your marketing department with complete transparency, regular milestones, and aligned business targets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Featured Services Grid -->
        <section class="section services-grid-section" id="services">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">What We Do</span>
                    <h2 class="section-title">Digital Marketing Solutions That Scale With Your Business</h2>
                    <p class="section-desc">
                        Whether you need top organic Google rankings, rapid paid traffic, or an enterprise-grade web presence, Metrics Mart Infoline delivers tailored, performance-tested services.
                    </p>
                </div>

                <div class="services-grid">
                    <!-- Service 1 -->
                    <article class="service-card">
                        <div class="service-card-top">
                            <div class="service-card-icon"><i class="fa fa-magnifying-glass-chart" aria-hidden="true"></i></div>
                            <h3 class="service-card-title"><a href="seo.php">Search Engine Optimization</a></h3>
                            <p class="service-card-text">
                                Make your website an organic magnet for customers. We optimize technical architecture, on-page content, and high-authority backlinks to drive qualified buyer intent.
                            </p>
                        </div>
                        <a href="seo.php" class="service-card-cta">Get Top Ranking <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </article>

                    <!-- Service 2 -->
                    <article class="service-card">
                        <div class="service-card-top">
                            <div class="service-card-icon"><i class="fa fa-bullseye" aria-hidden="true"></i></div>
                            <h3 class="service-card-title"><a href="google-ads.php">Pay Per Click (PPC)</a></h3>
                            <p class="service-card-text">
                                Capture high-intent customers right when they are ready to buy. We build, manage, and optimize scalable Google Ads and Meta campaigns that eliminate ad spend waste.
                            </p>
                        </div>
                        <a href="google-ads.php" class="service-card-cta">Increase Sales <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </article>

                    <!-- Service 3 -->
                    <article class="service-card">
                        <div class="service-card-top">
                            <div class="service-card-icon"><i class="fa fa-laptop-code" aria-hidden="true"></i></div>
                            <h3 class="service-card-title"><a href="web-development.php">Website Design &amp; Development</a></h3>
                            <p class="service-card-text">
                                First impressions determine conversions. We engineer custom, lightning-fast, mobile-responsive web applications and WordPress solutions tailored for engagement.
                            </p>
                        </div>
                        <a href="web-development.php" class="service-card-cta">Upgrade Your Design <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </article>

                    <!-- Service 4 -->
                    <article class="service-card">
                        <div class="service-card-top">
                            <div class="service-card-icon"><i class="fa fa-user-shield" aria-hidden="true"></i></div>
                            <h3 class="service-card-title"><a href="online-reputation-management.php">Online Reputation Management</a></h3>
                            <p class="service-card-text">
                                Build, protect, and restore your digital brand image. We monitor search results, suppress negative narratives, and highlight positive customer experiences.
                            </p>
                        </div>
                        <a href="online-reputation-management.php" class="service-card-cta">Protect Your Brand <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </article>

                    <!-- Service 5 -->
                    <article class="service-card">
                        <div class="service-card-top">
                            <div class="service-card-icon"><i class="fa fa-cart-shopping" aria-hidden="true"></i></div>
                            <h3 class="service-card-title"><a href="ecommerce-seo.php">E-Commerce Marketing</a></h3>
                            <p class="service-card-text">
                                Transform product catalogs into steady online transactions. Comprehensive optimization spanning Shopify, WooCommerce, marketplace SEO, and shopping ads.
                            </p>
                        </div>
                        <a href="ecommerce-seo.php" class="service-card-cta">Grow Your Store <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </article>

                    <!-- Service 6 -->
                    <article class="service-card">
                        <div class="service-card-top">
                            <div class="service-card-icon"><i class="fa fa-share-nodes" aria-hidden="true"></i></div>
                            <h3 class="service-card-title"><a href="social-media-marketing.php">Social Media Marketing</a></h3>
                            <p class="service-card-text">
                                Build genuine engagement and brand advocacy across Facebook, Instagram, LinkedIn, and YouTube with targeted creatives and conversion-led campaigns.
                            </p>
                        </div>
                        <a href="social-media-marketing.php" class="service-card-cta">Engage Visitors <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </article>
                </div>
            </div>
        </section>

        <!-- 4. Company Introduction & Statistics -->
        <section class="section" id="about">
            <div class="container">
                <div class="about-intro-grid">
                    <div class="about-intro-content">
                        <span class="section-kicker">About Metrics Mart Infoline</span>
                        <h2>We're the Digital Marketing &amp; Technology Agency Built for Measurable Growth</h2>
                        <p>
                            Based in Mumbai with branches in Noida, Metrics Mart Infoline Pvt Ltd is dedicated to helping ambitious businesses navigate the fast-moving digital ecosystem. We understand that in today’s saturated marketplace, having a generic online presence is not enough.
                        </p>
                        <p>
                            Our integrated methodology unifies technical search engine optimization, precision pay-per-click advertising, high-conversion web development, and social media strategy. We focus on continuous optimization, transparent reporting, and sustainable return on investment.
                        </p>
                        <a href="about.php" class="btn btn-primary mt-2">Discover Our Story <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="stats-card-grid">
                        <div class="stat-box">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Projects &amp; Campaigns Delivered</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number accent">98%</div>
                            <div class="stat-label">Client Retention &amp; Satisfaction</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">10+</div>
                            <div class="stat-label">Years of Digital Excellence</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number accent">25+</div>
                            <div class="stat-label">Certified In-House Specialists</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. What Makes Us Different -->
        <section class="section section-surface" id="why-us">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Why Choose Us</span>
                    <h2 class="section-title">What Makes Metrics Mart Infoline Different?</h2>
                    <p class="section-desc">
                        We blend creative marketing strategy with deep engineering rigor to give your brand a genuine competitive edge in local and global markets.
                    </p>
                </div>

                <div class="different-grid">
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-chart-pie" aria-hidden="true"></i></div>
                        <h3>Data-Driven Strategies</h3>
                        <p>Every strategy is anchored in rigorous keyword intelligence, competitor gap audits, and verified audience demographics.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-clipboard-check" aria-hidden="true"></i></div>
                        <h3>Careful Execution</h3>
                        <p>We treat every detail with precision—from clean meta tags and technical crawlability to ad copywriting and landing page speed.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-microchip" aria-hidden="true"></i></div>
                        <h3>Advanced Technology</h3>
                        <p>We leverage modern enterprise SEO suites, heatmaps, automation, and AI-assisted workflows to stay ahead of algorithm updates.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
                        <h3>Complete Visibility</h3>
                        <p>No vague vanity metrics. You get 100% transparent dashboards, keyword tracking, call attribution, and plain-English monthly reviews.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-award" aria-hidden="true"></i></div>
                        <h3>Exceptional Quality</h3>
                        <p>We never use black-hat shortcuts or questionable link networks. We build brand equity that Google respects and users trust.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <h3>Client-Focused Partnership</h3>
                        <p>You have a direct line to dedicated campaign managers and strategists focused entirely on achieving your business KPIs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Featured Case Studies & Projects -->
        <section class="section" id="portfolio">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Proven Track Record</span>
                    <h2 class="section-title">Our Recent Projects &amp; Digital Successes</h2>
                    <p class="section-desc">
                        A sample of brands and enterprises we have helped thrive through organic search visibility, web development, and digital conversion funnels.
                    </p>
                </div>

                <div class="projects-grid">
                    <!-- Project 1 -->
                    <div class="project-card">
                        <div class="project-thumb">
                            <span class="project-thumb-badge">E-Commerce</span>
                            <div class="project-logo-text">Retail &amp; Fashion Store</div>
                        </div>
                        <div class="project-body">
                            <div>
                                <h3>Apparel &amp; Lifestyle Brand</h3>
                                <div class="project-tags">Shopify, Technical SEO, Google Shopping</div>
                                <p class="project-desc">
                                    Achieved a 210% increase in organic transactions and first-page Google rankings across 45+ competitive retail keywords within 6 months.
                                </p>
                            </div>
                            <a href="our-work.php" class="project-link">View Case Study <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-card">
                        <div class="project-thumb">
                            <span class="project-thumb-badge">Healthcare</span>
                            <div class="project-logo-text">Medical Care &amp; Clinics</div>
                        </div>
                        <div class="project-body">
                            <div>
                                <h3>Multi-Specialty Healthcare Clinic</h3>
                                <div class="project-tags">Local SEO, Google My Business, Website Redesign</div>
                                <p class="project-desc">
                                    Delivered a 180% surge in localized patient appointment enquiries through targeted map pack optimization and hyper-local citation cleanup.
                                </p>
                            </div>
                            <a href="our-work.php" class="project-link">View Case Study <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-card">
                        <div class="project-thumb">
                            <span class="project-thumb-badge">B2B &amp; Logistics</span>
                            <div class="project-logo-text">Industrial Engineering</div>
                        </div>
                        <div class="project-body">
                            <div>
                                <h3>Contracting &amp; Infrastructure LLC</h3>
                                <div class="project-tags">Custom PHP, B2B Lead Gen, Performance Ads</div>
                                <p class="project-desc">
                                    Engineered an enterprise quotation portal and executed targeted PPC campaigns resulting in a 42% decrease in cost-per-qualified-lead.
                                </p>
                            </div>
                            <a href="our-work.php" class="project-link">View Case Study <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 40px;">
                    <a href="our-work.php" class="btn btn-outline">Explore All Case Studies &amp; Projects <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>

        <!-- 7. Feature Spotlight: Smart SEO for Real Growth -->
        <section class="section section-dark">
            <div class="container">
                <div class="spotlight-grid">
                    <div class="spotlight-visual">
                        <div class="spotlight-card">
                            <h3 style="color: #ffffff; margin-bottom: 20px;">Measurable Search Trajectory</h3>
                            <div class="spotlight-metric-item">
                                <div class="metric-header">
                                    <span style="color: #cbd5e1;">Organic Keyword Growth</span>
                                    <span style="color: #4caf92; font-weight: 700;">+240%</span>
                                </div>
                                <div class="metric-bar-bg">
                                    <div class="metric-bar-fill" style="width: 88%;"></div>
                                </div>
                            </div>
                            <div class="spotlight-metric-item">
                                <div class="metric-header">
                                    <span style="color: #cbd5e1;">High-Intent Inbound Traffic</span>
                                    <span style="color: #4caf92; font-weight: 700;">+185%</span>
                                </div>
                                <div class="metric-bar-bg">
                                    <div class="metric-bar-fill" style="width: 76%;"></div>
                                </div>
                            </div>
                            <div class="spotlight-metric-item">
                                <div class="metric-header">
                                    <span style="color: #cbd5e1;">Target Conversion Rate</span>
                                    <span style="color: #fb7185; font-weight: 700;">+95%</span>
                                </div>
                                <div class="metric-bar-bg">
                                    <div class="metric-bar-fill accent" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="spotlight-metric-item">
                                <div class="metric-header">
                                    <span style="color: #cbd5e1;">Technical Core Web Vitals Score</span>
                                    <span style="color: #22c55e; font-weight: 700;">99 / 100</span>
                                </div>
                                <div class="metric-bar-bg">
                                    <div class="metric-bar-fill" style="width: 98%; background: #22c55e;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spotlight-content">
                        <span class="spotlight-badge">Engineered For Performance</span>
                        <h2>Smart SEO That Delivers Tangible Business Revenue</h2>
                        <p>
                            We go far beyond vanity traffic numbers. Our SEO architects optimize every layer of your website to attract genuine prospects actively searching for your exact solutions.
                        </p>
                        <ul class="spotlight-checklist">
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span><strong>Top Search Visibility:</strong> Climb Google rankings for high-intent, commercially valuable keywords.</span></li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span><strong>Technical Site Hygiene:</strong> Enhance crawlability, schema markups, indexation, and mobile page speed.</span></li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span><strong>Content Authority:</strong> High-relevance topic clustering that establishes your industry thought leadership.</span></li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span><strong>Actionable Tracking:</strong> Transparent attribution tracking showing exact enquiries and sales generated.</span></li>
                        </ul>
                        <a href="seo.php" class="btn btn-accent">Learn More About Our SEO Services <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. Industry Expertise Section -->
        <section class="section section-surface" id="industry">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Sectors We Serve</span>
                    <h2 class="section-title">Industry-Specific Digital Marketing Solutions</h2>
                    <p class="section-desc">
                        Every industry faces unique customer journeys, regulatory parameters, and sales cycles. We tailor digital funnels to your specific market reality.
                    </p>
                </div>

                <div class="industries-grid">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fa fa-hospital" aria-hidden="true"></i></div>
                        <h3>Healthcare &amp; Medical</h3>
                        <p>HIPAA-aligned digital presence, patient appointment lead generation, doctor profiles, and localized hospital SEO.</p>
                    </div>

                    <div class="industry-card">
                        <div class="industry-icon"><i class="fa fa-store" aria-hidden="true"></i></div>
                        <h3>E-Commerce &amp; Retail</h3>
                        <p>High-ROI shopping ad campaigns, product schema integration, marketplace SEO, and abandoned cart re-engagement.</p>
                    </div>

                    <div class="industry-card">
                        <div class="industry-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        <h3>Education &amp; E-Learning</h3>
                        <p>Student enrolment campaigns, admissions funnels, course landing pages, and institutional brand visibility.</p>
                    </div>

                    <div class="industry-card">
                        <div class="industry-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                        <h3>B2B &amp; Corporate Services</h3>
                        <p>Account-based marketing, LinkedIn lead gen, high-ticket RFP funnels, and corporate website development.</p>
                    </div>

                    <div class="industry-card">
                        <div class="industry-icon"><i class="fa fa-plane-departure" aria-hidden="true"></i></div>
                        <h3>Travel &amp; Hospitality</h3>
                        <p>Direct hotel/tour booking engines, localized travel search optimization, and geo-targeted seasonal promotions.</p>
                    </div>

                    <div class="industry-card">
                        <div class="industry-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
                        <h3>Real Estate &amp; Construction</h3>
                        <p>Property buyer lead generation, virtual tour microsites, Google Map ranking, and high-converting builder brochures.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- 9. Our Recent Projects (Showcase Section) -->
        <section class="section recent-projects-section" id="recent-projects">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Case Studies &amp; Successes</span>
                    <h2 class="section-title">Our Recent Projects</h2>
                    <p class="section-desc">
                        Explore a selection of high-performing digital marketing, SEO, and web development projects engineered for real client growth.
                    </p>
                </div>

                <div class="recent-projects-grid project-container">
                    <!-- Project 1: Clog London -->
                    <div class="recent-project-card item-card" id="project-1">
                        <img src="upload/clog-london.png" alt="Clog London" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Clog London</h3>
                            <p class="project-card-services">Shopify, HTML &amp; CSS, JavaScript and SEO Services</p>
                        </div>
                        <a href="https://cloglondon.com/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 2: Khawar Hanif Contracting LLC -->
                    <div class="recent-project-card item-card" id="project-2">
                        <img src="upload/Khawar-Hanif-Contracting.png" alt="Khawar Hanif Contracting LLC" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Khawar Hanif Contracting LLC</h3>
                            <p class="project-card-services">SEO Services</p>
                        </div>
                        <a href="https://khawarhanif.com/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 3: MK Flooring -->
                    <div class="recent-project-card item-card" id="project-3">
                        <img src="upload/MK-Flooring.png" alt="MK Flooring" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">MK Flooring</h3>
                            <p class="project-card-services">Development &amp; SEO Services</p>
                        </div>
                        <a href="https://mkflooring.co.in/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 4: Ramesh Sippy Academy of Cinema and Entertainment -->
                    <div class="recent-project-card item-card" id="project-4">
                        <img src="upload/RAMESH-SIPPY-ACADEMY-OF-CINEMA-AND-ENTERTAINMENT.png" alt="Ramesh Sippy Academy of Cinema and Entertainment" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Ramesh Sippy Academy of Cinema and Entertainment</h3>
                            <p class="project-card-services">SEO Services</p>
                        </div>
                        <a href="https://rsace.edu.in/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 5: BHAIBHAIAUTO -->
                    <div class="recent-project-card item-card" id="project-5">
                        <img src="upload/bhaibhaiauto_pr.jpg" alt="BHAIBHAIAUTO" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">BHAIBHAIAUTO</h3>
                            <p class="project-card-services">Development &amp; SEO Services</p>
                        </div>
                        <a href="https://bhaibhaiauto.com/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 6: Pilot Preparation Academy -->
                    <div class="recent-project-card item-card" id="project-6">
                        <img src="upload/Pilot-Training-Institute.png" alt="Pilot Preparation Academy" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Pilot Preparation Academy</h3>
                            <p class="project-card-services">Development &amp; SEO Services</p>
                        </div>
                        <a href="contact.php?project=pilot-preparation-academy" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 7: Calida Rehab -->
                    <div class="recent-project-card item-card" id="project-7">
                        <img src="upload/calida-rehab.png" alt="Calida Rehab" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Calida Rehab</h3>
                            <p class="project-card-services">Development &amp; SEO Services</p>
                        </div>
                        <a href="https://www.calidarehab.com/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 8: Jagruti Rehability Center -->
                    <div class="recent-project-card item-card" id="project-8">
                        <img src="upload/jagruti.png" alt="Jagruti Rehability Center" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Jagruti Rehability Center</h3>
                            <p class="project-card-services">SEO Services</p>
                        </div>
                        <a href="https://www.jagrutirehab.org/" target="_blank" rel="noopener noreferrer" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <!-- Project 9: Angelz Exhibition -->
                    <div class="recent-project-card item-card" id="project-9">
                        <img src="upload/angelz.png" alt="Angelz Exhibition" loading="lazy">
                        <div class="project-card-overlay text">
                            <h3 class="project-card-title">Angelz Exhibition</h3>
                            <p class="project-card-services">Development &amp; SEO Services</p>
                        </div>
                        <a href="contact.php?project=angelz-exhibition" class="project-card-btn button">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="recent-projects-cta">
                    <a href="our-work.php" class="btn btn-primary recent-projects-more-btn">
                        See More Projects <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Client Partners Showcase -->
        <section class="section section-surface" id="partners">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Proven Track Record</span>
                    <h2 class="section-title">Partners Who Believe in Us</h2>
                    <p class="section-desc">We have planned, audited, and executed high-impact digital campaigns for leading enterprises and fast-growing brands across diverse sectors.</p>
                </div>

                <div class="partners-logo-grid">
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/bignees_logo.jpg" alt="Bigness Enterprises" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/aadev_logo.jpg" alt="Aadidev Enterprises" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/bhaibhaiauto_logo.jpg" alt="Bhai Bhai Auto" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/clog_london_logo.jpg" alt="Clog London" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/sonali_express_logo.jpg" alt="Sonali Express" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/rsace.png" alt="RSACE" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/home-interiors.png" alt="Home Interiors" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/247maid_logo.jpg" alt="Maid Service" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/airbuzz.png" alt="Travelling" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/Alliance.jpg" alt="Aviation" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/alphabetz.webp" alt="alphabat" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/Bark-BubblesTides.jpg" alt="Animal lovers" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/dr. Joshi.jpg" alt="Doctor " loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/drakhileshyadav.webp" alt="Doctor image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/Express-worldwide-courier-Black-H_Logo.png" alt="courier service" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/hand2shoulderclinic.webp" alt="Clinicimage" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/handimeals.webp" alt="Home Interiors" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/IDS-Logic.jpg" alt="IDSimage" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/jai_enterprises.jpg" alt="Jai enterprises image " loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/khawar-hanif.jpg" alt="khawar-image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/londonkids.webp" alt="kids image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/mudrives_logo.jpg" alt="mudrivers" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/Neptune Uniforms.jpg" alt="Naptune Uniform image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/PPA-logo.png" alt="PPA image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/roysfashion-logo.webp" alt="roysfashion imges" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/RSA.png" alt="RSA Image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/signcarats.webp" alt="signcaratsimages" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/storekar_logo.webp" alt="storekarimage" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/subkiawaz_logo.webp" alt="subkiawaz image" loading="lazy">
                    </div>
                    <div class="partner-logo-item">
                        <img src="assets/img/clients/wiredarticle_logo.webp" alt="wiredarticle image" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <!-- 9. Client Testimonials -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Client Success</span>
                    <h2 class="section-title">Hear Directly from Business Leaders Who Trust Us</h2>
                    <p class="section-desc">
                        Our long-term client relationships are built on consistent execution, reliable communication, and tangible business results.
                    </p>
                </div>

                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div>
                            <div class="testimonial-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            <p class="testimonial-quote">
                                "Metrics Mart Infoline completely overhauled our search visibility. Within four months our inbound medical enquiries doubled, and our Google Maps presence in Mumbai now consistently ranks in the top three."
                            </p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">Dr</div>
                            <div class="author-info">
                                <h4>Dr. R. Joshi</h4>
                                <span>Healthcare Director, Mumbai</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div>
                            <div class="testimonial-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            <p class="testimonial-quote">
                                "The team's technical SEO and PPC management reduced our cost-per-lead by over 35%. Their proactive monthly reporting and clear explanations give us complete confidence in our digital marketing spend."
                            </p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">AK</div>
                            <div class="author-info">
                                <h4>Amit Kapoor</h4>
                                <span>Operations Head, Logistics Firm</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div>
                            <div class="testimonial-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            <p class="testimonial-quote">
                                "From our custom website development to our continuous social media marketing, Metrics Mart Infoline has been a true strategic extension of our business. Highly professional and dependable."
                            </p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">SM</div>
                            <div class="author-info">
                                <h4>Sneha Mehta</h4>
                                <span>Co-Founder, Retail &amp; E-Commerce</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 10. Lead Generation / Project Enquiry Section -->
        <section class="lead-section" id="enquiry">
            <div class="container">
                <div class="lead-grid">
                    <div class="lead-info">
                        <span class="section-kicker" style="color: var(--primary-blue);">Let's Collaborate</span>
                        <h2>Tell Us About Your Project &amp; Digital Goals</h2>
                        <p>
                            Looking to rank higher on Google, cut wasted ad budget, or engineer a modern high-performance website? Request a complimentary consultation and custom strategic roadmap today.
                        </p>
                        <div class="lead-contact-items">
                            <div class="lead-contact-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div>
                                    <small style="color: #94a3b8; display: block;">Send Direct Email</small>
                                    <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>"><?php echo safeOut(EMAIL_INFO); ?></a>
                                </div>
                            </div>
                            <div class="lead-contact-item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div>
                                    <small style="color: #94a3b8; display: block;">Direct Strategy Helpline</small>
                                    <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a>
                                </div>
                            </div>
                            <div class="lead-contact-item">
                                <i class="fa fa-location-dot" aria-hidden="true"></i>
                                <div>
                                    <small style="color: #94a3b8; display: block;">Head0 Office</small>
                                    <!-- <0span>Goregaon (W), Mumbai &amp; Sector 63, Noida</span> -->
                                    <span>E-107, Riddhi Siddhi Building, Near Goregaon Traffic Police <br> Station, Opp. Patkar College, S.V. Road, <br>Goregaon (W), Mumbai - 400104</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lead-form-card">
                        <h3>Request a Free Growth Audit</h3>
                        <p>Fill out the form below and an expert strategist will get back to you within 24 hours.</p>

                        <?php if ($formSuccess): ?>
                            <div class="form-feedback success" style="display: block;">
                                <strong>Success!</strong> Thank you for reaching out. Our digital strategy team has received your details and will contact you shortly.
                            </div>
                        <?php elseif (!empty($formError)): ?>
                            <div class="form-feedback error" style="display: block;">
                                <?php echo safeOut($formError); ?>
                            </div>
                        <?php endif; ?>

                        <form action="index.php#enquiry" method="POST" class="validate-form">
                            <!-- Bot protection honeypot -->
                            <div style="display:none;">
                                <input type="text" name="extra_check" value="">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="full_name" class="form-control" placeholder="e.g. Rahul Sharma" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" placeholder="name@company.com" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Phone / Mobile *</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Company Name &amp; Website</label>
                                <input type="text" name="company" class="form-control" placeholder="Your Company Name &amp; URL">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Service of Interest</label>
                                <select name="service" class="form-control">
                                    <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                                    <option value="Google Ads / Pay Per Click">Google Ads / Pay Per Click (PPC)</option>
                                    <option value="Website Design & Development">Website Design &amp; Development</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Online Reputation Management">Online Reputation Management (ORM)</option>
                                    <option value="Complete Digital Audit">Complete Digital Strategy Audit</option>
                                </select>
                            </div>

                            <button type="submit" name="lead_submit" class="btn btn-accent btn-block">
                                <i class="fa fa-chart-line" aria-hidden="true"></i> Get My Free Strategy Proposal
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- 11. Recent Blog Articles & Insights -->
        <section class="section" id="blog">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Knowledge &amp; Trends</span>
                    <h2 class="section-title">Latest Digital Marketing Insights</h2>
                    <p class="section-desc">
                        Actionable articles, algorithm breakdowns, and proven growth tactics curated by our senior specialists.
                    </p>
                </div>

                <div class="blogs-grid">
                    <article class="blog-card">
                        <div class="blog-card-img">
                            <i class="fa fa-magnifying-glass-chart" style="font-size: 3rem; opacity: 0.8;"></i>
                            <span class="blog-badge">SEO Strategy</span>
                        </div>
                        <div class="blog-card-body">
                            <div>
                                <div class="blog-date"><i class="fa fa-calendar-alt"></i> October 2026</div>
                                <h3 class="blog-card-title"><a href="blog.php">Why High-Growth Businesses Need Comprehensive SEO in 2026</a></h3>
                                <p class="blog-excerpt">
                                    Explore why traditional keyword stuffing is dead and how semantic entity optimization, Core Web Vitals, and search intent shape modern organic rankings.
                                </p>
                            </div>
                            <a href="blog.php" class="blog-read-more">Read Full Guide <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="blog-card">
                        <div class="blog-card-img">
                            <i class="fa fa-bullseye" style="font-size: 3rem; opacity: 0.8;"></i>
                            <span class="blog-badge">Paid Media</span>
                        </div>
                        <div class="blog-card-body">
                            <div>
                                <div class="blog-date"><i class="fa fa-calendar-alt"></i> October 2026</div>
                                <h3 class="blog-card-title"><a href="blog.php">Mastering Google Ads: Reducing CPL While Scaling Lead Volume</a></h3>
                                <p class="blog-excerpt">
                                    How smart bidding strategies, negative keyword exclusions, and dedicated high-converting landing pages eliminate wasted PPC expenditure.
                                </p>
                            </div>
                            <a href="blog.php" class="blog-read-more">Read Full Guide <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="blog-card">
                        <div class="blog-card-img">
                            <i class="fa fa-shield-halved" style="font-size: 3rem; opacity: 0.8;"></i>
                            <span class="blog-badge">ORM &amp; Trust</span>
                        </div>
                        <div class="blog-card-body">
                            <div>
                                <div class="blog-date"><i class="fa fa-calendar-alt"></i> September 2026</div>
                                <h3 class="blog-card-title"><a href="blog.php">Building an Unshakable Brand: The Essentials of Online Reputation</a></h3>
                                <p class="blog-excerpt">
                                    Discover how proactive review management, positive PR placements, and search result control protect corporate value during critical growth stages.
                                </p>
                            </div>
                            <a href="blog.php" class="blog-read-more">Read Full Guide <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- 12. Frequently Asked Questions -->
        <section class="section section-surface" id="faqs">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Got Questions?</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-desc">
                        Clear answers to common questions about our services, methodologies, campaign timelines, and deliverables.
                    </p>
                </div>

                <div class="faq-container">
                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            What services does Metrics Mart Infoline Pvt Ltd provide?
                            <span class="faq-icon">–</span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                We provide full-stack digital solutions including Search Engine Optimization (SEO), Local SEO &amp; Google My Business optimization, Google Ads &amp; Paid Social (Meta) advertising, Performance Marketing, Online Reputation Management (ORM), Content Marketing, and Custom Web &amp; E-Commerce Development.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            How long does it typically take to see measurable SEO results?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                Noticeable technical and ranking improvements often occur within 60 to 90 days. Substantial organic traffic growth, competitive keyword dominance, and revenue scaling generally solidify within 3 to 6 months depending on market competition and domain history.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            What is the primary difference between SEO and Google Ads?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                Google Ads (PPC) drives immediate visibility and buyer traffic as soon as campaigns go live, but requires continuous ad spend. SEO builds lasting organic authority and long-term equity, generating qualified leads continuously without paying per click. Most thriving businesses benefit from combining both channels.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            Do you provide dedicated account managers and transparent reporting?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                Yes. Every client is assigned a dedicated strategist who conducts regular review calls. You receive customized dashboards detailing keyword movements, traffic sources, conversion rates, and exact business enquiries.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            Where are your offices located?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                Our Head Office is located at E-107, Riddhi Siddhi Building, Near Goregaon Traffic Police Station, Opp. Patkar College, S.V. Road, Goregaon (W), Mumbai – 400104. We also have an active branch office in Sector 63, Noida (Delhi NCR), serving domestic and global clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>
</body>

</html>