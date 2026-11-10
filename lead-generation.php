<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'B2B & B2C Lead Generation Services in India | Metrics Mart Infoline',
    'metaDesc' => 'Fill your sales pipeline with verified, high-intent prospective customers. Multi-channel B2B and B2C lead generation services from Metrics Mart Infoline Pvt Ltd.',
    'canonical' => 'lead-generation.php',
    'badge' => 'QUALIFIED PIPELINE ACCELERATION',
    'headline' => 'High-Conversion Lead Generation Solutions',
    'subhead' => 'Stop chasing unverified contacts. We design and execute multi-channel inbound lead generation funnels that deliver qualified prospects ready to discuss business with your sales team.',
    'overviewTitle' => 'Predictable, Scalable Customer Acquisition for Modern Businesses',
    'overviewParagraphs' => [
        'Revenue growth depends entirely on pipeline consistency. Relying exclusively on unpredictable word-of-mouth or cold outreach creates feast-or-famine cycles that throttle business expansion.',
        'At Metrics Mart Infoline Pvt Ltd, we architect automated, performance-tested lead generation pipelines. We combine high-intent Google Search ads, targeted LinkedIn outreach, Meta instant forms, dedicated landing pages, and lead qualification workflows.',
        'Every lead delivered to your sales team is verified with phone number, email address, company details, and specific project requirements, ensuring your sales reps spend their valuable time closing deals rather than chasing unresponsive leads.'
    ],
    'featuresTitle' => 'Our Lead Generation Capabilities',
    'features' => [
        [
            'icon' => 'fa fa-filter-circle-dollar',
            'title' => 'Multi-Channel Acquisition Funnels',
            'desc' => 'Deploying synchronized lead capture across Google Search Ads, LinkedIn InMail/Forms, and Meta Sponsored Lead ads.'
        ],
        [
            'icon' => 'fa fa-desktop',
            'title' => 'High-Converting Dedicated Landing Pages',
            'desc' => 'Engineering fast, distraction-free landing pages with persuasive copywriting, social proof, and mobile-first lead capture forms.'
        ],
        [
            'icon' => 'fa fa-user-check',
            'title' => 'Lead Qualification & Verification',
            'desc' => 'Implementing pre-qualification questions, OTP verification, and criteria filters to weed out irrelevant inquiries before they reach your reps.'
        ],
        [
            'icon' => 'fa fa-bolt',
            'title' => 'Instant CRM & WhatsApp Routing',
            'desc' => 'Automated webhooks that deliver new leads instantly to your CRM, sales inbox, or WhatsApp within seconds of submission.'
        ],
        [
            'icon' => 'fa fa-magnet',
            'title' => 'Lead Magnet & Whitepaper Funnels',
            'desc' => 'Creating high-value industry guides, calculators, and audit tools that attract senior decision-makers in exchange for contact details.'
        ],
        [
            'icon' => 'fa fa-chart-pie',
            'title' => 'Cost-Per-Lead (CPL) Optimization',
            'desc' => 'Continuous bid adjustments, negative keyword filtering, and A/B split testing to drive down cost per qualified lead over time.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Lead Generation Roadmap',
    'workflowSteps' => [
        [
            'title' => 'Ideal Customer Profile (ICP) Definition',
            'desc' => 'We define your highest-margin customer personas, decision-maker job titles, geographic boundaries, and core purchasing triggers.'
        ],
        [
            'title' => 'Funnel Engineering & Lead Magnets',
            'desc' => 'We design customized landing pages, set up CRM webhooks, and craft persuasive direct-response ad copy.'
        ],
        [
            'title' => 'Multi-Channel Campaign Launch',
            'desc' => 'We launch targeted ad sets on Google and Meta, testing multiple hook variations to gather statistical conversion data.'
        ],
        [
            'title' => 'Lead Quality Review & Budget Scaling',
            'desc' => 'We conduct weekly quality syncs with your sales team, refine targeting based on closed deals, and scale winning campaigns.'
        ]
    ],
    'benefitsTitle' => 'How Dedicated Lead Generation Transforms Your Business',
    'benefits' => [
        ['title' => 'Predictable Sales Forecasting', 'desc' => 'Eliminate revenue volatility with a steady, reliable volume of new qualified customer inquiries each month.'],
        ['title' => 'Increased Sales Team Productivity', 'desc' => 'Free your sales representatives from cold calling so they can focus on consultative presentations and deal closing.'],
        ['title' => 'Lower Blended Cost Per Acquisition', 'desc' => 'Iterative landing page testing and exact audience targeting systematically reduce your cost per closed customer.'],
        ['title' => 'Real-Time Speed to Lead', 'desc' => 'Instant lead notifications via email or WhatsApp enable follow-up within 5 minutes, when lead conversion probability is highest.']
    ],
    'faqs' => [
        [
            'q' => 'What is considered a "qualified" lead?',
            'a' => 'A qualified lead is a prospect who meets your predefined criteria (e.g., industry, company size, budget, geographic location) and has explicitly submitted their contact details requesting information or pricing.'
        ],
        [
            'q' => 'Can leads be integrated directly with our existing CRM?',
            'a' => 'Yes. We seamlessly connect lead forms to HubSpot, Salesforce, Zoho, LeadSquared, Google Sheets, or custom webhooks and email/WhatsApp notifications.'
        ],
        [
            'q' => 'What is the typical Cost Per Lead (CPL)?',
            'a' => 'CPL varies depending on industry, geography, and ticket size. Local services may see leads between ₹150–₹500, whereas high-ticket B2B software or corporate logistics leads range higher. Our priority is maximizing the ROI and conversion rate of the leads generated.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Performance Marketing', 'url' => 'performance-marketing.php'],
        ['name' => 'Google Ads & PPC', 'url' => 'google-ads.php'],
        ['name' => 'Facebook Marketing', 'url' => 'facebook-marketing.php'],
        ['name' => 'Email Marketing', 'url' => 'email-marketing.php'],
        ['name' => 'Search Engine Optimization', 'url' => 'seo.php']
    ]
]);