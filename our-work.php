<?php
require_once __DIR__ . '/includes/config.php';

$portfolioProjects = [
    [
        'category' => 'seo',
        'categoryName' => 'SEO Services',
        'name' => 'Clog London',
        'tagline' => 'They manufacture products with attention to style, comfort, quality, and environmental compliance.',
        'desc' => 'Clog London creates footwear that blends modern style with lasting comfort and exceptional quality. Each design is thoughtfully crafted using premium materials and responsible manufacturing practices, ensuring every pair not only looks good but also supports sustainable and ethical production. The brand’s commitment to detail, durability, and environmental care makes its products a perfect balance of fashion, comfort, and conscious craftsmanship.',
        'logo' => 'assets/img/clients/clog_london_logo.jpg',
        'link' => 'contact.php?project=clog-london'
    ],
    [
        'category' => 'seo',
        'categoryName' => 'SEO Services',
        'name' => 'Aadidev Enterprises',
        'tagline' => 'Aadidev Enterprises Delivering Quality with Trust',
        'desc' => 'Aadidev Enterprises is dedicated to providing reliable and value-driven services tailored to client needs. We combine expertise and innovative methods to ensure smooth execution in every project. Our focus is on delivering solutions that enhance performance and support long-term growth. With a commitment to excellence, we strive to exceed expectations through quality and professionalism.',
        'logo' => 'assets/img/clients/aadev_logo.jpg',
        'link' => 'contact.php?project=aadidev-enterprises'
    ],
    [
        'category' => 'seo',
        'categoryName' => 'SEO Services',
        'name' => 'Home Interiors',
        'tagline' => 'Transforming Spaces with Quality & Craftsmanship',
        'desc' => 'Home Interiors specializes in designing bespoke residential and commercial living spaces tailored to client aesthetics and functional needs. Combining modern craftsmanship and innovative materials, the brand delivers turnkey interior solutions that enhance elegance and everyday comfort.',
        'logo' => 'assets/img/clients/home-interiors.png',
        'link' => 'contact.php?project=home-interiors'
    ],
    [
        'category' => 'digital-marketing',
        'categoryName' => 'Digital Marketing Services',
        'name' => 'BhaiBhai Auto',
        'tagline' => 'Driving Automotive Excellence with Trust and Reliability',
        'desc' => 'BhaiBhai Auto provides comprehensive automotive sales, multi-brand spare parts, and vehicle servicing solutions. Focused on mechanical reliability and quick turnaround, they help private vehicle owners and commercial fleet operators maintain peak performance and road safety with dependable service.',
        'logo' => 'assets/img/clients/bhaibhaiauto_logo.jpg',
        'link' => 'contact.php?project=bhaibhai-auto'
    ],
    [
        'category' => 'smo',
        'categoryName' => 'SMO Services',
        'name' => 'RSACE',
        'tagline' => 'Excellence in Media, Creative Arts and Professional Training',
        'desc' => 'Ramesh Sippy Academy of Cinema and Entertainment (RSACE) delivers premier education in filmmaking, animation, and digital media production. Fostering future creative leaders, the academy provides hands-on industry training and academic rigour under seasoned media professionals.',
        'logo' => 'assets/img/clients/rsace.png',
        'link' => 'contact.php?project=rsace'
    ],
    [
        'category' => 'ppc',
        'categoryName' => 'PPC Services',
        'name' => 'Sonali Express',
        'tagline' => 'Fast, Reliable Cargo & Logistics Solutions',
        'desc' => 'Sonali Express offers nationwide multimodal logistics, parcel delivery, freight forwarding, and expedited courier services. With specialized handling and real-time shipment visibility, the brand powers supply chains for retailers, manufacturers, and e-commerce enterprises.',
        'logo' => 'assets/img/clients/sonali_express_logo.jpg',
        'link' => 'contact.php?project=sonali-express'
    ],
    [
        'category' => 'martech',
        'categoryName' => 'Martech Consulting Services',
        'name' => 'Bigness Enterprises',
        'tagline' => 'Empowering Commerce with Scalable Trading & Distribution',
        'desc' => 'Bigness Enterprises specializes in multi-category commercial distribution, supply chain management, and wholesale merchandise. Through streamlined inventory operations and strategic market partnerships, they deliver value across industrial and retail channels.',
        'logo' => 'assets/img/clients/bignees_logo.jpg',
        'link' => 'contact.php?project=bigness-enterprises'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work &amp; Case Studies | <?php echo safeOut(SITE_NAME); ?></title>
    <meta name="description" content="Explore recent client case studies, digital marketing achievements, and web development projects completed by Metrics Mart Infoline Pvt Ltd.">
    <link rel="canonical" href="our-work.php">

    <!-- Open Graph -->
    <meta property="og:title" content="Our Work &amp; Case Studies | <?php echo safeOut(SITE_NAME); ?>">
    <meta property="og:description" content="Discover proven case studies and measurable digital performance results across SEO, Digital Marketing, SMO, PPC, and Martech.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">

    <!-- Scoped Styles for Our Work Showcase (Strictly preserving Metrics Mart Theme) -->
    <style>
        .work-tabs-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin-bottom: 40px;
        }
        .work-tab-btn {
            background: #ffffff;
            border: 1px solid var(--border-light);
            color: var(--text-navy);
            padding: 10px 22px;
            border-radius: 30px;
            font-family: var(--font-heading);
            font-size: 0.92rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        }
        .work-tab-btn:hover {
            border-color: var(--brand-gold);
            color: var(--brand-gold);
            transform: translateY(-2px);
        }
        .work-tab-btn.is-active {
            background: var(--brand-gold);
            color: #111111;
            border-color: var(--brand-gold);
            box-shadow: 0 4px 14px rgba(76, 175, 146, 0.28);
        }
        .work-client-card {
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: 24px;
            padding: 38px 42px;
            margin-bottom: 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            display: flex;
            align-items: center;
            gap: 40px;
            transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
        }
        .work-client-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 34px rgba(0, 0, 0, 0.08);
            border-color: rgba(76, 175, 146, 0.35);
        }
        .work-client-logo-box {
            width: 210px;
            height: 210px;
            min-width: 210px;
            border-radius: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            border: 5px solid #f8fafc;
            flex-shrink: 0;
            padding: 24px;
            box-sizing: border-box;
        }
        .work-client-logo-box img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            object-position: center;
            display: block;
            margin: auto;
            transition: transform 0.3s ease;
        }
        .work-client-card:hover .work-client-logo-box img {
            transform: scale(1.05);
        }
        .work-client-content {
            flex: 1;
        }
        .work-client-badge {
            display: inline-block;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: var(--accent-red);
            background: rgba(234, 69, 23, 0.08);
            padding: 4px 14px;
            border-radius: 20px;
            margin-bottom: 12px;
        }
        .work-client-title {
            font-size: 1.65rem;
            color: var(--text-navy);
            margin: 0 0 8px 0;
            font-weight: 700;
            line-height: 1.25;
        }
        .work-client-tagline {
            font-size: 1.02rem;
            color: var(--brand-gold);
            font-weight: 600;
            margin: 0 0 14px 0;
            line-height: 1.45;
        }
        .work-client-desc {
            font-size: 0.94rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin: 0 0 22px 0;
        }
        .work-client-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 11px 24px;
            background: var(--accent-red);
            color: #ffffff !important;
            border-radius: 8px;
            font-size: 0.92rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 12px rgba(234, 69, 23, 0.2);
        }
        .work-client-btn:hover {
            background: #b82434;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(234, 69, 23, 0.3);
        }
        @media (max-width: 900px) {
            .work-client-card {
                flex-direction: column;
                text-align: center;
                gap: 25px;
                padding: 30px 24px;
            }
            .work-client-logo-box {
                width: 170px;
                height: 170px;
                min-width: 170px;
                margin: 0 auto;
                padding: 18px;
            }
            .work-client-badge {
                margin: 0 auto 12px auto;
            }
            .work-client-btn {
                margin: 0 auto;
            }
        }
        @media (max-width: 600px) {
            .work-tabs-nav {
                gap: 8px;
            }
            .work-tab-btn {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body class="portfolio-page">

    <!-- Shared Header -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="mainContent">
        <!-- Page Hero (Adapted from Reference Content with Metrics Mart Design) -->
        <section class="page-hero">
            <div class="container page-hero-inner">
                <div>
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="current">Our Work</span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-briefcase" aria-hidden="true"></i> Client Showcase</span>
                    <h1 class="page-hero-title">Our Work</h1>
                    <p class="page-hero-desc">
                        Metrics Mart Infoline is a results-driven digital marketing agency that boosts online visibility, drives targeted traffic, and enhances conversions for businesses through expert digital strategies.
                    </p>
                    <p class="page-hero-desc" style="margin-top: -10px;">
                        Our work demonstrates our ability to design, develop, and deliver high-quality digital solutions that help brands grow and stand out.
                    </p>

                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Discover Solutions</a>
                        <a href="#our-work-showcase" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> View Portfolio</a>
                    </div>
                </div>

                <div class="page-hero-card" style="display: flex; align-items: center; justify-content: center; background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.12); padding: 25px; border-radius: var(--radius-lg);">
                    <img src="assets/img/clients/our-work.png" alt="Our Work Showcase" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
            </div>
        </section>

        <!-- Main Our Work Showcase Section (Category Tabs & Client Portfolio Cards from Reference) -->
        <section class="section" id="our-work-showcase">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Portfolio &amp; Client Success</span>
                    <h2 class="section-title">Delivering Measurable Growth Across Industries</h2>
                    <p class="section-desc">
                        Explore our featured client engagements across Search Engine Optimization, Digital Marketing, SMO, PPC, and Martech Consulting.
                    </p>
                </div>

                <!-- Category Filter Tabs from Reference -->
                <div class="work-tabs-nav" role="tablist" aria-label="Work Categories">
                    <button type="button" class="work-tab-btn is-active" data-filter="all">All Services</button>
                    <button type="button" class="work-tab-btn" data-filter="seo">SEO Services</button>
                    <button type="button" class="work-tab-btn" data-filter="digital-marketing">Digital Marketing Services</button>
                    <button type="button" class="work-tab-btn" data-filter="smo">SMO Services</button>
                    <button type="button" class="work-tab-btn" data-filter="ppc">PPC Services</button>
                    <button type="button" class="work-tab-btn" data-filter="martech">Martech Consulting Services</button>
                </div>

                <!-- Client Portfolio Cards from Reference -->
                <div class="work-clients-list" id="workClientsList">
                    <?php foreach ($portfolioProjects as $project): ?>
                        <div class="work-client-card" data-category="<?php echo safeOut($project['category']); ?>">
                            <div class="work-client-logo-box">
                                <img src="<?php echo safeOut($project['logo']); ?>" alt="<?php echo safeOut($project['name']); ?> Logo">
                            </div>
                            <div class="work-client-content">
                                <span class="work-client-badge"><?php echo safeOut($project['categoryName']); ?></span>
                                <h3 class="work-client-title"><?php echo safeOut($project['name']); ?></h3>
                                <h5 class="work-client-tagline"><?php echo safeOut($project['tagline']); ?></h5>
                                <p class="work-client-desc"><?php echo safeOut($project['desc']); ?></p>
                                <a href="<?php echo safeOut($project['link']); ?>" class="work-client-btn">
                                    <span>View More</span>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Case Study Inquiry Banner -->
        <section class="section section-dark text-center" style="text-align: center;">
            <div class="container" style="max-width: 800px;">
                <span class="spotlight-badge">Your Next Growth Chapter</span>
                <h2 style="font-size: 2.3rem; margin-bottom: 18px;">Ready to Become Our Next Success Story?</h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.7; margin-bottom: 30px;">
                    Contact our strategy team today to review your current digital footprint, analyze competitor gaps, and construct an actionable roadmap.
                </p>
                <div style="display: inline-flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                    <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Request a Free Proposal</a>
                    <a href="service.php" class="btn btn-outline-white"><i class="fa fa-th-large" aria-hidden="true"></i> Explore Our Services</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>

    <!-- Interactive Category Filter JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.work-tab-btn');
            const clientCards = document.querySelectorAll('.work-client-card');

            tabButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const filter = this.getAttribute('data-filter');

                    tabButtons.forEach(btn => btn.classList.remove('is-active'));
                    this.classList.add('is-active');

                    clientCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');
                        if (filter === 'all' || cardCategory === filter) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
