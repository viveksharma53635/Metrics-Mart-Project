<?php
require_once __DIR__ . '/includes/config.php';

$serviceCategories = [
    [
        'id' => 'seo-services',
        'title' => 'Search Engine Optimization (SEO)',
        'eyebrow' => 'Organic Search Dominance',
        'icon' => 'fa fa-magnifying-glass-chart',
        'desc' => 'Command the top of Google search results for terms that matter to your bottom line. We engineer technical, on-page, local, and authority strategies that build lasting organic visibility.',
        'services' => [
            ['name' => 'Search Engine Optimization (SEO)', 'url' => 'seo.php', 'desc' => 'Full-funnel technical and content SEO to drive high-intent organic visitors.'],
            ['name' => 'Local SEO & Geo-Targeting', 'url' => 'local-seo.php', 'desc' => 'Dominate local neighborhood and city searches to capture nearby buyers.'],
            ['name' => 'Google My Business & Maps', 'url' => 'google-my-business.php', 'desc' => 'Maximize map pack rankings, customer calls, and localized reviews.'],
            ['name' => 'E-Commerce SEO Services', 'url' => 'ecommerce-seo.php', 'desc' => 'Scale category and product organic rankings on Shopify, WooCommerce, and Magento.'],
            ['name' => 'Google Promotion & Search Visibility', 'url' => 'google-promotion.php', 'desc' => 'Comprehensive multi-asset promotion across Google search, maps, and knowledge panels.']
        ]
    ],
    [
        'id' => 'paid-marketing',
        'title' => 'Paid Advertising & PPC',
        'eyebrow' => 'Instant Buyer Traffic',
        'icon' => 'fa fa-bullseye',
        'desc' => 'Capture customers at the exact moment they are looking to buy. We design, manage, and continuously optimize profitable pay-per-click campaigns that minimize wasted ad spend.',
        'services' => [
            ['name' => 'Google Ads & PPC Management', 'url' => 'google-ads.php', 'desc' => 'Search, Display, and Performance Max campaigns with strict ROI tracking.'],
            ['name' => 'Performance Marketing', 'url' => 'performance-marketing.php', 'desc' => 'Conversion-rate optimized media buying focused strictly on CAC and ROAS.'],
            ['name' => 'Facebook Ads & Meta Marketing', 'url' => 'facebook-marketing.php', 'desc' => 'Targeted demographic and interest-based campaigns for massive top-of-funnel reach.'],
            ['name' => 'Instagram Marketing', 'url' => 'instagram-marketing.php', 'desc' => 'Visual creative campaigns, Story ads, and Reels targeting younger buyer personas.'],
            ['name' => 'High-Conversion Lead Generation', 'url' => 'lead-generation.php', 'desc' => 'End-to-end B2B and B2C lead pipelines connecting prospects directly to your sales team.']
        ]
    ],
    [
        'id' => 'web-development',
        'title' => 'Web & Application Development',
        'eyebrow' => 'High-Performance Engineering',
        'icon' => 'fa fa-laptop-code',
        'desc' => 'Your website is the center of your digital ecosystem. We engineer modern, responsive, lightning-fast digital experiences engineered to convert browsers into paying clients.',
        'services' => [
            ['name' => 'Custom Website Development', 'url' => 'web-development.php', 'desc' => 'Bespoke corporate websites engineered with clean PHP, HTML5, and responsive CSS.'],
            ['name' => 'UI/UX & Web Design', 'url' => 'web-design.php', 'desc' => 'Intuitive user interface and user experience design that reduces bounce rates and drives action.'],
            ['name' => 'E-Commerce Web Solutions', 'url' => 'web-development.php#ecommerce', 'desc' => 'Scalable online store platforms with secure checkout and payment gateways.'],
            ['name' => 'WordPress & CMS Development', 'url' => 'web-development.php#wordpress', 'desc' => 'Flexible, client-editable content management systems built for SEO from day one.'],
            ['name' => 'Website Maintenance & Speed Optimization', 'url' => 'web-development.php#maintenance', 'desc' => 'Security updates, backups, Core Web Vitals optimization, and 24/7 reliability.']
        ]
    ],
    [
        'id' => 'reputation-content',
        'title' => 'Branding, ORM & Social Media',
        'eyebrow' => 'Brand Authority & Engagement',
        'icon' => 'fa fa-user-shield',
        'desc' => 'Protect your brand equity, engage your audience across social media channels, and communicate with authority through tailored content marketing.',
        'services' => [
            ['name' => 'Online Reputation Management (ORM)', 'url' => 'online-reputation-management.php', 'desc' => 'Proactively manage, repair, and protect your personal or corporate search reputation.'],
            ['name' => 'Social Media Marketing (SMM)', 'url' => 'social-media-marketing.php', 'desc' => 'Organic and sponsored community building across LinkedIn, Facebook, and Instagram.'],
            ['name' => 'Social Media Optimization (SMO)', 'url' => 'social-media-optimization.php', 'desc' => 'Profile branding, bios, hashtag structures, and engagement rate enhancement.'],
            ['name' => 'Content Marketing & Strategy', 'url' => 'content-marketing.php', 'desc' => 'High-authority blog articles, whitepapers, and guides that educate and convert.'],
            ['name' => 'Email Marketing & Automation', 'url' => 'email-marketing.php', 'desc' => 'Automated email nurture sequences, newsletters, and customer retention workflows.']
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Digital Marketing &amp; Technology Services | <?php echo safeOut(SITE_NAME); ?></title>
    <meta name="description" content="Explore our complete suite of digital services: SEO, Google Ads, Social Media Marketing, Web Development, ORM, and Lead Generation from Metrics Mart Infoline Pvt Ltd.">
    <link rel="canonical" href="service.php">

    <!-- Open Graph -->
    <meta property="og:title" content="Our Digital Services | <?php echo safeOut(SITE_NAME); ?>">
    <meta property="og:description" content="Discover data-driven digital solutions that accelerate business growth, increase search visibility, and lower customer acquisition costs.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">
</head>
<body class="services-hub-page">

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
                        <span class="current">Services</span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-th-large" aria-hidden="true"></i> Full-Stack Capabilities</span>
                    <h1 class="page-hero-title">Digital Marketing Services That Drive Business Outcomes</h1>
                    <p class="page-hero-desc">
                        From dominant organic Google rankings and high-intent PPC campaigns to custom web applications and reputation management, Metrics Mart Infoline builds scalable digital engines for your brand.
                    </p>

                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Get a Custom Proposal</a>
                        <a href="#service-categories" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> Browse Service Categories</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 15px; font-size: 1.25rem;">Our Core Approach</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">
                        We don't believe in one-size-fits-all packages. Every campaign is designed around your unique business economics, target audience profile, and growth targets.
                    </p>
                    <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="btn btn-primary btn-block">
                        <i class="fa fa-phone" aria-hidden="true"></i> Speak With a Strategist: <?php echo safeOut(PHONE_PRIMARY); ?>
                    </a>
                </div>
            </div>
        </section>

        <!-- Service Categories Detailed Sections -->
        <section class="section" id="service-categories">
            <div class="container">
                <?php foreach ($serviceCategories as $category): ?>
                    <div id="<?php echo safeOut($category['id']); ?>" style="margin-bottom: 70px; scroll-margin-top: 100px;">
                        <div class="section-header text-left" style="margin-bottom: 30px;">
                            <span class="section-kicker"><?php echo safeOut($category['eyebrow']); ?></span>
                            <h2 class="section-title"><i class="<?php echo safeOut($category['icon']); ?>" style="color: var(--primary-blue); margin-right: 10px;"></i> <?php echo safeOut($category['title']); ?></h2>
                            <p class="section-desc"><?php echo safeOut($category['desc']); ?></p>
                        </div>

                        <div class="different-grid">
                            <?php foreach ($category['services'] as $srv): ?>
                                <div class="diff-card">
                                    <h3 style="font-size: 1.15rem; margin-bottom: 10px;">
                                        <a href="<?php echo safeOut($srv['url']); ?>" style="color: var(--text-navy);">
                                            <?php echo safeOut($srv['name']); ?>
                                        </a>
                                    </h3>
                                    <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 16px;">
                                        <?php echo safeOut($srv['desc']); ?>
                                    </p>
                                    <a href="<?php echo safeOut($srv['url']); ?>" class="service-card-cta">
                                        Explore Service <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Consultation Banner -->
        <section class="section section-dark">
            <div class="container text-center" style="text-align: center; max-width: 800px;">
                <span class="spotlight-badge">Get Started</span>
                <h2 style="font-size: 2.3rem; margin-bottom: 18px;">Unsure Which Service Is Right for Your Next Stage?</h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.7; margin-bottom: 30px;">
                    Our senior digital directors conduct thorough market assessments to determine whether SEO, paid media, or website restructuring will unlock the fastest ROI for your brand.
                </p>
                <div style="display: inline-flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                    <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Schedule a Free Strategy Call</a>
                    <a href="faqs.php" class="btn btn-outline-white"><i class="fa fa-question-circle" aria-hidden="true"></i> View FAQs</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>
</body>
</html>
