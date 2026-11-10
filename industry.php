<?php
require_once __DIR__ . '/includes/config.php';
$currentPage = basename($_SERVER['PHP_SELF']);
$pageTitle   = 'Industries We Serve | Metrics Mart Digital';
$metaDesc    = 'Metrics Mart Infoline Pvt Ltd delivers tailored digital marketing and technology solutions for Finance & Banking, Education, Healthcare, iGaming, B2B, eCommerce, and Travel & Tourism industries across India and globally.';
$canonical   = 'https://metricsmartinfoline.com/industry.php';

$industries = [
    ['name' => 'Finance & Banking',    'icon' => 'fa fa-landmark',       'url' => 'finance-banking-industry.php',  'desc' => 'Build trust, generate high-quality leads, and strengthen your financial brand with compliant, data-driven digital marketing tailored for banks, NBFCs, insurance firms, and FinTech companies.'],
    ['name' => 'Education',            'icon' => 'fa fa-graduation-cap', 'url' => 'education-industry.php',        'desc' => 'Increase student admissions, improve institute visibility, and build your educational brand with marketing strategies for schools, colleges, universities, and EdTech platforms.'],
    ['name' => 'Healthcare & Medical', 'icon' => 'fa fa-stethoscope',    'url' => 'healthcare-industry.php',       'desc' => 'Build patient trust, improve local search visibility, and generate appointment enquiries with patient-centric, compliance-aligned healthcare digital marketing.'],
    ['name' => 'iGaming',              'icon' => 'fa fa-gamepad',         'url' => 'igaming-industry.php',          'desc' => 'Professional digital marketing and technology services for lawfully operating iGaming businesses—SEO, website development, community engagement, and analytics.'],
    ['name' => 'B2B',                  'icon' => 'fa fa-handshake',       'url' => 'b2b-industry.php',              'desc' => 'Generate qualified business leads, shorten sales cycles, and build lasting relationships with decision-makers through strategic B2B SEO, LinkedIn, and content marketing.'],
    ['name' => 'eCommerce',            'icon' => 'fa fa-shopping-cart',   'url' => 'ecommerce-industry.php',        'desc' => 'Drive more traffic, increase product sales, and reduce cart abandonment with eCommerce SEO, Google Shopping Ads, Meta advertising, and conversion rate optimisation.'],
    ['name' => 'Travel & Tourism',     'icon' => 'fa fa-plane',           'url' => 'travel-tourism-industry.php',   'desc' => 'Increase online travel bookings, build your destination brand, and engage travellers with tailored digital marketing for travel agencies, hotels, and tourism businesses.'],
];

$features = [
    ['icon' => 'fa fa-bullseye',       'title' => 'Targeted Audience Reach',         'desc' => 'Industry-specific strategies ensure your message reaches the exact audience segment that matters most—reducing wasted spend and improving campaign efficiency.'],
    ['icon' => 'fa fa-search',         'title' => 'Industry-Specific SEO',            'desc' => 'We identify and target the search queries your industry audience actually uses, building topical authority that generic SEO approaches miss entirely.'],
    ['icon' => 'fa fa-chart-line',     'title' => 'Better Lead Generation',           'desc' => 'Industry-tailored lead generation funnels attract higher-quality prospects who are already familiar with sector-specific terminology and expectations.'],
    ['icon' => 'fa fa-users',          'title' => 'Improved Customer Engagement',     'desc' => 'Content and campaigns built around industry-specific challenges resonate more deeply with your audience, driving higher engagement and brand loyalty.'],
    ['icon' => 'fa fa-funnel-dollar',  'title' => 'Conversion-Focused Campaigns',    'desc' => 'We understand what motivates buyers in each industry and design campaigns and landing pages that speak directly to those conversion triggers.'],
    ['icon' => 'fa fa-rocket',         'title' => 'Scalable Digital Solutions',       'desc' => 'Our strategies are built to scale alongside your business—from early growth campaigns to enterprise-level multi-channel digital programs.'],
];

$services = [
    ['icon' => 'fa fa-search',         'title' => 'Search Engine Optimization',      'desc' => 'First-page Google rankings for high-intent industry keywords.',          'url' => 'seo.php'],
    ['icon' => 'fa fa-thumbs-up',      'title' => 'Social Media Marketing',          'desc' => 'Platform-specific campaigns that build communities and drive enquiries.', 'url' => 'social-media-marketing.php'],
    ['icon' => 'fa fa-ad',             'title' => 'Google Ads & Paid Advertising',   'desc' => 'High-ROAS search and display campaigns across Google and Meta.',          'url' => 'google-ads.php'],
    ['icon' => 'fa fa-laptop-code',    'title' => 'Website Design & Development',    'desc' => 'Fast, secure, conversion-optimised websites built for your sector.',       'url' => 'web-development.php'],
    ['icon' => 'fa fa-file-alt',       'title' => 'Content Marketing',               'desc' => 'Authority-building content that educates and converts.',                   'url' => 'content-marketing.php'],
    ['icon' => 'fa fa-chart-bar',      'title' => 'Performance Marketing',           'desc' => 'Data-driven campaigns measured by leads, sales, and revenue.',            'url' => 'performance-marketing.php'],
    ['icon' => 'fa fa-chart-line',     'title' => 'Lead Generation Solutions',       'desc' => 'Multi-channel pipelines generating qualified, high-intent enquiries.',     'url' => 'lead-generation.php'],
];

$processSteps = [
    ['title' => 'Understand Your Industry',         'desc' => 'We study your sector, competitive landscape, regulatory environment, and audience behaviour before building any strategy.'],
    ['title' => 'Research Your Audience',           'desc' => 'Deep persona research identifies the keywords, channels, content types, and messaging that resonate most with your target market.'],
    ['title' => 'Develop a Custom Strategy',        'desc' => 'A tailored, multi-channel digital plan aligned to your business goals, budget, and timeline—with clear KPIs and milestones.'],
    ['title' => 'Execute, Measure & Optimise',      'desc' => 'Campaigns launch and are continuously refined using live data, A/B testing, and monthly performance reviews to maximise ROI.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo safeOut($pageTitle); ?></title>
    <meta name="description" content="<?php echo safeOut($metaDesc); ?>">
    <link rel="canonical" href="<?php echo safeOut($canonical); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo safeOut($pageTitle); ?>">
    <meta property="og:description" content="<?php echo safeOut($metaDesc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo safeOut($canonical); ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">
    <link rel="stylesheet" href="assets/CSS/industry.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/industry.css'); ?>">

    <!-- Structured Data: BreadcrumbList -->
    <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
        {"@type":"ListItem","position":1,"name":"Home","item":"https://metricsmartinfoline.com/"},
        {"@type":"ListItem","position":2,"name":"Industries We Serve","item":"https://metricsmartinfoline.com/industry.php"}
    ]}
    </script>
</head>
<body class="mmd-industry-page">

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="mainContent">

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 1 — HERO BANNER
        ════════════════════════════════════════════════════════════════ -->
        <section class="mmd-industry-hero" aria-label="Industries We Serve">
            <div class="container">
                <div class="mmd-hero-inner">
                    <!-- Left: Headline content -->
                    <div class="mmd-hero-content">
                        <!-- Breadcrumb -->
                        <nav class="mmd-breadcrumbs" aria-label="Breadcrumb">
                            <a href="index.php">Home</a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="mmd-bc-current">Industries</span>
                        </nav>

                        <!-- Kicker -->
                        <div class="mmd-hero-kicker">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                            DIGITAL EXCELLENCE ACROSS INDUSTRIES
                        </div>

                        <!-- H1 -->
                        <h1 class="mmd-hero-h1">
                            Digital Marketing &amp; Technology Solutions for <span>Every Industry</span>
                        </h1>

                        <p class="mmd-hero-desc">
                            Helping businesses across different industries strengthen their digital presence through tailored marketing strategies, innovative technology, and conversion-focused solutions.
                        </p>

                        <div class="mmd-hero-actions">
                            <a href="#industries-grid" class="btn btn-accent">
                                <i class="fa fa-th-large" aria-hidden="true"></i> Explore Industries
                            </a>
                            <a href="contact.php" class="btn btn-outline-white">
                                <i class="fa fa-comments" aria-hidden="true"></i> Get a Free Consultation
                            </a>
                        </div>

                        <!-- Quick Nav Pills -->
                        <div class="mmd-ind-nav-pills" aria-label="Quick links to industry pages">
                            <?php foreach ($industries as $ind): ?>
                            <a href="<?php echo safeOut($ind['url']); ?>" class="mmd-ind-nav-pill">
                                <i class="<?php echo safeOut($ind['icon']); ?>" aria-hidden="true"></i>
                                <?php echo safeOut($ind['name']); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Right: Side card -->
                    <div class="mmd-hero-card">
                        <h3>Why Choose Metrics Mart?</h3>
                        <ul class="mmd-hero-checklist">
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Tailored strategies for each industry</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Transparent, ROI-focused reporting</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Experienced senior specialists</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Ethical, compliance-aligned methods</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Mumbai, Noida &amp; Dubai presence</li>
                        </ul>
                        <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="btn btn-primary btn-block">
                            <i class="fa fa-phone" aria-hidden="true"></i> Call <?php echo safeOut(PHONE_PRIMARY); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 2 — INDUSTRY INTRODUCTION
        ════════════════════════════════════════════════════════════════ -->
        <section class="section" id="why-industry" aria-labelledby="sec-why-h2">
            <div class="container">
                <div class="mmd-intro-grid">
                    <!-- Illustration -->
                    <div class="mmd-intro-img" role="img" aria-label="Industry-specific digital marketing illustration">
                        <div class="mmd-intro-img-placeholder">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                            <span>Industry-Specific Digital Marketing</span>
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="mmd-intro-text">
                        <span class="section-kicker">WHY INDUSTRY-SPECIFIC MARKETING</span>
                        <h2 id="sec-why-h2" class="section-title">One Strategy Does Not Fit All Industries</h2>
                        <p>Every industry has its own buyer behaviour, decision-making process, competitive landscape, and regulatory environment. A digital marketing strategy that works brilliantly for an eCommerce store will not deliver the same results for a hospital or a B2B technology company. Industry context changes everything—from the keywords your audience searches to the content they trust and the channels that influence their decisions.</p>
                        <p>At Metrics Mart Infoline Pvt Ltd, we build industry-specific digital marketing strategies that address the unique challenges, audiences, and growth opportunities in each sector we serve. This focused approach consistently delivers better results than generic, one-size-fits-all campaigns.</p>

                        <ul class="mmd-challenge-list" aria-label="Industry marketing advantages">
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Sector-specific keyword research and content planning</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Audience targeting based on real industry buyer personas</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Compliance-aware messaging for regulated industries</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Channel mix built around your industry's digital habits</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Measurable KPIs aligned to industry-specific success metrics</li>
                        </ul>

                        <a href="contact.php" class="btn btn-primary">
                            <i class="fa fa-comments" aria-hidden="true"></i> Discuss Your Industry
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 3 — INDUSTRIES WE SERVE GRID
        ════════════════════════════════════════════════════════════════ -->
        <section class="section section-surface" id="industries-grid" aria-labelledby="sec-industries-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">SECTORS WE SERVE</span>
                    <h2 id="sec-industries-h2" class="section-title">Industries We Serve</h2>
                    <p class="section-desc">From financial services to travel and tourism, we deliver tailored digital marketing across seven key industry verticals—each with dedicated expertise, sector-specific content, and measurable strategies.</p>
                </div>

                <div class="mmd-industry-grid">
                    <?php foreach ($industries as $ind): ?>
                    <article class="mmd-industry-card">
                        <div class="mmd-card-icon" aria-hidden="true">
                            <i class="<?php echo safeOut($ind['icon']); ?>"></i>
                        </div>
                        <h3 class="mmd-card-title"><?php echo safeOut($ind['name']); ?></h3>
                        <p class="mmd-card-desc"><?php echo safeOut($ind['desc']); ?></p>
                        <a href="<?php echo safeOut($ind['url']); ?>" class="mmd-card-link" aria-label="Explore <?php echo safeOut($ind['name']); ?> solutions">
                            Explore Solutions <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 4 — WHY INDUSTRY-SPECIFIC STRATEGIES MATTER
        ════════════════════════════════════════════════════════════════ -->
        <section class="section" id="why-specific" aria-labelledby="sec-specific-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">STRATEGIC ADVANTAGES</span>
                    <h2 id="sec-specific-h2" class="section-title">Why Industry-Specific Strategies Matter</h2>
                    <p class="section-desc">The difference between a generic campaign and an industry-specific strategy is measurable—in lead quality, conversion rates, and marketing ROI.</p>
                </div>
                <div class="mmd-features-grid">
                    <?php foreach ($features as $feat): ?>
                    <div class="mmd-feature-card">
                        <i class="<?php echo safeOut($feat['icon']); ?>" aria-hidden="true"></i>
                        <h3><?php echo safeOut($feat['title']); ?></h3>
                        <p><?php echo safeOut($feat['desc']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 5 — OUR DIGITAL SOLUTIONS
        ════════════════════════════════════════════════════════════════ -->
        <section class="section section-surface" id="our-solutions" aria-labelledby="sec-solutions-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">OUR CORE SERVICES</span>
                    <h2 id="sec-solutions-h2" class="section-title">Our Digital Solutions</h2>
                    <p class="section-desc">A comprehensive suite of digital marketing and technology services, all available as industry-specific programmes tailored to your sector's needs.</p>
                </div>
                <div class="mmd-services-grid">
                    <?php foreach ($services as $svc): ?>
                    <div class="mmd-service-card">
                        <div class="mmd-svc-icon"><i class="<?php echo safeOut($svc['icon']); ?>" aria-hidden="true"></i></div>
                        <h3><?php echo safeOut($svc['title']); ?></h3>
                        <p><?php echo safeOut($svc['desc']); ?></p>
                        <a href="<?php echo safeOut($svc['url']); ?>" class="mmd-svc-link">
                            Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 6 — OUR WORKING PROCESS
        ════════════════════════════════════════════════════════════════ -->
        <section class="section section-dark" id="process" aria-labelledby="sec-process-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker" style="color:var(--brand-gold);">HOW WE WORK</span>
                    <h2 id="sec-process-h2" class="section-title" style="color:#fff;">Our Working Process</h2>
                    <p class="section-desc" style="color:#cbd5e1;">A structured, four-step approach that takes every industry engagement from initial discovery to measurable, sustained results.</p>
                </div>
                <div class="mmd-process-row">
                    <?php foreach ($processSteps as $i => $step): ?>
                    <div class="mmd-process-step" style="background:rgba(255,255,255,0.05);border-color:rgba(76,175,146,0.25);">
                        <div class="mmd-step-num"><?php echo sprintf('%02d', $i + 1); ?></div>
                        <h3 style="color:#fff;"><?php echo safeOut($step['title']); ?></h3>
                        <p style="color:#94a3b8;"><?php echo safeOut($step['desc']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════
             SECTION 7 — CALL TO ACTION
        ════════════════════════════════════════════════════════════════ -->
        <section class="mmd-industry-cta" id="cta" aria-labelledby="sec-cta-h2">
            <div class="container mmd-cta-inner">
                <span class="section-kicker" style="color:var(--brand-gold);">LET'S GET STARTED</span>
                <h2 id="sec-cta-h2">Let's Build a Digital Strategy for Your Industry</h2>
                <p>Share your business goals with our senior digital strategists. We will create a customised plan built around your industry, your audience, and your growth targets.</p>
                <div class="mmd-cta-buttons">
                    <a href="contact.php" class="btn btn-accent">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i> Get a Free Consultation
                    </a>
                    <a href="contact.php" class="btn btn-outline-white">
                        <i class="fa fa-phone" aria-hidden="true"></i> Contact Us
                    </a>
                </div>
            </div>
        </section>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>
</body>
</html>
