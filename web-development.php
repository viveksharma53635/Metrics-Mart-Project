<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Custom Web Development Services in Mumbai & Noida | Metrics Mart Infoline',
    'metaDesc' => 'Fast, modern, responsive website and web application development by Metrics Mart Infoline Pvt Ltd. Custom PHP, WordPress, E-Commerce, and corporate portal solutions.',
    'canonical' => 'web-development.php',
    'badge' => 'FULL-STACK WEB ENGINEERING',
    'headline' => 'Custom Web Development for Modern Brands',
    'subhead' => 'First impressions decide business deals. We build stunning, lightning-fast, secure websites and web applications engineered to convert visitors into loyal clients.',
    'overviewTitle' => 'High-Performance Web Engineering Tailored to Your Business Goals',
    'overviewParagraphs' => [
        'Your website is the digital storefront and primary anchor of your entire marketing ecosystem. A slow, clunky, or outdated website destroys customer trust and drives valuable prospects into the arms of your competitors.',
        'At Metrics Mart Infoline Pvt Ltd, our web engineering team builds custom digital solutions that marry elegant design with robust code. From bespoke PHP web platforms and dynamic corporate portals to scalable WordPress solutions and e-commerce stores, we engineer platforms built for speed, security, and search engine visibility.',
        'Every website we build is 100% responsive across desktop, tablet, and mobile screens, passes Google Core Web Vitals benchmarks with flying colors, and incorporates intuitive content management systems so your team maintains effortless control.'
    ],
    'featuresTitle' => 'Our Web Development Capabilities',
    'features' => [
        [
            'icon' => 'fa fa-code',
            'title' => 'Custom PHP & Backend Development',
            'desc' => 'Clean, modular object-oriented PHP architecture built for high concurrency, security, and custom business logic integrations.'
        ],
        [
            'icon' => 'fa-brands fa-wordpress',
            'title' => 'WordPress & CMS Development',
            'desc' => 'Lightweight, custom-coded WordPress themes and Gutenberg blocks with zero bloated page builders, ensuring blazing-fast load speeds.'
        ],
        [
            'icon' => 'fa fa-cart-shopping',
            'title' => 'E-Commerce Platforms & Stores',
            'desc' => 'Scalable online store solutions on Shopify, WooCommerce, or custom PHP carts with secure payment gateways and inventory sync.'
        ],
        [
            'icon' => 'fa fa-gauge-high',
            'title' => 'Core Web Vitals & Speed Optimization',
            'desc' => 'Sub-second load times, asset minification, image WebP compression, caching protocols, and 95+ Google PageSpeed scores.'
        ],
        [
            'icon' => 'fa fa-shield-halved',
            'title' => 'Enterprise Security & SSL Protocols',
            'desc' => 'Hardened code security, CSRF protection, SQL injection prevention, automated cloud backups, and SSL encryption.'
        ],
        [
            'icon' => 'fa fa-wrench',
            'title' => 'Ongoing Maintenance & Support',
            'desc' => 'Proactive 24/7 uptime monitoring, security patching, database optimization, and on-demand feature expansion.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Web Development Process',
    'workflowSteps' => [
        [
            'title' => 'Discovery & Wireframe Architecture',
            'desc' => 'We define site architecture, user journeys, content hierarchies, and build structural wireframes before writing code.'
        ],
        [
            'title' => 'UI/UX Visual Design Approval',
            'desc' => 'Our designers create pixel-perfect desktop and mobile mockups aligned with your corporate brand guidelines for your sign-off.'
        ],
        [
            'title' => 'Clean Coding & Integration Sprint',
            'desc' => 'We code your website using semantic HTML5, modern CSS3, responsive JavaScript, and clean backend PHP logic.'
        ],
        [
            'title' => 'Quality Assurance & Production Launch',
            'desc' => 'Exhaustive cross-browser testing, mobile responsiveness checks, SEO redirect verification, and flawless zero-downtime deployment.'
        ]
    ],
    'benefitsTitle' => 'Why Build Your Website with Metrics Mart?',
    'benefits' => [
        ['title' => 'Engineered for Search Engines from Day One', 'desc' => 'Clean semantic markup, schema integration, and optimized URL structures built natively for SEO dominance.'],
        ['title' => 'High Mobile Conversion Rate', 'desc' => 'Mobile-first design ensures effortless thumb navigation, readable typography, and quick click-to-call buttons.'],
        ['title' => 'No Vendor Lock-In', 'desc' => 'You receive 100% full ownership of source code, database, and hosting accounts with zero restrictive proprietary licensing.'],
        ['title' => 'Ongoing Technical Support', 'desc' => 'Our local Mumbai and Noida development teams are always on hand for rapid troubleshooting and site enhancements.']
    ],
    'faqs' => [
        [
            'q' => 'How long does it take to develop a custom corporate website?',
            'a' => 'Standard business websites typically take 3 to 4 weeks from initial wireframes to production launch. Larger e-commerce stores or complex custom web applications range between 6 to 8 weeks.'
        ],
        [
            'q' => 'Will I be able to update content on the website myself?',
            'a' => 'Yes! We build user-friendly administration dashboards and content management systems (such as WordPress or custom admin panels) and provide full training so you can edit text, photos, and blog posts effortlessly.'
        ],
        [
            'q' => 'Will my new website be mobile responsive and fast?',
            'a' => 'Every single website we build is thoroughly tested across iPhones, Android devices, iPads, laptops, and 4K desktop screens, and engineered to pass Google Core Web Vitals speed tests.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'UI/UX & Web Design', 'url' => 'web-design.php'],
        ['name' => 'Search Engine Optimization', 'url' => 'seo.php'],
        ['name' => 'E-Commerce SEO', 'url' => 'ecommerce-seo.php'],
        ['name' => 'Google Ads', 'url' => 'google-ads.php'],
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php']
    ]
]);
