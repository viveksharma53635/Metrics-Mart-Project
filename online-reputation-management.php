<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Online Reputation Management (ORM) Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Protect, build, and repair your corporate and personal brand reputation online. Ethical review management, negative content suppression, and positive brand narrative by Metrics Mart Infoline.',
    'canonical' => 'online-reputation-management.php',
    'badge' => 'CORPORATE & EXECUTIVE ORM',
    'headline' => 'Online Reputation Management (ORM) Services',
    'subhead' => 'Take full control of your brand story. We build, protect, and restore your digital reputation, ensuring that prospective clients, investors, and partners encounter a positive, trustworthy first impression.',
    'overviewTitle' => 'Your Reputation is Your Most Valuable Corporate Asset',
    'overviewParagraphs' => [
        'In an era where 92% of business buyers read online reviews and Google search results before signing a contract, an unfair negative review, misleading complaint, or outdated article can permanently damage your deal pipeline and brand equity.',
        'At Metrics Mart Infoline Pvt Ltd, our Online Reputation Management (ORM) specialists utilize proven search engine suppression strategies, proactive positive asset creation, and systematic review generation systems. We help companies and executives overcome negative search noise and build an unassailable digital fortress.',
        'We operate with strict confidentiality, discretion, and 100% white-hat methodologies to ensure your true credibility and achievements dominate the first page of Google.'
    ],
    'featuresTitle' => 'Our ORM Solutions & Capabilities',
    'features' => [
        [
            'icon' => 'fa fa-shield-virus',
            'title' => 'Negative Search Suppression',
            'desc' => 'Ethically displacing unfair negative search results, defamatory forum posts, and outdated complaints down beyond the first two pages of Google.'
        ],
        [
            'icon' => 'fa fa-star-half-stroke',
            'title' => 'Review Generation & Management',
            'desc' => 'Systematic post-purchase review funnels that generate authentic 5-star feedback across Google, Trustpilot, Glassdoor, and industry review sites.'
        ],
        [
            'icon' => 'fa fa-user-tie',
            'title' => 'Executive & Leadership Branding',
            'desc' => 'Establishing commanding digital footprints for founders, CEOs, and directors through optimized LinkedIn profiles, interviews, and thought leadership articles.'
        ],
        [
            'icon' => 'fa fa-newspaper',
            'title' => 'Positive PR & Media Syndication',
            'desc' => 'Publishing authoritative press releases and featured articles on reputable digital publications to occupy high-ranking SERP real estate.'
        ],
        [
            'icon' => 'fa fa-bell',
            'title' => '24/7 Brand Sentiment Monitoring',
            'desc' => 'Continuous automated monitoring of social media, news portals, and discussion boards for brand mentions to address potential crises before they escalate.'
        ],
        [
            'icon' => 'fa fa-scale-balanced',
            'title' => 'Defamation & Content Removal Assistance',
            'desc' => 'Assessing policy violations and submitting formal removal requests to webmasters, hosting providers, and search engines for infringing content.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step ORM Strategy Framework',
    'workflowSteps' => [
        [
            'title' => 'Reputation Audit & Vulnerability Mapping',
            'desc' => 'We perform deep forensic audits of your branded search results, sentiment scores, and review distribution across all major portals.'
        ],
        [
            'title' => 'Positive Asset Architecture',
            'desc' => 'We design, verify, and publish high-authority corporate profiles, executive blogs, and official press releases designed to outrank negative links.'
        ],
        [
            'title' => 'Authority Amplification & Suppression',
            'desc' => 'We execute aggressive search engine optimization on the new positive assets, naturally pushing unwanted negative content down and off Page 1.'
        ],
        [
            'title' => 'Review Nurturing & Ongoing Defense',
            'desc' => 'We establish continuous review workflows and real-time alerts to maintain long-term brand immunity against future attacks.'
        ]
    ],
    'benefitsTitle' => 'Why Partner with Metrics Mart for ORM?',
    'benefits' => [
        ['title' => 'Strict Client Confidentiality', 'desc' => 'We work under strict Non-Disclosure Agreements (NDAs) to protect sensitive corporate communications and executive privacy.'],
        ['title' => 'Restored Deal Conversion Rates', 'desc' => 'Ensure potential clients who search your brand prior to signing encounter glowing testimonials and professional achievements.'],
        ['title' => 'Permanent SERP Asset Ownership', 'desc' => 'The high-authority profiles and publications we create remain under your control as permanent digital assets.'],
        ['title' => 'Proactive Crisis Preparedness', 'desc' => 'Build a resilient digital presence that naturally absorbs negative PR or rogue competitor attacks without ranking disruption.']
    ],
    'faqs' => [
        [
            'q' => 'Can negative search results or reviews be removed from Google completely?',
            'a' => 'If content violates Google content policies, copyright laws, or terms of service, it can often be legally de-indexed. When direct removal is not legally applicable, we utilize search suppression to push negative links down to pages 2 and 3 where less than 2% of searchers ever look.'
        ],
        [
            'q' => 'How long does an Online Reputation Management campaign take?',
            'a' => 'Review generation and sentiment improvements often yield positive impact within 30 to 60 days. Comprehensive search suppression of high-authority negative links typically requires 3 to 6 months of steady authority building.'
        ],
        [
            'q' => 'Do you handle executive reputation as well as corporate brand reputation?',
            'a' => 'Yes. We frequently manage the public search profiles of founders, managing directors, and key executives whose personal names directly impact investor and client confidence.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Search Engine Optimization', 'url' => 'seo.php'],
        ['name' => 'Google My Business', 'url' => 'google-my-business.php'],
        ['name' => 'Content Marketing', 'url' => 'content-marketing.php'],
        ['name' => 'Social Media Marketing', 'url' => 'social-media-marketing.php'],
        ['name' => 'Google Promotion', 'url' => 'google-promotion.php']
    ]
]);