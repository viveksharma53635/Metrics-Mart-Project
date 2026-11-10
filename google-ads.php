<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Google Ads & PPC Management Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Maximize return on ad spend (ROAS) and generate verified business leads with professional Google Ads management by Metrics Mart Infoline Pvt Ltd. Search, Display, and Performance Max.',
    'canonical' => 'google-ads.php',
    'badge' => 'CERTIFIED GOOGLE ADS SPECIALISTS',
    'headline' => 'Google Ads & PPC Management That Maximizes ROAS',
    'subhead' => 'Turn Google searches into instant, measurable revenue. We build, manage, and scale high-intent paid search, display, and shopping campaigns that eliminate wasted budget.',
    'overviewTitle' => 'Instant Traffic. Real Inquiries. Smarter PPC Campaigns.',
    'overviewParagraphs' => [
        'Pay-Per-Click advertising on Google is the fastest method to put your value proposition in front of customers actively seeking your services right now. However, misconfigured keywords, broad match traps, and subpar landing pages can rapidly drain your marketing budget with zero return.',
        'At Metrics Mart Infoline Pvt Ltd, our certified Google Ads managers treat your ad budget with fiduciary care. We engineer disciplined campaign structures, rigorous negative keyword lists, high-relevance ad copy with compelling extensions, and dedicated landing page funnels that maximize conversion rates.',
        'From high-ticket B2B service providers and healthcare clinics to e-commerce retailers, we continuously test bidding strategies, target audiences, and creative variations to drive down your Cost Per Acquisition (CPA) while scaling lead volume.'
    ],
    'featuresTitle' => 'Our PPC Campaign Management Scope',
    'features' => [
        [
            'icon' => 'fa fa-magnifying-glass-dollar',
            'title' => 'Search Network Ads',
            'desc' => 'Pinpoint targeting for high-intent transactional search queries with phrase and exact match structures, custom ad copy, and responsive assets.'
        ],
        [
            'icon' => 'fa fa-cart-shopping',
            'title' => 'Google Shopping & Performance Max',
            'desc' => 'Showcasing product visuals, prices, and reviews across Google Search, Shopping tab, YouTube, and Maps with automated Smart Bidding.'
        ],
        [
            'icon' => 'fa fa-ban',
            'title' => 'Negative Keyword Mining',
            'desc' => 'Aggressive weekly negative keyword exclusions to block irrelevant, informational, or accidental clicks that deplete your ad budget.'
        ],
        [
            'icon' => 'fa fa-repeat',
            'title' => 'Remarketing & Display Campaigns',
            'desc' => 'Re-engaging visitors who browsed your website without converting, keeping your brand top-of-mind across millions of partner websites.'
        ],
        [
            'icon' => 'fa fa-bullseye',
            'title' => 'Conversion Tracking & Call Attribution',
            'desc' => 'Deploying Google Tag Manager to track every phone call, form submission, WhatsApp click, and transaction with 100% precision.'
        ],
        [
            'icon' => 'fa fa-file-pen',
            'title' => 'High-Converting Landing Pages',
            'desc' => 'Designing dedicated, high-speed landing pages tailored specifically to your ad groups to maximize Quality Score and lower CPCs.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step PPC Optimization Methodology',
    'workflowSteps' => [
        [
            'title' => 'Strategy & Competitor Audit',
            'desc' => 'We analyze historical account data, evaluate competitor ad copy and bids, and determine optimal cost-per-click thresholds.'
        ],
        [
            'title' => 'Campaign Architecture & Copywriting',
            'desc' => 'We structure tightly-themed ad groups, write compelling responsive search ads, add extensions, and set up conversion tags.'
        ],
        [
            'title' => 'Launch & Negative Keyword Filtering',
            'desc' => 'We launch campaigns, review initial search query reports daily, and immediately prune non-converting search terms.'
        ],
        [
            'title' => 'Smart Bidding & Scaling',
            'desc' => 'We transition mature campaigns to Value-Based Bidding (Target CPA / Target ROAS) and scale winning keywords.'
        ]
    ],
    'benefitsTitle' => 'Why Choose Metrics Mart for Google Ads?',
    'benefits' => [
        ['title' => 'Immediate Inbound Lead Flow', 'desc' => 'Start generating qualified customer inquiries within 48 to 72 hours of campaign activation.'],
        ['title' => 'Elimination of Wasted Spend', 'desc' => 'Our negative keyword hygiene and exact targeting ensure every rupee of your budget reaches genuine prospects.'],
        ['title' => 'Quality Score Optimization', 'desc' => 'Higher Quality Scores reward your account with lower cost-per-click rates and superior ad placements over competitors.'],
        ['title' => 'Complete Transparency & Account Ownership', 'desc' => 'You retain 100% ownership of your Google Ads account, data, and payment methods with zero hidden markups.']
    ],
    'faqs' => [
        [
            'q' => 'How much budget should I start with for Google Ads?',
            'a' => 'Budget depends on your industry cost-per-click and target market size. We typically recommend starting with a budget that allows for at least 15 to 25 clicks per day to gather statistically significant data quickly.'
        ],
        [
            'q' => 'Do I own my Google Ads account?',
            'a' => 'Yes, 100%. We manage your account via our Google Ads Manager account (MCC), ensuring you always maintain complete administrative ownership of your campaigns, billing, and historical data.'
        ],
        [
            'q' => 'How do you track whether ads are actually generating leads?',
            'a' => 'We configure Google Tag Manager and GA4 conversion tracking for every form submission, click-to-call phone number, and WhatsApp chat click, attributing every conversion directly to the triggering keyword.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Performance Marketing', 'url' => 'performance-marketing.php'],
        ['name' => 'Search Engine Optimization', 'url' => 'seo.php'],
        ['name' => 'Facebook Marketing', 'url' => 'facebook-marketing.php'],
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php'],
        ['name' => 'Web Development', 'url' => 'web-development.php']
    ]
]);