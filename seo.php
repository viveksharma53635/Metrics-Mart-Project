<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Search Engine Optimization (SEO) Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Drive first-page Google rankings and high-intent organic traffic with our enterprise SEO services in Mumbai and Noida. Technical audits, on-page optimization, and high-authority link building.',
    'canonical' => 'seo.php',
    'badge' => 'ORGANIC SEARCH EXCELLENCE',
    'headline' => 'Search Engine Optimization (SEO) Services',
    'subhead' => 'Transform your website into an organic lead-generating asset. We help businesses rank higher on Google, capture qualified search intent, and outperform competitors.',
    'overviewTitle' => 'Why Enterprise Search Engine Optimization is Essential for Growth',
    'overviewParagraphs' => [
        'In today’s digital marketplace, over 70% of buyer journeys originate with an online search. Simply having a website is no longer sufficient; your target prospects must be able to discover your business at the precise moment they are evaluating solutions.',
        'At Metrics Mart Infoline Pvt Ltd, our SEO team combines deep technical site hygiene, semantic keyword intelligence, competitive content clustering, and sustainable white-hat link acquisition. We focus on search terms that have genuine commercial intent, ensuring your organic traffic converts into phone calls, quotation requests, and loyal customers.',
        'Whether you are an ambitious local company in Mumbai or an established enterprise serving national and international markets, our SEO frameworks are tailored to achieve durable search engine visibility that withstands algorithm updates.'
    ],
    'featuresTitle' => 'Comprehensive SEO Deliverables',
    'features' => [
        [
            'icon' => 'fa fa-code',
            'title' => 'Technical SEO & Architecture',
            'desc' => 'Comprehensive crawling audits, indexation fixes, Core Web Vitals acceleration, XML sitemaps, structured schema data, and mobile rendering optimization.'
        ],
        [
            'icon' => 'fa fa-file-lines',
            'title' => 'On-Page & Semantic SEO',
            'desc' => 'Strategic metadata architecture, keyword placement, header hierarchy, internal linking silos, and user-intent-focused content enhancements.'
        ],
        [
            'icon' => 'fa fa-link',
            'title' => 'Authority Link Acquisition',
            'desc' => '100% white-hat editorial outreach, digital PR placements, and industry citation acquisition that build genuine domain authority and trust.'
        ],
        [
            'icon' => 'fa fa-map-marker-alt',
            'title' => 'Local & Geo-Targeted Visibility',
            'desc' => 'Optimization for local map packs, localized keyword intent, Google Business profiles, and location-specific service landing pages.'
        ],
        [
            'icon' => 'fa fa-chart-line',
            'title' => 'Keyword & Competitor Intelligence',
            'desc' => 'In-depth research identifying high-converting search queries, competitor ranking gaps, and untapped market opportunities in your vertical.'
        ],
        [
            'icon' => 'fa fa-desktop',
            'title' => 'Conversion Rate Optimization (CRO)',
            'desc' => 'Aligning inbound traffic with clear calls to action, user-friendly contact touchpoints, and friction-free inquiry pathways.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Strategic SEO Methodology',
    'workflowSteps' => [
        [
            'title' => 'Audit & Diagnostic Discovery',
            'desc' => 'We perform an exhaustive audit of your technical infrastructure, backlink profile, content performance, and competitor search footprints.'
        ],
        [
            'title' => 'Strategy & Keyword Architecture',
            'desc' => 'We map high-intent commercial keywords into structured topical clusters and outline an actionable 6-month roadmap.'
        ],
        [
            'title' => 'On-Site & Technical Execution',
            'desc' => 'Our technical team resolves speed bottlenecks, restructures internal links, optimizes meta data, and produces high-value content.'
        ],
        [
            'title' => 'Authority Building & Monthly Scaling',
            'desc' => 'We acquire relevant backlinks, monitor ranking fluctuations, refine underperforming pages, and provide transparent monthly ROI reports.'
        ]
    ],
    'benefitsTitle' => 'Measurable Advantages of Partnering with Metrics Mart',
    'benefits' => [
        ['title' => 'Sustainable Long-Term ROI', 'desc' => 'Unlike paid ads which vanish when budget stops, organic rankings provide compounding returns month after month.'],
        ['title' => 'Higher Conversion Intent', 'desc' => 'Organic searchers deliberately seeking solutions exhibit significantly higher conversion readiness than passive banner audiences.'],
        ['title' => 'Enhanced Brand Authority', 'desc' => 'First-page Google rankings establish immediate credibility, consumer trust, and marketplace leadership.'],
        ['title' => 'Transparent Monthly Dashboards', 'desc' => 'Real-time keyword tracking, organic traffic breakdowns, and conversion attribution delivered directly to your inbox.']
    ],
    'faqs' => [
        [
            'q' => 'How long does it take for SEO campaigns to deliver measurable results?',
            'a' => 'Most businesses experience measurable indexation and ranking improvements within 60 to 90 days. Substantial organic traffic growth and consistent lead generation typically mature within 3 to 6 months depending on existing domain authority and keyword competition.'
        ],
        [
            'q' => 'Do you use ethical, white-hat SEO techniques?',
            'a' => 'Absolutely. Metrics Mart Infoline strictly adheres to Google Search Essentials and Webmaster Guidelines. We never employ spammy private blog networks (PBNs) or automated link schemes that risk manual penalties.'
        ],
        [
            'q' => 'How do you determine which keywords to target?',
            'a' => 'We evaluate search volume, keyword difficulty, buyer intent, and competitor positions. We prioritize terms with strong purchase or inquiry intent rather than broad informational keywords that generate unqualified traffic.'
        ],
        [
            'q' => 'Will I receive regular reporting on campaign progress?',
            'a' => 'Yes. Every client receives comprehensive monthly reports detailing keyword movements, organic impression growth, top landing page performance, and goal conversions, followed by a strategic review call.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Local SEO', 'url' => 'local-seo.php'],
        ['name' => 'Google My Business', 'url' => 'google-my-business.php'],
        ['name' => 'E-Commerce SEO', 'url' => 'ecommerce-seo.php'],
        ['name' => 'Google Ads', 'url' => 'google-ads.php'],
        ['name' => 'Web Development', 'url' => 'web-development.php']
    ]
]);