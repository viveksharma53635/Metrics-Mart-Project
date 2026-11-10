<?php
require_once __DIR__ . '/includes/config.php';

$techStacks = [
    [
        'category' => 'Frontend',
        'anchor' => 'frontend',
        'icon' => 'fa fa-desktop',
        'desc' => 'Lightweight, modular frontend frameworks and reactive libraries focused on lightning-fast rendering, accessibility, and fluid user experiences.',
        'items' => [
            [
                'name' => 'ReactJS',
                'url' => 'reactjs.php',
                'desc' => 'Component-driven user interfaces, virtual DOM reconciliation, and single-page application architectures for high-traffic platforms.'
            ],
            [
                'name' => 'AngularJS',
                'url' => 'angularjs.php',
                'desc' => 'Structured MVC/MVVM enterprise frameworks with comprehensive two-way data binding and dependency injection for complex workflows.'
            ],
            [
                'name' => 'Bootstrap',
                'url' => 'bootstrap.php',
                'desc' => 'Mobile-first responsive grid layouts, custom Sass tokens, and accessible UI components engineered with zero jQuery overhead.'
            ]
        ]
    ],
    [
        'category' => 'Backend',
        'anchor' => 'backend',
        'icon' => 'fa fa-server',
        'desc' => 'Robust, secure database and server architectures engineered for transactional integrity, high concurrency, and sub-second query execution.',
        'items' => [
            [
                'name' => 'DBMS',
                'url' => 'dbms.php',
                'desc' => 'Relational database schema modeling, ACID compliance guarantees, performance profiling, and enterprise disaster recovery planning.'
            ],
            [
                'name' => 'SQL Server DB Development',
                'url' => 'sql-server.php',
                'desc' => 'Enterprise Microsoft SQL Server architecture, advanced T-SQL stored procedures, AlwaysOn High Availability, and SSIS data pipelines.'
            ],
            [
                'name' => 'My SQL',
                'url' => 'mysql.php',
                'desc' => 'Open-source InnoDB relational database management, replication clusters, query indexing, and native LAMP/LEMP stack performance.'
            ]
        ]
    ],
    [
        'category' => 'Platforms',
        'anchor' => 'platforms',
        'icon' => 'fa fa-cloud',
        'desc' => 'Elastic, auto-scaling enterprise cloud infrastructures providing 99.99%+ availability, automated containerization, and global edge caching.',
        'items' => [
            [
                'name' => 'AWS',
                'url' => 'aws.php',
                'desc' => 'Amazon Web Services cloud architecture, EC2 auto-scaling, S3 object storage, RDS managed databases, and serverless Lambda functions.'
            ],
            [
                'name' => 'Azure',
                'url' => 'azure.php',
                'desc' => 'Microsoft Azure enterprise cloud solutions, hybrid cloud connectivity, managed Azure SQL instances, and Entra ID identity governance.'
            ],
            [
                'name' => 'GCP',
                'url' => 'gcp.php',
                'desc' => 'Google Cloud Platform infrastructure, Google Kubernetes Engine (GKE) container orchestration, and petabyte-scale BigQuery analytics.'
            ]
        ]
    ],
    [
        'category' => 'Mobile Development',
        'anchor' => 'mobile',
        'icon' => 'fa fa-mobile-screen-button',
        'desc' => 'Native mobile application engineering for iOS and Android delivering buttery-smooth 60/120fps frame rates and hardware-accelerated performance.',
        'items' => [
            [
                'name' => 'iOS Development',
                'url' => 'ios-development.php',
                'desc' => 'Native Swift and SwiftUI mobile apps for iPhone and iPad with Apple Pay, FaceID biometrics, and offline CoreData synchronization.'
            ],
            [
                'name' => 'Android Development',
                'url' => 'android-development.php',
                'desc' => 'Native Kotlin and Jetpack Compose mobile applications engineered for global scale, battery efficiency, and diverse OEM devices.'
            ]
        ]
    ],
    [
        'category' => 'CMS & E-Commerce',
        'anchor' => 'cms-ecommerce',
        'icon' => 'fa fa-cart-shopping',
        'desc' => 'Scalable content management systems, custom server-side web backends, and intelligent automation pipelines built for high conversion.',
        'items' => [
            [
                'name' => 'WordPress',
                'url' => 'wordpress-development.php',
                'desc' => 'Custom theme coding, bespoke Gutenberg block development, WooCommerce online stores, and speed optimization with zero builder bloat.'
            ],
            [
                'name' => 'PHP',
                'url' => 'php-development.php',
                'desc' => 'Modern object-oriented PHP 8 development, custom business logic portals, secure RESTful APIs, and legacy codebase refactoring.'
            ],
            [
                'name' => 'Python',
                'url' => 'python-development.php',
                'desc' => 'Full-stack Django and FastAPI web applications, automated web scrapers, ETL data processing pipelines, and AI/LLM model integrations.'
            ]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Stack &amp; Infrastructure Solutions | <?php echo safeOut(SITE_NAME); ?></title>
    <meta name="description" content="Explore the modern technology stack, software development frameworks, cloud platforms, and databases engineered by Metrics Mart Infoline Pvt Ltd.">
    <link rel="canonical" href="technology.php">

    <!-- Open Graph -->
    <meta property="og:title" content="Technology Stack | <?php echo safeOut(SITE_NAME); ?>">
    <meta property="og:description" content="Discover our frontend, backend, cloud platforms, mobile, and CMS/e-commerce technology ecosystems.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">
</head>
<body class="technology-page">

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
                        <span class="current">Technology</span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-microchip" aria-hidden="true"></i> Modern Architecture</span>
                    <h1 class="page-hero-title">Robust Technology for High-Performance Growth</h1>
                    <p class="page-hero-desc">
                        We leverage modern development frameworks, secure backend infrastructure, and scalable cloud platforms to deliver dependable digital solutions tailored to your business goals.
                    </p>

                    <div class="hero-actions">
                        <a href="contact.php" class="btn btn-accent"><i class="fa fa-laptop-code" aria-hidden="true"></i> Discuss Your Tech Needs</a>
                        <a href="#tech-categories" class="btn btn-outline-white"><i class="fa fa-arrow-down" aria-hidden="true"></i> View Our Stack</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 12px; font-size: 1.25rem;">Engineering Principles</h3>
                    <ul class="spotlight-checklist">
                        <li><i class="fa fa-check-circle"></i> <span>Clean, semantic code adhering to W3C standards</span></li>
                        <li><i class="fa fa-check-circle"></i> <span>Google Core Web Vitals speed optimization</span></li>
                        <li><i class="fa fa-check-circle"></i> <span>Enterprise server security &amp; SSL protocols</span></li>
                        <li><i class="fa fa-check-circle"></i> <span>Elastic auto-scaling cloud architectures</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Technology Stacks Breakdown -->
        <section class="section" id="tech-categories">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Our Ecosystem</span>
                    <h2 class="section-title">Built on Proven, Scalable Technologies</h2>
                    <p class="section-desc">
                        Explore our core technology categories and dedicated engineering solutions across frontend, backend, cloud, mobile, and CMS platforms.
                    </p>
                </div>

                <?php foreach ($techStacks as $stack): ?>
                    <div id="<?php echo safeOut($stack['anchor']); ?>" style="margin-bottom: 50px; scroll-margin-top: 100px;">
                        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 16px;">
                            <div class="pillar-icon-box" style="width: 48px; height: 48px; font-size: 1.3rem;">
                                <i class="<?php echo safeOut($stack['icon']); ?>"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.35rem; color: var(--text-navy); margin-bottom: 2px;"><?php echo safeOut($stack['category']); ?></h3>
                                <p style="font-size: 0.9rem; color: var(--text-muted); margin: 0;"><?php echo safeOut($stack['desc']); ?></p>
                            </div>
                        </div>

                        <div class="different-grid">
                            <?php foreach ($stack['items'] as $item): ?>
                                <div class="diff-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div>
                                        <h4 style="font-size: 1.1rem; margin-bottom: 10px; color: var(--text-navy);">
                                            <a href="<?php echo safeOut($item['url']); ?>" style="color: inherit; transition: color 0.2s ease;">
                                                <?php echo safeOut($item['name']); ?>
                                            </a>
                                        </h4>
                                        <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6; margin: 0 0 16px 0;">
                                            <?php echo safeOut($item['desc']); ?>
                                        </p>
                                    </div>
                                    <div style="margin-top: auto; padding-top: 12px; border-top: 1px solid var(--border-light);">
                                        <a href="<?php echo safeOut($item['url']); ?>" style="display: inline-flex; align-items: center; gap: 6px; color: var(--brand-gold); font-size: 0.88rem; font-weight: 600; transition: transform 0.2s ease;">
                                            Explore Architecture <i class="fa fa-arrow-right" style="font-size: 0.78rem;"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Pre-Footer CTA -->
        <section class="section section-dark text-center" style="text-align: center;">
            <div class="container" style="max-width: 800px;">
                <span class="spotlight-badge">Engineering Consultations</span>
                <h2 style="font-size: 2.3rem; margin-bottom: 18px;">Need a Robust Custom Web or Tech Solution?</h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.7; margin-bottom: 30px;">
                    Whether planning a new application build, a high-traffic e-commerce store, or a technical infrastructure migration, our engineers are ready to assist.
                </p>
                <a href="contact.php" class="btn btn-accent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Schedule a Technical Consultation</a>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>
</body>
</html>
