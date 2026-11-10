<?php
/**
 * Metrics Mart Infoline Pvt Ltd - Reusable Technology Page Template
 * Provides consistent, high-fidelity UI/UX across all technology subpages.
 */
require_once __DIR__ . '/config.php';

function renderTechnologyPage($data) {
    $pageTitle = $data['title'] ?? (SITE_NAME . ' | Technology Solutions');
    $metaDesc = $data['metaDesc'] ?? 'Advanced software engineering and technology solutions from Metrics Mart Infoline Pvt Ltd.';
    $canonical = $data['canonical'] ?? 'technology.php';
    $category = $data['category'] ?? 'Technology';
    $badge = $data['badge'] ?? 'ENTERPRISE TECH STACK';
    $headline = $data['headline'] ?? 'Modern Technology Engineering';
    $subhead = $data['subhead'] ?? 'Scalable, secure, and future-ready technology architectures engineered for modern business.';
    $heroStats = $data['heroStats'] ?? [
        'Production-tested architecture & clean code standards',
        'Strict security hardening & data integrity protocols',
        'Cross-platform responsiveness & high concurrency tuning',
        'Seamless API and third-party cloud integrations'
    ];
    $overviewTitle = $data['overviewTitle'] ?? 'Technology Overview & Ecosystem';
    $overviewParagraphs = $data['overviewParagraphs'] ?? [];
    $featuresTitle = $data['featuresTitle'] ?? 'Key Features & Technical Capabilities';
    $features = $data['features'] ?? [];
    $applicationsTitle = $data['applicationsTitle'] ?? 'Enterprise & Business Applications';
    $applications = $data['applications'] ?? [];
    $servicesTitle = $data['servicesTitle'] ?? 'Metrics Mart Engineering & Implementation Services';
    $services = $data['services'] ?? [];
    $benefitsTitle = $data['benefitsTitle'] ?? 'Strategic Business Benefits';
    $benefits = $data['benefits'] ?? [];
    $faqs = $data['faqs'] ?? [];
    $relatedTechnologies = $data['relatedTechnologies'] ?? [];
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
    <meta property="og:type" content="article">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/../assets/CSS/Style.css'); ?>">
</head>
<body class="technology-detail-page">

    <!-- Shared Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <main id="mainContent">
        <!-- Technology Hero Banner -->
        <section class="page-hero">
            <div class="container page-hero-inner">
                <div>
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="technology.php">Technology</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="current"><?php echo safeOut($category); ?></span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-microchip" aria-hidden="true"></i> <?php echo safeOut($badge); ?></span>
                    <h1 class="page-hero-title"><?php echo safeOut($headline); ?></h1>
                    <p class="page-hero-desc"><?php echo safeOut($subhead); ?></p>

                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-laptop-code" aria-hidden="true"></i> Discuss Your Project</a>
                        <a href="#overview" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> Explore Architecture</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 12px; font-size: 1.25rem;">Why Metrics Mart?</h3>
                    <ul class="spotlight-checklist" style="margin-bottom: 20px;">
                        <?php foreach ($heroStats as $stat): ?>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span><?php echo safeOut($stat); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="contact.php" class="btn btn-primary btn-block">
                        <i class="fa fa-calendar-check" aria-hidden="true"></i> Request Technical Consultation
                    </a>
                </div>
            </div>
        </section>

        <!-- Technology Overview -->
        <section class="section" id="overview">
            <div class="container">
                <div class="section-header text-left" style="max-width: 980px;">
                    <span class="section-kicker">Architecture &amp; Foundation</span>
                    <h2 class="section-title"><?php echo safeOut($overviewTitle); ?></h2>
                    <?php foreach ($overviewParagraphs as $p): ?>
                        <p class="section-desc" style="margin-bottom: 16px;"><?php echo safeOut($p); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Key Features & Technical Capabilities -->
        <?php if (!empty($features)): ?>
        <section class="section section-surface" id="features">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Core Capabilities</span>
                    <h2 class="section-title"><?php echo safeOut($featuresTitle); ?></h2>
                    <p class="section-desc">Key architectural features and technical strengths that make this technology essential for enterprise workloads.</p>
                </div>

                <div class="different-grid">
                    <?php foreach ($features as $feature): ?>
                        <div class="diff-card">
                            <div class="diff-icon"><i class="<?php echo safeOut($feature['icon'] ?? 'fa fa-code'); ?>" aria-hidden="true"></i></div>
                            <h3><?php echo safeOut($feature['title']); ?></h3>
                            <p><?php echo safeOut($feature['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Business Applications & Real-World Use Cases -->
        <?php if (!empty($applications)): ?>
        <section class="section" id="applications">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Real-World Utility</span>
                    <h2 class="section-title"><?php echo safeOut($applicationsTitle); ?></h2>
                    <p class="section-desc">How businesses, startups, and enterprises deploy this technology to solve complex operational challenges.</p>
                </div>

                <div class="different-grid">
                    <?php foreach ($applications as $app): ?>
                        <div class="diff-card">
                            <div class="diff-icon" style="color: var(--accent-red); background: rgba(234, 69, 23, 0.08);"><i class="<?php echo safeOut($app['icon'] ?? 'fa fa-cube'); ?>" aria-hidden="true"></i></div>
                            <h3><?php echo safeOut($app['title']); ?></h3>
                            <p><?php echo safeOut($app['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Metrics Mart Development & Implementation Services -->
        <?php if (!empty($services)): ?>
        <section class="section section-surface" id="services">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Our Solutions</span>
                    <h2 class="section-title"><?php echo safeOut($servicesTitle); ?></h2>
                    <p class="section-desc">Full lifecycle technology consulting, custom engineering, migration, and ongoing support provided by our senior engineers.</p>
                </div>

                <div class="different-grid">
                    <?php foreach ($services as $srv): ?>
                        <div class="diff-card">
                            <div class="diff-icon"><i class="<?php echo safeOut($srv['icon'] ?? 'fa fa-laptop-code'); ?>" aria-hidden="true"></i></div>
                            <h3><?php echo safeOut($srv['title']); ?></h3>
                            <p><?php echo safeOut($srv['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Tangible Business Benefits -->
        <?php if (!empty($benefits)): ?>
        <section class="section section-dark" id="benefits">
            <div class="container">
                <div class="spotlight-grid">
                    <div>
                        <span class="spotlight-badge">Business Impact</span>
                        <h2><?php echo safeOut($benefitsTitle); ?></h2>
                        <p style="color: #cbd5e1; margin-bottom: 25px;">
                            We focus on sustainable technology value—eliminating technical debt, optimizing operational expenditure, and future-proofing your systems.
                        </p>
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-envelope" aria-hidden="true"></i> Get a Free Tech Roadmap</a>
                    </div>

                    <div>
                        <ul class="spotlight-checklist">
                            <?php foreach ($benefits as $benefit): ?>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span><strong><?php echo safeOut($benefit['title']); ?>:</strong> <?php echo safeOut($benefit['desc']); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Technology FAQs -->
        <?php if (!empty($faqs)): ?>
        <section class="section section-surface" id="tech-faqs">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Expert Insights</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-desc">Clear answers to common technical and business questions about this technology.</p>
                </div>

                <div class="faq-container">
                    <?php foreach ($faqs as $i => $faq): ?>
                        <div class="faq-item <?php echo ($i === 0) ? 'is-active' : ''; ?>">
                            <button type="button" class="faq-question">
                                <?php echo safeOut($faq['q']); ?>
                                <span class="faq-icon"><?php echo ($i === 0) ? '–' : '+'; ?></span>
                            </button>
                            <div class="faq-answer">
                                <p><?php echo safeOut($faq['a']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Related Technologies -->
        <?php if (!empty($relatedTechnologies)): ?>
        <section class="related-services-bar">
            <div class="container text-center" style="text-align: center;">
                <h3 style="font-size: 1.15rem; margin-bottom: 8px;">Explore Related Technologies &amp; Frameworks</h3>
                <div class="related-services-pills">
                    <?php foreach ($relatedTechnologies as $rel): ?>
                        <a href="<?php echo safeOut($rel['url']); ?>" class="service-pill-link">
                            <span><?php echo safeOut($rel['name']); ?></span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Pre-Footer CTA -->
        <section class="section" style="background-color: var(--primary-blue-light); padding: 50px 0;">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                <div>
                    <h3 style="font-size: 1.6rem; color: var(--text-navy); margin-bottom: 6px;">Ready to Build with Proven Technologies?</h3>
                    <p style="color: var(--text-main); margin: 0;">Discuss your architecture, codebase, or migration requirements with our senior software architects.</p>
                </div>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Request a Proposal</a>
                    <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i> Call <?php echo safeOut(PHONE_PRIMARY); ?></a>
                </div>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/../assets/JS/script.js'); ?>"></script>
</body>
</html>
<?php
}
