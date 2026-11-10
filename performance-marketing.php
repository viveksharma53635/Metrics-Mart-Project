<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Performance Marketing Agency in Mumbai & Noida | Metrics Mart Infoline',
    'metaDesc' => 'Drive verified ROI, scalable customer acquisition, and high ROAS with performance marketing services by Metrics Mart Infoline Pvt Ltd. Multi-channel paid media campaigns.',
    'canonical' => 'performance-marketing.php',
    'badge' => 'DATA-DRIVEN MEDIA BUYING',
    'headline' => 'Performance Marketing That Accelerates Business Growth',
    'subhead' => 'Eliminate marketing guesswork. We combine algorithmic media buying, rigorous conversion rate optimization, and full-funnel attribution to deliver scalable customer acquisition.',
    'overviewTitle' => 'Outcome-Driven Marketing Engineered for Real Revenue',
    'overviewParagraphs' => [
        'Traditional advertising charges for impressions and vague awareness. In contrast, performance marketing ties every rupee of your media budget directly to measurable business milestones—qualified sales leads, app downloads, e-commerce transactions, and return on ad spend (ROAS).',
        'At Metrics Mart Infoline Pvt Ltd, our performance marketing specialists operate at the intersection of quantitative analytics, compelling visual creative, and advanced audience segmentation. We orchestrate cross-platform campaigns across Google, Meta (Facebook & Instagram), LinkedIn, and programmatic display.',
        'We track and optimize every step of your conversion funnel, driving down Customer Acquisition Cost (CAC) while scaling revenue efficiently.'
    ],
    'featuresTitle' => 'Our Performance Marketing Capabilities',
    'features' => [
        [
            'icon' => 'fa fa-arrows-split-up-and-left',
            'title' => 'Multi-Channel Media Buying',
            'desc' => 'Strategic allocation of ad budgets across Google Ads, Meta Ads, LinkedIn Ads, and YouTube to capture audiences throughout the entire buying journey.'
        ],
        [
            'icon' => 'fa fa-filter-circle-dollar',
            'title' => 'Full-Funnel Conversion Architecture',
            'desc' => 'Structuring prospecting, consideration, and retargeting tiers to convert cold traffic into loyal, high-lifetime-value customers.'
        ],
        [
            'icon' => 'fa fa-vial',
            'title' => 'Rigorous A/B Creative Testing',
            'desc' => 'Continual multivariate testing of ad hooks, visual angles, copy variations, and call-to-actions to systematically scale winning creatives.'
        ],
        [
            'icon' => 'fa fa-chart-line',
            'title' => 'Advanced Attribution & GA4 Setup',
            'desc' => 'Setting up server-side tracking, Meta Conversions API (CAPI), and GA4 event tracking to ensure accurate data amidst browser privacy shifts.'
        ],
        [
            'icon' => 'fa fa-laptop',
            'title' => 'Landing Page Optimization (CRO)',
            'desc' => 'Building high-velocity, friction-free landing pages that maximize conversion rates and lower cost-per-lead metrics.'
        ],
        [
            'icon' => 'fa fa-scale-balanced',
            'title' => 'ROAS & CAC Management',
            'desc' => 'Managing campaigns with strict guardrails on blended Customer Acquisition Costs and target Return on Ad Spend.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Performance Marketing Roadmap',
    'workflowSteps' => [
        [
            'title' => 'Unit Economics & Audience Audit',
            'desc' => 'We define your target CAC, customer lifetime value (LTV), buyer personas, and current funnel leakage points.'
        ],
        [
            'title' => 'Tracking & Conversion Architecture',
            'desc' => 'We configure server-side conversion APIs, customized landing pages, and UTM tracking schemas for 100% attribution clarity.'
        ],
        [
            'title' => 'Creative Sprint & Campaign Launch',
            'desc' => 'We deploy multi-format creatives across search, social, and display, analyzing initial conversion benchmarks within the first 14 days.'
        ],
        [
            'title' => 'Iterative Scaling & Optimization',
            'desc' => 'We reallocate budget dynamically to top-performing audience-creative pairs and scale profitable campaigns aggressively.'
        ]
    ],
    'benefitsTitle' => 'Why Partner with Metrics Mart for Performance Marketing?',
    'benefits' => [
        ['title' => 'Zero Vanity Metrics', 'desc' => 'We focus exclusively on revenue, cost per acquisition, and qualified sales leads—not meaningless impressions or clicks.'],
        ['title' => 'Dynamic Budget Reallocation', 'desc' => 'Budgets are actively shifted daily toward platforms and campaigns yielding the highest immediate return.'],
        ['title' => 'Conversion API Compliance', 'desc' => 'Our server-side tracking infrastructure ensures accurate attribution despite iOS privacy controls and ad blockers.'],
        ['title' => 'Dedicated Media Buyers', 'desc' => 'Experienced senior media buyers who monitor your accounts multiple times daily to protect budget efficiency.']
    ],
    'faqs' => [
        [
            'q' => 'How is performance marketing different from traditional digital advertising?',
            'a' => 'Traditional advertising focuses on brand reach and impressions with vague returns. Performance marketing is strictly accountable: you track every single conversion, lead, or sale directly to the specific ad creative and channel.'
        ],
        [
            'q' => 'Which platforms do you recommend for performance marketing?',
            'a' => 'This depends on your business model. For high-intent immediate search demand, Google Search and Shopping excel. For visually appealing D2C products or impulse buys, Meta (Facebook & Instagram) works wonders. For high-ticket B2B deals, Google and LinkedIn form the ideal combination.'
        ],
        [
            'q' => 'How quickly can a performance campaign be launched?',
            'a' => 'Once tracking, tracking pixels, and landing page creatives are finalized, campaigns are typically launched within 5 to 7 business days.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Google Ads & PPC', 'url' => 'google-ads.php'],
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php'],
        ['name' => 'Facebook Marketing', 'url' => 'facebook-marketing.php'],
        ['name' => 'Instagram Marketing', 'url' => 'instagram-marketing.php'],
        ['name' => 'Web Development', 'url' => 'web-development.php']
    ]
]);