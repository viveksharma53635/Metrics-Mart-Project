<?php
/**
 * Metrics Mart Infoline Pvt Ltd - Reusable Service Page Template
 * Provides consistent, high-fidelity UI/UX across all service subpages.
 */
require_once __DIR__ . '/config.php';

function renderServicePage($data) {
    $pageTitle = $data['title'] ?? (SITE_NAME . ' | Professional Digital Services');
    $metaDesc = $data['metaDesc'] ?? 'Professional digital marketing, search engine optimization, and web solutions from Metrics Mart Infoline Pvt Ltd.';
    $canonical = $data['canonical'] ?? 'service.php';
    $badge = $data['badge'] ?? 'SPECIALIZED SERVICE';
    $headline = $data['headline'] ?? 'Professional Digital Services';
    $subhead = $data['subhead'] ?? 'Turn search intent and digital channels into consistent business growth.';
    $overviewTitle = $data['overviewTitle'] ?? 'Service Overview & Business Value';
    $overviewParagraphs = $data['overviewParagraphs'] ?? [];
    $featuresTitle = $data['featuresTitle'] ?? 'Key Features & Deliverables';
    $features = $data['features'] ?? [];
    $workflowTitle = $data['workflowTitle'] ?? 'Our Proven 4-Step Process';
    $workflowSteps = $data['workflowSteps'] ?? [];
    $benefitsTitle = $data['benefitsTitle'] ?? 'Why Choose Metrics Mart for this Service';
    $benefits = $data['benefits'] ?? [];
    $faqs = $data['faqs'] ?? [];
    $relatedServices = $data['relatedServices'] ?? [];
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
<body class="service-detail-page">

    <!-- Shared Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <main id="mainContent">
        <!-- Service Hero Banner -->
        <section class="page-hero">
            <div class="container page-hero-inner">
                <div>
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="service.php">Services</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="current"><?php echo safeOut($headline); ?></span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-star" aria-hidden="true"></i> <?php echo safeOut($badge); ?></span>
                    <h1 class="page-hero-title"><?php echo safeOut($headline); ?></h1>
                    <p class="page-hero-desc"><?php echo safeOut($subhead); ?></p>

                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Discuss Your Project</a>
                        <a href="#overview" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> Learn More</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 12px; font-size: 1.25rem;">Why Partner With Us?</h3>
                    <ul class="spotlight-checklist" style="margin-bottom: 20px;">
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span>Customized, outcome-driven campaigns</span></li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span>Transparent performance metrics &amp; live reporting</span></li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span>Experienced senior strategists &amp; specialists</span></li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> <span>Ethical, compliance-aligned methodologies</span></li>
                    </ul>
                    <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="btn btn-primary btn-block">
                        <i class="fa fa-phone" aria-hidden="true"></i> Call Us: <?php echo safeOut(PHONE_PRIMARY); ?>
                    </a>
                </div>
            </div>
        </section>

        <!-- Service Overview & Value Proposition -->
        <section class="section" id="overview">
            <div class="container">
                <div class="section-header text-left" style="max-width: 960px;">
                    <span class="section-kicker">Strategic Overview</span>
                    <h2 class="section-title"><?php echo safeOut($overviewTitle); ?></h2>
                    <?php foreach ($overviewParagraphs as $p): ?>
                        <p class="section-desc" style="margin-bottom: 16px;"><?php echo safeOut($p); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Key Features & Deliverables Grid -->
        <?php if (!empty($features)): ?>
        <section class="section section-surface" id="features">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Core Capabilities</span>
                    <h2 class="section-title"><?php echo safeOut($featuresTitle); ?></h2>
                    <p class="section-desc">Comprehensive solutions engineered to drive maximum impact for your investment.</p>
                </div>

                <div class="different-grid">
                    <?php foreach ($features as $feature): ?>
                        <div class="diff-card">
                            <div class="diff-icon"><i class="<?php echo safeOut($feature['icon'] ?? 'fa fa-check'); ?>" aria-hidden="true"></i></div>
                            <h3><?php echo safeOut($feature['title']); ?></h3>
                            <p><?php echo safeOut($feature['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- 4-Step Strategic Process / Workflow -->
        <?php if (!empty($workflowSteps)): ?>
        <section class="section" id="process">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Execution Framework</span>
                    <h2 class="section-title"><?php echo safeOut($workflowTitle); ?></h2>
                    <p class="section-desc">A systematic, step-by-step roadmap from initial discovery to sustained growth.</p>
                </div>

                <div class="service-workflow-grid">
                    <?php foreach ($workflowSteps as $index => $step): ?>
                        <div class="workflow-step">
                            <span class="step-num">0<?php echo $index + 1; ?></span>
                            <h3><?php echo safeOut($step['title']); ?></h3>
                            <p><?php echo safeOut($step['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Measurable Benefits & Why Choose Us -->
        <?php if (!empty($benefits)): ?>
        <section class="section section-dark" id="benefits">
            <div class="container">
                <div class="spotlight-grid">
                    <div>
                        <span class="spotlight-badge">Measurable Value</span>
                        <h2><?php echo safeOut($benefitsTitle); ?></h2>
                        <p style="color: #cbd5e1; margin-bottom: 25px;">
                            We focus relentlessly on business metrics that move the bottom line—revenue growth, lead acquisition costs, and long-term customer engagement.
                        </p>
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-envelope" aria-hidden="true"></i> Request a Proposal</a>
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

        <!-- Service-Specific FAQs -->
        <?php if (!empty($faqs)): ?>
        <section class="section section-surface" id="service-faqs">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Common Inquiries</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-desc">Clear answers to help you make an informed decision.</p>
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

        <!-- Related Services Pills -->
        <?php if (!empty($relatedServices)): ?>
        <section class="related-services-bar">
            <div class="container text-center" style="text-align: center;">
                <h3 style="font-size: 1.15rem; margin-bottom: 8px;">Explore Related Digital Services</h3>
                <div class="related-services-pills">
                    <?php foreach ($relatedServices as $rel): ?>
                        <a href="<?php echo safeOut($rel['url']); ?>" class="service-pill-link">
                            <span><?php echo safeOut($rel['name']); ?></span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Service CTA Banner -->
        <section class="section" style="background-color: var(--primary-blue-light); padding: 50px 0;">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                <div>
                    <h3 style="font-size: 1.6rem; color: var(--text-navy); margin-bottom: 6px;">Ready to Scale Your Digital Performance?</h3>
                    <p style="color: var(--text-main); margin: 0;">Connect with our senior digital strategists for a free customized consultation.</p>
                </div>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Get a Free Quote</a>
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
