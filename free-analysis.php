<?php
require_once __DIR__ . '/includes/config.php';

$formSubmitted = false;
$formSuccess = false;
$errorMessage = '';

// Process Free Analysis Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['analysis_submit'])) {
    $formSubmitted = true;
    $csrfToken = $_POST['csrf_token'] ?? '';
    $fullName = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $rawWebsite = trim($_POST['website'] ?? '');
    $primaryGoal = trim($_POST['goal'] ?? 'Improve My Keyword Rankings');
    $targetMarket = trim($_POST['target_market'] ?? '');
    $serviceInterested = trim($_POST['service_interested'] ?? '');
    $requirements = trim($_POST['requirements'] ?? '');
    $honeypot = trim($_POST['verification_code'] ?? ''); // Anti-spam hidden field

    // 1. Verify CSRF Token
    if (!verifyCsrfToken($csrfToken)) {
        $errorMessage = "Security verification failed. Please refresh the page and try again.";
    }
    // 2. Anti-spam honeypot
    elseif (!empty($honeypot)) {
        // Silent success for bots
        $formSuccess = true;
    }
    // 3. Validation
    elseif (empty($fullName) || empty($email) || empty($phone) || empty($rawWebsite)) {
        $errorMessage = "Please fill in all required fields (Full Name, Email, Phone, and Website URL).";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    }
    elseif (strlen(preg_replace('/\D/', '', $phone)) < 7) {
        $errorMessage = "Please provide a valid contact telephone or mobile number.";
    }
    else {
        // Normalize URL if scheme is missing
        $checkUrl = $rawWebsite;
        if (!preg_match('~^(?:f|ht)tps?://~i', $checkUrl)) {
            $checkUrl = 'https://' . $checkUrl;
        }

        if (!filter_var($checkUrl, FILTER_VALIDATE_URL)) {
            $errorMessage = "Please enter a valid website address (e.g., yourcompany.com or https://yourcompany.com).";
        } else {
            $websiteUrl = $checkUrl;
            // Valid submission - queued for review by senior strategists
            $formSuccess = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Website Analysis &amp; SEO Audit | <?php echo safeOut(SITE_NAME); ?></title>
    <meta name="description" content="Request a free website analysis from Metrics Mart Infoline Pvt Ltd. Discover critical SEO ranking gaps, technical site issues, Core Web Vitals performance, and custom growth opportunities.">
    <link rel="canonical" href="free-analysis.php">

    <!-- Open Graph -->
    <meta property="og:title" content="Free Website Analysis &amp; SEO Audit | <?php echo safeOut(SITE_NAME); ?>">
    <meta property="og:description" content="Get an in-depth, complimentary technical and search performance audit of your website from certified digital marketing specialists.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">

    <!-- Scoped Styles for Free Analysis Page -->
    <style>
        .analysis-goal-group {
            margin-bottom: 22px;
        }
        .analysis-goal-label {
            display: block;
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-navy);
            margin-bottom: 10px;
        }
        .analysis-goal-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        @media (max-width: 540px) {
            .analysis-goal-grid {
                grid-template-columns: 1fr;
            }
        }
        .goal-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            background: #f8fafc;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            cursor: pointer;
            font-size: 0.88rem;
            color: var(--text-main);
            font-weight: 500;
            transition: all 0.2s ease;
            user-select: none;
        }
        .goal-option:hover {
            border-color: var(--brand-gold);
            background: #ffffff;
        }
        .goal-option input[type="radio"] {
            accent-color: var(--brand-gold);
            margin: 0;
            cursor: pointer;
        }
        .goal-option:has(input:checked) {
            border-color: var(--brand-gold);
            background: rgba(76, 175, 146, 0.08);
            font-weight: 600;
            color: var(--text-navy);
        }
        .analysis-form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
        @media (max-width: 600px) {
            .analysis-form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }
        .analysis-benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 20px;
        }
        .analysis-benefit-icon {
            width: 42px;
            height: 42px;
            min-width: 42px;
            border-radius: 50%;
            background: rgba(76, 175, 146, 0.12);
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-top: 2px;
        }
        .analysis-benefit-text h4 {
            font-size: 1.05rem;
            color: var(--text-navy);
            margin-bottom: 4px;
        }
        .analysis-benefit-text p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 0;
        }
        .process-steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            margin-top: 30px;
        }
        @media (max-width: 900px) {
            .process-steps-grid {
                grid-template-columns: 1fr;
            }
        }
        .process-step-card {
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            padding: 32px 28px;
            box-shadow: var(--shadow-sm);
            position: relative;
            transition: var(--transition);
        }
        .process-step-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: rgba(76, 175, 146, 0.35);
        }
        .step-number-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--brand-gold);
            color: #111111;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 18px;
        }
        .process-step-card h3 {
            font-size: 1.15rem;
            color: var(--text-navy);
            margin-bottom: 10px;
        }
        .process-step-card p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.65;
            margin-bottom: 0;
        }
        .partners-logo-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            align-items: center;
            margin-top: 35px;
        }
        @media (max-width: 1024px) {
            .partners-logo-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 16px;
            }
        }
        @media (max-width: 640px) {
            .partners-logo-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }
        }
        .partner-logo-item {
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            padding: 18px 20px;
            height: 95px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }
        .partner-logo-item:hover {
            border-color: var(--brand-gold);
            box-shadow: 0 6px 18px rgba(76, 175, 146, 0.18);
            transform: translateY(-3px);
        }
        .partner-logo-item img {
            max-width: 100%;
            max-height: 52px;
            width: auto;
            height: auto;
            object-fit: contain;
            object-position: center;
            display: block;
            margin: 0 auto;
            transition: transform 0.25s ease;
        }
        .partner-logo-item:hover img {
            transform: scale(1.05);
        }
        @media (min-width: 1025px) {
            .partner-logo-item:last-child:nth-child(6n + 1) {
                grid-column: 3 / span 2;
                max-width: 220px;
                justify-self: center;
                width: 100%;
            }
        }
        @media (min-width: 641px) and (max-width: 1024px) {
            .partner-logo-item:last-child:nth-child(3n + 1) {
                grid-column: 2;
            }
        }
        @media (max-width: 640px) {
            .partner-logo-item:last-child:nth-child(2n + 1) {
                grid-column: 1 / -1;
                max-width: 220px;
                justify-self: center;
                width: 100%;
            }
        }
    </style>
</head>
<body class="analysis-page">

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
                        <span class="current">Free Website Analysis</span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-magnifying-glass-chart" aria-hidden="true"></i> Complimentary Growth Audit</span>
                    <h1 class="page-hero-title">Free Website Analysis &amp; SEO Performance Audit</h1>
                    <p class="page-hero-desc">
                        Uncover hidden technical errors, keyword ranking gaps, and untapped organic customer opportunities. Request your comprehensive, no-obligation audit from the certified digital strategists at Metrics Mart.
                    </p>

                    <div class="hero-actions">
                        <a href="#analysis-form" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Request Free Audit</a>
                        <a href="#what-we-analyze" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> What We Examine</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 15px; font-size: 1.25rem;">Audit Deliverables</h3>
                    <div style="display: flex; flex-direction: column; gap: 12px; font-size: 0.95rem; color: #cbd5e1;">
                        <p style="margin: 0;"><i class="fa fa-check-circle" style="color: var(--brand-gold); width: 20px;"></i> <strong>Core Web Vitals:</strong> Real page speed &amp; mobile health check</p>
                        <p style="margin: 0;"><i class="fa fa-check-circle" style="color: var(--brand-gold); width: 20px;"></i> <strong>Keyword Opportunity:</strong> High-intent terms your competitors rank for</p>
                        <p style="margin: 0;"><i class="fa fa-check-circle" style="color: var(--brand-gold); width: 20px;"></i> <strong>Technical Indexing:</strong> Canonical tags, schema, and crawl roadblocks</p>
                        <p style="margin: 0;"><i class="fa fa-check-circle" style="color: var(--brand-gold); width: 20px;"></i> <strong>100% Free:</strong> No credit card required, zero sales pressure</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Form & Benefit Section -->
        <section class="section" id="analysis-form">
            <div class="container">
                <div class="lead-grid">
                    <!-- Left: Why Request an Analysis -->
                    <div class="lead-intro">
                        <span class="section-kicker">Multi-Point Diagnostic</span>
                        <h2 class="section-title">Turn Lost Website Traffic Into Revenue Growth</h2>
                        <p class="section-desc" style="margin-bottom: 30px;">
                            Your website is the central engine of your online customer acquisition. If it suffers from crawl roadblocks, sluggish load times, weak meta architecture, or search keyword misalignment, qualified buyers are choosing your competitors every single day.
                        </p>

                        <div class="analysis-benefit-item">
                            <div class="analysis-benefit-icon"><i class="fa fa-user-tie" aria-hidden="true"></i></div>
                            <div class="analysis-benefit-text">
                                <h4>Reviewed by Senior Strategists</h4>
                                <p>We don't just email you generic, unverified crawler dumps. Our senior SEO specialists manually inspect your website architecture and high-priority keywords.</p>
                            </div>
                        </div>

                        <div class="analysis-benefit-item">
                            <div class="analysis-benefit-icon"><i class="fa fa-crosshairs" aria-hidden="true"></i></div>
                            <div class="analysis-benefit-text">
                                <h4>Actionable, Prioritized Checklist</h4>
                                <p>Receive a clear roadmap categorizing issues by commercial impact: from quick technical fixes to high-yield organic search ranking opportunities.</p>
                            </div>
                        </div>

                        <div class="analysis-benefit-item">
                            <div class="analysis-benefit-icon"><i class="fa fa-chart-pie" aria-hidden="true"></i></div>
                            <div class="analysis-benefit-text">
                                <h4>Direct Competitor Benchmarking</h4>
                                <p>See how your domain stacks up against top market competitors in search market share, backlink profiles, and target keyword rankings.</p>
                            </div>
                        </div>

                        <!-- Direct Assistance Snapshot -->
                        <div class="diff-card" style="margin-top: 30px; padding: 22px 25px; border-left: 3px solid var(--brand-gold);">
                            <h4 style="font-size: 1rem; color: var(--text-navy); margin-bottom: 6px;">Prefer to Speak Directly with a Specialist?</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 10px;">Reach our Mumbai head office or Noida branch directly during business hours.</p>
                            <p style="font-size: 0.92rem; margin-bottom: 0;">
                                <i class="fa fa-phone" style="color: var(--primary-blue); margin-right: 6px;"></i>
                                <strong>Direct Helpline:</strong> <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a>
                            </p>
                        </div>
                    </div>

                    <!-- Right: Analysis Request Form -->
                    <div class="lead-form-card" style="box-shadow: var(--shadow-lg); border: 1px solid var(--border-light);">
                        <h3>Request Your Free Website Analysis</h3>
                        <p>Fill out the details below. Our certified team will analyze your website and email your personalized audit report within 24–48 business hours.</p>

                        <?php if ($formSubmitted && $formSuccess): ?>
                            <div class="form-feedback success">
                                <strong><i class="fa fa-circle-check"></i> Analysis Request Received!</strong><br>
                                Thank you, <strong><?php echo safeOut($fullName); ?></strong>. We have queued <strong><?php echo safeOut($websiteUrl ?? $rawWebsite); ?></strong> for an expert technical and search audit. Our senior growth strategists will send your complimentary performance report to <strong><?php echo safeOut($email); ?></strong> within 24 business hours.
                            </div>
                        <?php elseif ($formSubmitted && !empty($errorMessage)): ?>
                            <div class="form-feedback error">
                                <strong><i class="fa fa-circle-exclamation"></i> Error:</strong> <?php echo safeOut($errorMessage); ?>
                            </div>
                        <?php endif; ?>

                        <form action="free-analysis.php#analysis-form" method="POST" class="validate-form">
                            <!-- CSRF Security Token -->
                            <input type="hidden" name="csrf_token" value="<?php echo safeOut(getCsrfToken()); ?>">

                            <!-- Anti-Spam Honeypot Field (Hidden) -->
                            <div style="display: none;" aria-hidden="true">
                                <label for="form_verification_code">Do not fill this field</label>
                                <input type="text" id="form_verification_code" name="verification_code" tabindex="-1" autocomplete="off" value="">
                            </div>

                            <!-- Primary Goal Selection -->
                            <div class="analysis-goal-group">
                                <label class="analysis-goal-label">What is your primary digital goal? *</label>
                                <div class="analysis-goal-grid">
                                    <label class="goal-option">
                                        <input type="radio" name="goal" value="Improve My Keyword Rankings" <?php echo (!isset($_POST['goal']) || $_POST['goal'] === 'Improve My Keyword Rankings') ? 'checked' : ''; ?>>
                                        <span>Improve Keyword Rankings</span>
                                    </label>
                                    <label class="goal-option">
                                        <input type="radio" name="goal" value="Increase Website Traffic" <?php echo (isset($_POST['goal']) && $_POST['goal'] === 'Increase Website Traffic') ? 'checked' : ''; ?>>
                                        <span>Increase Website Traffic</span>
                                    </label>
                                    <label class="goal-option">
                                        <input type="radio" name="goal" value="Generate Leads / Sales" <?php echo (isset($_POST['goal']) && $_POST['goal'] === 'Generate Leads / Sales') ? 'checked' : ''; ?>>
                                        <span>Generate Leads &amp; Sales</span>
                                    </label>
                                    <label class="goal-option">
                                        <input type="radio" name="goal" value="Overall Digital Growth" <?php echo (isset($_POST['goal']) && $_POST['goal'] === 'Overall Digital Growth') ? 'checked' : ''; ?>>
                                        <span>Full Business Growth</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Website URL (Required) -->
                            <div class="form-group">
                                <label class="form-label" for="analysis_website">Website URL to Analyze *</label>
                                <input type="text" id="analysis_website" name="website" class="form-control" placeholder="e.g. yourcompany.com or https://yourcompany.com" required value="<?php echo safeOut($_POST['website'] ?? ''); ?>">
                            </div>

                            <div class="analysis-form-row">
                                <!-- Full Name -->
                                <div class="form-group">
                                    <label class="form-label" for="analysis_name">Your Name *</label>
                                    <input type="text" id="analysis_name" name="name" class="form-control" placeholder="e.g. Amit Sharma" required value="<?php echo safeOut($_POST['name'] ?? ''); ?>">
                                </div>

                                <!-- Work Email -->
                                <div class="form-group">
                                    <label class="form-label" for="analysis_email">Business Email *</label>
                                    <input type="email" id="analysis_email" name="email" class="form-control" placeholder="name@company.com" required value="<?php echo safeOut($_POST['email'] ?? ''); ?>">
                                </div>
                            </div>

                            <div class="analysis-form-row">
                                <!-- Phone -->
                                <div class="form-group">
                                    <label class="form-label" for="analysis_phone">Phone / WhatsApp *</label>
                                    <input type="tel" id="analysis_phone" name="phone" class="form-control" placeholder="+91 98765 43210" required value="<?php echo safeOut($_POST['phone'] ?? ''); ?>">
                                </div>

                                <!-- Target Market -->
                                <div class="form-group">
                                    <label class="form-label" for="analysis_market">Target Market / Geography</label>
                                    <input type="text" id="analysis_market" name="target_market" class="form-control" placeholder="e.g. Pan-India, Mumbai, USA, Global" value="<?php echo safeOut($_POST['target_market'] ?? ''); ?>">
                                </div>
                            </div>

                            <!-- Services Interested -->
                            <div class="form-group">
                                <label class="form-label" for="analysis_services">Primary Service of Interest</label>
                                <input type="text" id="analysis_services" name="service_interested" class="form-control" placeholder="e.g. SEO, Google Ads, Web Development, ORM" value="<?php echo safeOut($_POST['service_interested'] ?? ''); ?>">
                            </div>

                            <!-- Specific Requirements -->
                            <div class="form-group">
                                <label class="form-label" for="analysis_requirements">Specific Challenges or Competitors to Check (Optional)</label>
                                <textarea id="analysis_requirements" name="requirements" class="form-control" rows="3" placeholder="Share your key competitors, specific target keywords, or current ranking issues..."><?php echo safeOut($_POST['requirements'] ?? ''); ?></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" name="analysis_submit" class="btn btn-accent btn-block" style="font-size: 1rem; padding: 14px 20px;">
                                <i class="fa fa-magnifying-glass-chart" aria-hidden="true"></i> Request Free Analysis Report
                            </button>

                            <p style="font-size: 0.82rem; color: var(--text-muted); text-align: center; margin-top: 14px; margin-bottom: 0;">
                                <i class="fa fa-lock" aria-hidden="true" style="color: var(--primary-blue); margin-right: 4px;"></i>
                                Strictly confidential. We never sell your data or spam your inbox.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- What the Analysis Covers -->
        <section class="section section-surface" id="what-we-analyze">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Comprehensive Scope</span>
                    <h2 class="section-title">What Our Free Website Analysis Covers</h2>
                    <p class="section-desc">Our diagnostic evaluates the foundational pillars of modern search ranking and technical performance to pinpoint exact revenue opportunities.</p>
                </div>

                <div class="different-grid">
                    <!-- Pillar 1: Search Optimization -->
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                        <h3>Search Engine Optimization (SEO)</h3>
                        <p>We evaluate your domain visibility, indexed pages, keyword ranking distribution, search intent alignment, and uncover high-intent keyword gaps your competitors are winning.</p>
                    </div>

                    <!-- Pillar 2: Technical Health -->
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-gears" aria-hidden="true"></i></div>
                        <h3>Technical SEO &amp; Crawlability</h3>
                        <p>We inspect robots.txt files, XML sitemaps, canonical tags, 404 broken links, duplicate content risks, redirect chains, and schema markup that could be blocking Google bots.</p>
                    </div>

                    <!-- Pillar 3: Page Speed & Vitals -->
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-gauge-high" aria-hidden="true"></i></div>
                        <h3>Speed &amp; Core Web Vitals</h3>
                        <p>Slow pages kill conversions. We review Google Core Web Vitals (LCP, FID, CLS), TTFB server response times, image weight, and CSS/JS asset efficiency on both mobile and desktop.</p>
                    </div>

                    <!-- Pillar 4: Competitor Benchmark -->
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-chess" aria-hidden="true"></i></div>
                        <h3>Competitor Gap Analysis</h3>
                        <p>See where you stand against your top 3 organic competitors. Discover which keywords drive their organic traffic, their estimated search share, and where you can leapfrog them.</p>
                    </div>

                    <!-- Pillar 5: Mobile & UX -->
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-mobile-screen" aria-hidden="true"></i></div>
                        <h3>Mobile Usability &amp; UX</h3>
                        <p>Over 70% of web traffic is mobile. We evaluate touch targets, viewport scaling, visual hierarchy, and responsive design flaws that drive potential customers away.</p>
                    </div>

                    <!-- Pillar 6: Conversion & Lead Flow -->
                    <div class="diff-card">
                        <div class="diff-icon"><i class="fa fa-filter-circle-dollar" aria-hidden="true"></i></div>
                        <h3>Conversion &amp; Lead Flow</h3>
                        <p>Rankings mean nothing without commercial conversions. We audit call-to-action visibility, inquiry form friction, contact prominence, and trust indicators across your key landing pages.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works: 3-Step Process -->
        <section class="section" id="how-it-works">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Simple &amp; Transparent</span>
                    <h2 class="section-title">How Your Free Analysis Works</h2>
                    <p class="section-desc">From initial URL submission to receiving your custom growth blueprint in three simple steps.</p>
                </div>

                <div class="process-steps-grid">
                    <div class="process-step-card">
                        <span class="step-number-badge">1</span>
                        <h3>Submit Your Site &amp; Goals</h3>
                        <p>Share your website address, contact information, and primary growth focus using our simple submission form above.</p>
                    </div>

                    <div class="process-step-card">
                        <span class="step-number-badge">2</span>
                        <h3>Multi-Point Diagnostic</h3>
                        <p>Our senior in-house strategists combine industry-standard diagnostic tools with manual inspection of your site's technical and search health.</p>
                    </div>

                    <div class="process-step-card">
                        <span class="step-number-badge">3</span>
                        <h3>Receive Your Action Plan</h3>
                        <p>Within 24–48 business hours, you receive a detailed, prioritized PDF audit report and an optional strategy review call with zero obligation.</p>
                    </div>
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
                        <img src="assets/img/clients/wiredarticle_logo.webp" alt="wiredarticle image loading="lazy">
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
                    Whether you need to fix hidden technical SEO roadblocks, scale organic traffic, or deploy high-converting PPC campaigns, our senior strategists are ready to partner with you.
                </p>
                <div style="display: inline-flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                    <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Partner With Us</a>
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
