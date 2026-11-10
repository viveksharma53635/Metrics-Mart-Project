<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Content Marketing & Copywriting Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Drive organic search traffic, establish thought leadership, and convert readers with strategic content marketing services from Metrics Mart Infoline Pvt Ltd.',
    'canonical' => 'content-marketing.php',
    'badge' => 'AUTHORITY & CONVERSION COPYWRITING',
    'headline' => 'Content Marketing That Builds Authority & Converts',
    'subhead' => 'Educate your audience, answer high-intent search queries, and position your brand as the undisputed leader in your industry with strategic, data-backed content marketing.',
    'overviewTitle' => 'Engage Visitors, Build Domain Equity, and Drive Inbound Inquiries',
    'overviewParagraphs' => [
        'Content is the lifeblood of modern search optimization, social engagement, and customer nurturing. However, generic filler articles generated without search intent or domain authority fail to rank on Google and fail to engage human readers.',
        'At Metrics Mart Infoline Pvt Ltd, our content marketing strategists produce researched, authoritative, and engaging copy crafted for both search engine algorithms and prospective customers. We analyze keyword demand, map content topic clusters, and create in-depth guides, articles, case studies, and conversion copy.',
        'Our content serves dual objectives: capturing organic search volume across every stage of the buyer funnel and demonstrating unequivocal subject matter expertise that turns skeptical readers into confident clients.'
    ],
    'featuresTitle' => 'Our Content Marketing Services',
    'features' => [
        [
            'icon' => 'fa fa-newspaper',
            'title' => 'SEO Blog Articles & Topic Clusters',
            'desc' => 'In-depth, thoroughly researched blog posts structured around high-volume keyword clusters that build topical search authority.'
        ],
        [
            'icon' => 'fa fa-book-open',
            'title' => 'Ebooks, Whitepapers & Guides',
            'desc' => 'Comprehensive gated assets designed to capture verified business emails and generate high-caliber B2B sales leads.'
        ],
        [
            'icon' => 'fa fa-file-invoice',
            'title' => 'Website & Landing Page Copywriting',
            'desc' => 'Direct-response sales copy, clear value propositions, and benefit-led headlines that compel visitors to take immediate action.'
        ],
        [
            'icon' => 'fa fa-envelope-open-text',
            'title' => 'Email Newsletters & Nurture Sequences',
            'desc' => 'Persuasive email copy for product launches, weekly industry digests, and automated drip sequences that maintain customer loyalty.'
        ],
        [
            'icon' => 'fa fa-bullhorn',
            'title' => 'Press Releases & Digital PR Articles',
            'desc' => 'Professionally drafted press releases distributed to reputable news syndicates to earn authoritative brand citations.'
        ],
        [
            'icon' => 'fa fa-chart-simple',
            'title' => 'Content Performance & SEO Audits',
            'desc' => 'Auditing existing content to update outdated statistics, eliminate keyword cannibalization, and re-optimize underperforming posts.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Content Marketing Framework',
    'workflowSteps' => [
        [
            'title' => 'Keyword Intelligence & Audience Mapping',
            'desc' => 'We identify questions your target buyers ask at each stage of the funnel (Awareness, Consideration, Decision).'
        ],
        [
            'title' => 'Editorial Calendar & Topic Outlines',
            'desc' => 'We prepare a quarterly editorial roadmap with target keywords, competitor benchmarks, and structural outlines.'
        ],
        [
            'title' => 'Expert Writing & Subject-Matter Review',
            'desc' => 'Our industry copywriters produce engaging, original content infused with verified data, custom graphics, and clear CTAs.'
        ],
        [
            'title' => 'On-Page SEO & Distribution',
            'desc' => 'We optimize headers, internal links, and metadata, distributing content across social channels, newsletters, and search engines.'
        ]
    ],
    'benefitsTitle' => 'Measurable Value of Strategic Content Marketing',
    'benefits' => [
        ['title' => 'Topical Search Engine Authority', 'desc' => 'Google rewards websites with deep, interconnected topic coverage with higher overall domain visibility.'],
        ['title' => 'Shortened Sales Cycles', 'desc' => 'In-depth case studies and explanatory guides address buyer objections before they ever speak with a sales rep.'],
        ['title' => 'Compounding Organic Impressions', 'desc' => 'Evergreen articles continue attracting thousands of prospective customers months and years after publication.'],
        ['title' => 'Multi-Channel Asset Repurposing', 'desc' => 'A single comprehensive guide provides foundational material for multiple social posts, newsletters, and infographics.']
    ],
    'faqs' => [
        [
            'q' => 'How do you ensure the content is original and accurate?',
            'a' => 'All content is written by professional human copywriters, vetted against strict plagiarism detection tools, and fact-checked before submission for your approval.'
        ],
        [
            'q' => 'Can content marketing directly generate sales leads?',
            'a' => 'Yes! By embedding contextual calls-to-action, downloadable checklists, and clear consultation inquiry forms within relevant articles, readers naturally convert into active sales leads.'
        ],
        [
            'q' => 'How often should new content be published on our website?',
            'a' => 'For consistent ranking momentum, we recommend publishing 2 to 4 in-depth, high-quality articles per month rather than flooding the site with thin, low-value posts.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Search Engine Optimization', 'url' => 'seo.php'],
        ['name' => 'Social Media Marketing', 'url' => 'social-media-marketing.php'],
        ['name' => 'Email Marketing', 'url' => 'email-marketing.php'],
        ['name' => 'Online Reputation Management', 'url' => 'online-reputation-management.php'],
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php']
    ]
]);
