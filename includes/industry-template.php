<?php
/**
 * Metrics Mart Infoline Pvt Ltd - Reusable Industry Page Template
 * Renders a complete, SEO-optimised industry page using the site's design system.
 */
require_once __DIR__ . '/config.php';

function renderIndustryPage(array $d): void {

    /* ── Defaults ──────────────────────────────────────────────────────────── */
    $title        = $d['title']        ?? 'Industry | ' . SITE_NAME;
    $metaDesc     = $d['metaDesc']     ?? 'Industry-specific digital marketing and technology solutions from Metrics Mart Infoline Pvt Ltd.';
    $canonical    = $d['canonical']    ?? 'industry.php';
    $heroKicker   = $d['heroKicker']   ?? 'INDUSTRY EXPERTISE';
    $heroIcon     = $d['heroIcon']     ?? 'fa fa-industry';
    $heroH1       = $d['heroH1']       ?? 'Industry Digital Marketing Solutions';
    $heroH1Accent = $d['heroH1Accent'] ?? '';      // word(s) to colour green
    $heroDesc     = $d['heroDesc']     ?? 'Tailored digital strategies for your industry.';
    $breadcrumb   = $d['breadcrumb']   ?? 'Industry';// last crumb label

    // Intro section
    $introKicker  = $d['introKicker']  ?? 'Industry Overview';
    $introH2      = $d['introH2']      ?? 'About This Industry';
    $introPara1   = $d['introPara1']   ?? '';
    $introPara2   = $d['introPara2']   ?? '';
    $introChallenges = $d['introChallenges'] ?? [];
    $introImgIcon = $d['introImgIcon'] ?? 'fa fa-industry';
    $introImgLabel= $d['introImgLabel']?? 'Industry';

    // Services
    $servicesKicker= $d['servicesKicker'] ?? 'Our Services';
    $servicesH2    = $d['servicesH2']    ?? 'Industry-Specific Digital Services';
    $servicesDesc  = $d['servicesDesc']  ?? 'Comprehensive solutions built for your sector.';
    $services      = $d['services']      ?? [];

    // How we help
    $helpKicker   = $d['helpKicker']   ?? 'Strategic Approach';
    $helpH2       = $d['helpH2']       ?? 'How We Help Your Business Grow';
    $helpPara     = $d['helpPara']     ?? '';
    $helpPoints   = $d['helpPoints']   ?? [];

    // Why choose us
    $whyKicker    = $d['whyKicker']    ?? 'Why Choose Us';
    $whyH2        = $d['whyH2']        ?? 'Why Choose Metrics Mart Digital';
    $whyPoints    = $d['whyPoints']    ?? [];

    // Process
    $processKicker= $d['processKicker']?? 'Our Process';
    $processH2    = $d['processH2']    ?? 'Our Working Process';
    $processSteps = $d['processSteps'] ?? [];

    // CTA
    $ctaH2        = $d['ctaH2']        ?? 'Ready to Grow Your Business?';
    $ctaDesc      = $d['ctaDesc']      ?? 'Get in touch with our industry experts for a free consultation.';

    // FAQs
    $faqs         = $d['faqs']         ?? [];

    // Related
    $related      = $d['related']      ?? [];

    // Schema (FAQ)
    $schemaFaqs   = '';
    if (!empty($faqs)) {
        $faqArr = [];
        foreach ($faqs as $faq) {
            $faqArr[] = '{"@type":"Question","name":' . json_encode($faq['q']) . ',"acceptedAnswer":{"@type":"Answer","text":' . json_encode($faq['a']) . '}}';
        }
        $schemaFaqs = '<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[' . implode(',', $faqArr) . ']}</script>';
    }

    // Build hero H1 with optional accented word
    $heroH1Html = safeOut($heroH1);
    if ($heroH1Accent) {
        $heroH1Html = str_replace(safeOut($heroH1Accent), '<span>' . safeOut($heroH1Accent) . '</span>', $heroH1Html);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo safeOut($title); ?></title>
    <meta name="description" content="<?php echo safeOut($metaDesc); ?>">
    <link rel="canonical" href="https://metricsmartinfoline.com/<?php echo safeOut($canonical); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo safeOut($title); ?>">
    <meta property="og:description" content="<?php echo safeOut($metaDesc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metricsmartinfoline.com/<?php echo safeOut($canonical); ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/../assets/CSS/Style.css'); ?>">
    <link rel="stylesheet" href="assets/CSS/industry.css?v=<?php echo filemtime(__DIR__ . '/../assets/CSS/industry.css'); ?>">

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
        {"@type":"ListItem","position":1,"name":"Home","item":"https://metricsmartinfoline.com/"},
        {"@type":"ListItem","position":2,"name":"Industries","item":"https://metricsmartinfoline.com/industry.php"},
        {"@type":"ListItem","position":3,"name":"<?php echo addslashes($breadcrumb); ?>","item":"https://metricsmartinfoline.com/<?php echo safeOut($canonical); ?>"}
    ]}
    </script>
    <?php echo $schemaFaqs; ?>
</head>
<body class="mmd-industry-page">

    <?php include __DIR__ . '/header.php'; ?>

    <main id="mainContent">

        <!-- ═══ SECTION 1: HERO ════════════════════════════════════════════ -->
        <section class="mmd-industry-hero" aria-label="<?php echo safeOut($heroH1); ?>">
            <div class="container">
                <div class="mmd-hero-inner">
                    <div class="mmd-hero-content">
                        <!-- Breadcrumbs -->
                        <nav class="mmd-breadcrumbs" aria-label="Breadcrumb">
                            <a href="index.php">Home</a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="industry.php">Industries</a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="mmd-bc-current"><?php echo safeOut($breadcrumb); ?></span>
                        </nav>

                        <div class="mmd-hero-kicker">
                            <i class="<?php echo safeOut($heroIcon); ?>" aria-hidden="true"></i>
                            <?php echo safeOut($heroKicker); ?>
                        </div>

                        <h1 class="mmd-hero-h1"><?php echo $heroH1Html; ?></h1>
                        <p class="mmd-hero-desc"><?php echo safeOut($heroDesc); ?></p>

                        <div class="mmd-hero-actions">
                            <a href="contact.php" class="btn btn-accent">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Get a Free Consultation
                            </a>
                            <a href="#overview" class="btn btn-outline-white">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i> Explore Services
                            </a>
                        </div>
                    </div>

                    <!-- Side Card -->
                    <div class="mmd-hero-card">
                        <h3>Why Metrics Mart?</h3>
                        <ul class="mmd-hero-checklist">
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Industry-tailored digital strategies</li>
                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Transparent reporting &amp; analytics</li>
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

        <!-- ═══ SECTION 2: OVERVIEW ════════════════════════════════════════ -->
        <section class="section" id="overview" aria-labelledby="sec-overview-h2">
            <div class="container">
                <div class="mmd-intro-grid">
                    <!-- Illustration -->
                    <div class="mmd-intro-img" role="img" aria-label="<?php echo safeOut($introImgLabel); ?> illustration">
                        <div class="mmd-intro-img-placeholder">
                            <i class="<?php echo safeOut($introImgIcon); ?>" aria-hidden="true"></i>
                            <span><?php echo safeOut($introImgLabel); ?></span>
                        </div>
                    </div>
                    <!-- Text -->
                    <div class="mmd-intro-text">
                        <span class="section-kicker"><?php echo safeOut($introKicker); ?></span>
                        <h2 id="sec-overview-h2" class="section-title"><?php echo safeOut($introH2); ?></h2>
                        <?php if ($introPara1): ?><p><?php echo safeOut($introPara1); ?></p><?php endif; ?>
                        <?php if ($introPara2): ?><p><?php echo safeOut($introPara2); ?></p><?php endif; ?>

                        <?php if (!empty($introChallenges)): ?>
                        <h3 style="font-size:1rem;margin-bottom:12px;color:var(--text-navy);">Key Industry Challenges We Solve</h3>
                        <ul class="mmd-challenge-list" aria-label="Industry challenges">
                            <?php foreach ($introChallenges as $ch): ?>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <?php echo safeOut($ch); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                        <a href="contact.php" class="btn btn-primary">
                            <i class="fa fa-comments" aria-hidden="true"></i> Let's Talk Strategy
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 3: SERVICES ════════════════════════════════════════ -->
        <?php if (!empty($services)): ?>
        <section class="section section-surface" id="services" aria-labelledby="sec-services-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker"><?php echo safeOut($servicesKicker); ?></span>
                    <h2 id="sec-services-h2" class="section-title"><?php echo safeOut($servicesH2); ?></h2>
                    <p class="section-desc"><?php echo safeOut($servicesDesc); ?></p>
                </div>
                <div class="mmd-services-grid">
                    <?php foreach ($services as $svc): ?>
                    <div class="mmd-service-card">
                        <div class="mmd-svc-icon"><i class="<?php echo safeOut($svc['icon'] ?? 'fa fa-cog'); ?>" aria-hidden="true"></i></div>
                        <h3><?php echo safeOut($svc['title']); ?></h3>
                        <p><?php echo safeOut($svc['desc']); ?></p>
                        <?php if (!empty($svc['url'])): ?>
                        <a href="<?php echo safeOut($svc['url']); ?>" class="mmd-svc-link">
                            Explore <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ═══ SECTION 4: HOW WE HELP ════════════════════════════════════ -->
        <?php if (!empty($helpPoints)): ?>
        <section class="section" id="how-we-help" aria-labelledby="sec-help-h2">
            <div class="container">
                <div class="mmd-two-col">
                    <div>
                        <span class="section-kicker"><?php echo safeOut($helpKicker); ?></span>
                        <h2 id="sec-help-h2" class="section-title"><?php echo safeOut($helpH2); ?></h2>
                        <?php if ($helpPara): ?><p class="section-desc"><?php echo safeOut($helpPara); ?></p><?php endif; ?>
                        <a href="contact.php" class="btn btn-primary" style="margin-top:20px;">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Request a Strategy Call
                        </a>
                    </div>
                    <div>
                        <div class="mmd-features-grid" style="grid-template-columns:1fr 1fr;">
                            <?php foreach ($helpPoints as $pt): ?>
                            <div class="mmd-feature-card">
                                <i class="<?php echo safeOut($pt['icon'] ?? 'fa fa-check'); ?>" aria-hidden="true"></i>
                                <h3><?php echo safeOut($pt['title']); ?></h3>
                                <p><?php echo safeOut($pt['desc']); ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ═══ SECTION 5: WHY CHOOSE US ══════════════════════════════════ -->
        <?php if (!empty($whyPoints)): ?>
        <section class="section section-dark" id="why-us" aria-labelledby="sec-why-h2">
            <div class="container">
                <div class="spotlight-grid">
                    <div>
                        <span class="spotlight-badge"><?php echo safeOut($whyKicker); ?></span>
                        <h2 id="sec-why-h2"><?php echo safeOut($whyH2); ?></h2>
                        <p style="color:#cbd5e1;margin-bottom:25px;">We bring deep industry knowledge and data-driven execution to every campaign we run. Here is what makes us the right partner for your business.</p>
                        <a href="contact.php" class="btn btn-accent">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> Get Free Proposal
                        </a>
                    </div>
                    <div>
                        <ul class="spotlight-checklist">
                            <?php foreach ($whyPoints as $wp): ?>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <span><strong><?php echo safeOut($wp['title']); ?>:</strong> <?php echo safeOut($wp['desc']); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ═══ SECTION 6: PROCESS ════════════════════════════════════════ -->
        <?php if (!empty($processSteps)): ?>
        <section class="section section-surface" id="process" aria-labelledby="sec-process-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker"><?php echo safeOut($processKicker); ?></span>
                    <h2 id="sec-process-h2" class="section-title"><?php echo safeOut($processH2); ?></h2>
                    <p class="section-desc">A clear, structured approach that keeps every campaign on track from strategy to measurable results.</p>
                </div>
                <div class="mmd-industry-process">
                    <?php foreach ($processSteps as $i => $step): ?>
                    <div class="mmd-process-step">
                        <div class="mmd-step-num"><?php echo sprintf('%02d', $i + 1); ?></div>
                        <h3><?php echo safeOut($step['title']); ?></h3>
                        <p><?php echo safeOut($step['desc']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ═══ SECTION 7: CTA ════════════════════════════════════════════ -->
        <section class="mmd-industry-cta" id="enquiry" aria-labelledby="sec-cta-h2">
            <div class="container mmd-cta-inner">
                <span class="section-kicker" style="color:var(--brand-gold);">Start Today</span>
                <h2 id="sec-cta-h2"><?php echo safeOut($ctaH2); ?></h2>
                <p><?php echo safeOut($ctaDesc); ?></p>
                <div class="mmd-cta-buttons">
                    <a href="contact.php" class="btn btn-accent">
                        <i class="fa fa-comments" aria-hidden="true"></i> Get a Free Consultation
                    </a>
                    <a href="free-analysis.php" class="btn btn-outline-white">
                        <i class="fa fa-chart-bar" aria-hidden="true"></i> Get Free Website Analysis
                    </a>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 8: FAQ ════════════════════════════════════════════ -->
        <?php if (!empty($faqs)): ?>
        <section class="section" id="faqs" aria-labelledby="sec-faq-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Common Questions</span>
                    <h2 id="sec-faq-h2" class="section-title">Frequently Asked Questions</h2>
                    <p class="section-desc">Clear, honest answers about our <?php echo safeOut($breadcrumb); ?> digital marketing services.</p>
                </div>
                <div class="mmd-industry-faq" role="list">
                    <?php foreach ($faqs as $i => $faq): ?>
                    <div class="mmd-faq-item<?php echo ($i === 0) ? ' is-active' : ''; ?>" role="listitem">
                        <button type="button" class="mmd-faq-question" aria-expanded="<?php echo ($i === 0) ? 'true' : 'false'; ?>">
                            <?php echo safeOut($faq['q']); ?>
                            <span class="mmd-faq-icon" aria-hidden="true"><?php echo ($i === 0) ? '&times;' : '+'; ?></span>
                        </button>
                        <div class="mmd-faq-answer" <?php echo ($i === 0) ? '' : 'hidden'; ?>>
                            <div class="mmd-faq-answer-inner"><?php echo safeOut($faq['a']); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ═══ SECTION 9: RELATED INDUSTRIES ════════════════════════════ -->
        <?php if (!empty($related)): ?>
        <section class="section section-surface" id="related-industries" aria-labelledby="sec-related-h2">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Explore More</span>
                    <h2 id="sec-related-h2" class="section-title">Related Industries We Serve</h2>
                    <p class="section-desc">Discover how Metrics Mart Digital delivers results across other sectors.</p>
                </div>
                <div class="mmd-related-grid">
                    <?php foreach ($related as $rel): ?>
                    <a href="<?php echo safeOut($rel['url']); ?>" class="mmd-related-card">
                        <i class="<?php echo safeOut($rel['icon'] ?? 'fa fa-industry'); ?> mmd-related-icon" aria-hidden="true"></i>
                        <span><?php echo safeOut($rel['name']); ?></span>
                        <i class="fa fa-arrow-right mmd-related-arrow" aria-hidden="true"></i>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

    </main>

    <?php include __DIR__ . '/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/../assets/JS/script.js'); ?>"></script>
    <script>
    /* ── Industry FAQ Accordion ─────────────────────────────────────────── */
    (function () {
        'use strict';
        var items = document.querySelectorAll('.mmd-faq-item');
        items.forEach(function (item) {
            var btn    = item.querySelector('.mmd-faq-question');
            var answer = item.querySelector('.mmd-faq-answer');
            var icon   = item.querySelector('.mmd-faq-icon');
            if (!btn || !answer || !icon) return;

            btn.addEventListener('click', function () {
                var isOpen = item.classList.contains('is-active');

                // Close all
                items.forEach(function (el) {
                    el.classList.remove('is-active');
                    var a = el.querySelector('.mmd-faq-answer');
                    var ic = el.querySelector('.mmd-faq-icon');
                    var b = el.querySelector('.mmd-faq-question');
                    if (a) a.setAttribute('hidden', '');
                    if (ic) ic.innerHTML = '+';
                    if (b) b.setAttribute('aria-expanded', 'false');
                });

                // Open clicked if it was closed
                if (!isOpen) {
                    item.classList.add('is-active');
                    answer.removeAttribute('hidden');
                    icon.innerHTML = '&times;';
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });
    })();
    </script>
</body>
</html>
<?php
} // end renderIndustryPage
