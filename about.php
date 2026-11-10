<?php
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | <?php echo safeOut(SITE_NAME); ?></title>
    <meta name="description" content="Learn about Metrics Mart Infoline Pvt Ltd, a premier digital marketing and web solutions agency based in Mumbai and Noida. Discover our mission, core values, and approach.">
    <link rel="canonical" href="about.php">

    <!-- Open Graph -->
    <meta property="og:title" content="About Us | <?php echo safeOut(SITE_NAME); ?>">
    <meta property="og:description" content="Discover our journey, leadership philosophy, and data-driven approach to scaling businesses through search and performance marketing.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">
    <!-- Scoped Styles for Office Spotlight Cards -->
    <style>
        #offices .spotlight-grid {
            grid-template-columns: repeat(2, 1fr);
            align-items: stretch;
        }
        #offices .spotlight-card {
            height: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        #offices .spotlight-card .btn {
            max-width: 100%;
        }
        .noida-office-card .noida-info-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .noida-office-card .noida-info-row i {
            width: 20px;
            min-width: 20px;
            text-align: center;
            font-size: 1rem;
            line-height: 1.6;
            margin-top: 1px;
            flex-shrink: 0;
        }
        .noida-office-card .noida-info-text {
            flex: 1;
            min-width: 0;
            overflow-wrap: break-word;
            word-wrap: break-word;
        }
        @media (max-width: 900px) {
            #offices .spotlight-grid {
                grid-template-columns: 1fr;
            }
            #offices .spotlight-card {
                height: auto;
            }
        }
        @media (max-width: 480px) {
            #offices .spotlight-card {
                padding: 28px 20px !important;
            }
        }
    </style>
</head>
<body class="about-page">

    <!-- Shared Header -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="mainContent">
        <!-- Page Hero -->
        <section class="page-hero">
            <div class="container page-hero-inner">
                <div>
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="current">About Us</span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-building" aria-hidden="true"></i> Our Story &amp; Purpose</span>
                    <h1 class="page-hero-title">Empowering Businesses in the Modern Digital World</h1>
                    <p class="page-hero-desc">
                        At Metrics Mart Infoline Pvt Ltd, we believe that true digital growth requires the perfect fusion of quantitative data, creative execution, and technical excellence.
                    </p>

                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-handshake" aria-hidden="true"></i> Partner With Us</a>
                        <a href="#mission" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> Our Mission &amp; Values</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 15px; font-size: 1.25rem;">Corporate Snapshot</h3>
                    <div style="display: flex; flex-direction: column; gap: 12px; font-size: 0.95rem; color: #cbd5e1;">
                        <p style="margin: 0;"><i class="fa fa-map-marker-alt" style="color: var(--accent-red); width: 20px;"></i> <strong>Head Office:</strong> Goregaon (West), Mumbai</p>
                        <p style="margin: 0;"><i class="fa fa-building" style="color: var(--accent-red); width: 20px;"></i> <strong>North Branch:</strong> Sector 63, Noida (Delhi NCR)</p>
                        <p style="margin: 0;"><i class="fa fa-users" style="color: var(--accent-red); width: 20px;"></i> <strong>Specialists:</strong> 25+ Full-Time In-House Talent</p>
                        <p style="margin: 0;"><i class="fa fa-award" style="color: var(--accent-red); width: 20px;"></i> <strong>Experience:</strong> 10+ Years Serving Pan-India &amp; Global Clients</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Story & Background -->
        <section class="section" id="story">
            <div class="container">
                <div class="about-intro-grid">
                    <div class="about-intro-content">
                        <span class="section-kicker">Who We Are</span>
                        <h2>Dedicated Growth Partners, Not Just Another Agency Vendor</h2>
                        <p>
                            Metrics Mart Infoline Pvt Ltd was founded with a singular, resolute objective: to bridge the gap between creative marketing ideas and measurable commercial return. We recognized that too many businesses were investing in digital campaigns that produced vanity clicks without impacting the bottom line.
                        </p>
                        <p>
                            Over the last decade, our team has grown into a multidisciplinary agency operating out of our corporate headquarters in Goregaon (West), Mumbai and our northern branch in Sector 63, Noida. We have planned and executed high-impact campaigns for over 500 clients across healthcare, retail, real estate, manufacturing, education, and professional services.
                        </p>
                        <p>
                            We treat our clients' businesses as our own. We do not lock partners into deceptive long-term contracts; rather, we earn trust through radical transparency, proactive communication, and relentless performance optimization.
                        </p>
                    </div>

                    <div class="stats-card-grid">
                        <div class="stat-box">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Delivered Campaigns</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number accent">98%</div>
                            <div class="stat-label">Client Retention Rate</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">10+</div>
                            <div class="stat-label">Years of Industry Leadership</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number accent">25+</div>
                            <div class="stat-label">Certified In-House Experts</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision & Guiding Philosophy -->
        <section class="section section-dark" id="mission">
            <div class="container">
                <div class="section-header">
                    <span class="spotlight-badge">Our Guiding North Star</span>
                    <h2 class="section-title">Mission &amp; Vision</h2>
                    <p class="section-desc">Our foundation is anchored on clarity, continuous innovation, and client prosperity.</p>
                </div>

                <div class="pillars-grid" style="margin-top: 20px;">
                    <div class="pillar-card" style="background: #121035; border-color: rgba(255,255,255,0.1); color: #ffffff;">
                        <div class="pillar-icon-box" style="background: rgba(76, 175, 146, 0.18); color: #4caf92;">
                            <i class="fa fa-bullseye" aria-hidden="true"></i>
                        </div>
                        <div class="pillar-content">
                            <h3 style="color: #ffffff;">Our Mission</h3>
                            <p style="color: #cbd5e1;">
                                To empower businesses of every scale with data-driven search, marketing, and technological solutions that accelerate customer acquisition, protect reputation, and produce sustainable revenue.
                            </p>
                        </div>
                    </div>

                    <div class="pillar-card" style="background: #121035; border-color: rgba(255,255,255,0.1); color: #ffffff;">
                        <div class="pillar-icon-box" style="background: rgba(220, 53, 69, 0.2); color: #fb7185;">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <div class="pillar-content">
                            <h3 style="color: #ffffff;">Our Vision</h3>
                            <p style="color: #cbd5e1;">
                                To be recognized across India and globally as the most dependable, ethical, and commercially effective digital marketing and technology consultancy for growing enterprises.
                            </p>
                        </div>
                    </div>

                    <div class="pillar-card" style="background: #121035; border-color: rgba(255,255,255,0.1); color: #ffffff;">
                        <div class="pillar-icon-box" style="background: rgba(34, 197, 94, 0.2); color: #4ade80;">
                            <i class="fa fa-hand-holding-heart" aria-hidden="true"></i>
                        </div>
                        <div class="pillar-content">
                            <h3 style="color: #ffffff;">Our Promise</h3>
                            <p style="color: #cbd5e1;">
                                Complete operational transparency, zero hidden fees, data ownership preservation, and dedicated senior attention on every single account we manage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="section section-surface" id="values">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">What Drives Us</span>
                    <h2 class="section-title">Our Core Operating Values</h2>
                    <p class="section-desc">The principles that guide our client relationships, technical decisions, and internal culture.</p>
                </div>

                <div class="different-grid">
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-magnifying-glass-chart" aria-hidden="true"></i></div>
                        <h3>Integrity &amp; Truth in Data</h3>
                        <p>We present facts as they are. We never obscure underperformance with vanity metrics; we diagnose, adapt, and solve.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-shield-alt" aria-hidden="true"></i></div>
                        <h3>Ethical Compliance</h3>
                        <p>We strictly employ sustainable white-hat techniques that protect our clients from algorithmic penalties and reputational risk.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        <h3>Continuous Mastery</h3>
                        <p>Search engines and digital platforms evolve constantly. Our teams undergo regular certification and technical training.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-users-gear" aria-hidden="true"></i></div>
                        <h3>Collaborative Partnership</h3>
                        <p>We don’t hide behind ticket queues. You have direct access to your strategists, open dialogue, and rapid response times.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                        <h3>Speed &amp; Agility</h3>
                        <p>Digital opportunities move quickly. Our nimble structure allows us to deploy campaigns, landing pages, and fixes rapidly.</p>
                    </div>

                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                        <h3>Obsession with Client ROI</h3>
                        <p>We evaluate our success purely on whether our clients achieve higher revenue, lower acquisition costs, and market dominance.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Offices & Physical Footprint -->
        <section class="section" id="offices">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Where to Find Us</span>
                    <h2 class="section-title">Our Physical Office Locations</h2>
                    <p class="section-desc">Meet our team in person at our corporate offices in Mumbai or our northern branch in Noida.</p>
                </div>

                <div class="spotlight-grid">
                    <div class="spotlight-card" style="background: #ffffff; border-color: var(--border-light); color: var(--text-main); box-shadow: var(--shadow-md);">
                        <span class="office-tag">Corporate Headquarters</span>
                        <h3 style="color: var(--text-navy); margin-bottom: 12px; font-size: 1.35rem;">Mumbai Head Office</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
                            <i class="fa fa-location-dot" style="color: var(--accent-red); margin-right: 8px;"></i>
                            <?php echo safeOut(ADDRESS_MUMBAI); ?>
                        </p>
                        <p style="color: var(--text-main); font-size: 0.95rem; margin-bottom: 8px;">
                            <i class="fa fa-phone" style="color: var(--primary-blue); margin-right: 8px;"></i>
                            <strong>Landline:</strong> <a href="tel:<?php echo safeOut(PHONE_LANDLINE_RAW); ?>"><?php echo safeOut(PHONE_LANDLINE); ?></a>
                        </p>
                        <p style="color: var(--text-main); font-size: 0.95rem; margin-bottom: 8px;">
                            <i class="fa fa-mobile" style="color: var(--primary-blue); margin-right: 8px;"></i>
                            <strong>Mobile / WhatsApp:</strong> <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a>
                        </p>
                        <p style="color: var(--text-main); font-size: 0.95rem; margin-bottom: 22px;">
                            <i class="fa fa-envelope" style="color: var(--primary-blue); margin-right: 8px;"></i>
                            <strong>Email:</strong> <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>"><?php echo safeOut(EMAIL_INFO); ?></a>
                        </p>
                        <a href="contact.php" class="btn btn-outline"><i class="fa fa-map" aria-hidden="true"></i> View Interactive Map</a>
                    </div>

                    <div class="spotlight-card noida-office-card" style="background: #ffffff; border-color: var(--border-light); color: var(--text-main); box-shadow: var(--shadow-md);">
                        <span class="office-tag">Delhi NCR Branch</span>
                        <h3 style="color: var(--text-navy); margin-bottom: 12px; font-size: 1.35rem;">Noida Office</h3>
                        
                        <p class="noida-info-row" style="color: var(--text-muted); margin-bottom: 14px;">
                            <i class="fa fa-location-dot" style="color: var(--accent-red);" aria-hidden="true"></i>
                            <span class="noida-info-text"><?php echo safeOut(ADDRESS_NOIDA); ?></span>
                        </p>
                        
                        <p class="noida-info-row" style="color: var(--text-main); margin-bottom: 10px;">
                            <i class="fa fa-mobile" style="color: var(--primary-blue);" aria-hidden="true"></i>
                            <span class="noida-info-text"><strong>Direct Helpline:</strong> <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" style="white-space: nowrap;"><?php echo safeOut(PHONE_PRIMARY); ?></a></span>
                        </p>
                        
                        <p class="noida-info-row" style="color: var(--text-main); margin-bottom: 10px;">
                            <i class="fa fa-clock" style="color: var(--primary-blue);" aria-hidden="true"></i>
                            <span class="noida-info-text"><strong>Working Hours:</strong> <?php echo safeOut(BUSINESS_HOURS); ?></span>
                        </p>
                        
                        <p class="noida-info-row" style="color: var(--text-main); margin-bottom: 22px;">
                            <i class="fa fa-calendar-xmark" style="color: var(--accent-red);" aria-hidden="true"></i>
                            <span class="noida-info-text"><strong>Weekend:</strong> Saturday &amp; Sunday Closed</span>
                        </p>
                        
                        <a href="contact.php" class="btn btn-primary"><i class="fa fa-calendar-check" aria-hidden="true"></i> Schedule Office Visit</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pre-Footer CTA -->
        <section class="section section-dark text-center" style="text-align: center;">
            <div class="container" style="max-width: 800px;">
                <span class="spotlight-badge">Ready for Real Growth?</span>
                <h2 style="font-size: 2.3rem; margin-bottom: 18px;">Let's Build Something Exceptional Together</h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.7; margin-bottom: 30px;">
                    Whether you are starting from scratch or looking to revitalize an existing brand, our senior strategists are ready to craft your bespoke growth plan.
                </p>
                <div style="display: inline-flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                    <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Get in Touch With Us</a>
                    <a href="service.php" class="btn btn-outline-white"><i class="fa fa-th-large" aria-hidden="true"></i> Explore Our Services</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>
</body>
</html>