<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Facebook Marketing & Meta Ads Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Scale leads and e-commerce sales with targeted Facebook marketing and Meta advertising services from Metrics Mart Infoline Pvt Ltd. Audience targeting, creative testing, and funnel optimization.',
    'canonical' => 'facebook-marketing.php',
    'badge' => 'META ADVERTISING SPECIALISTS',
    'headline' => 'Facebook Marketing & Meta Ads That Scale Results',
    'subhead' => 'Harness the world’s most granular audience targeting. We engineer high-converting Facebook ad campaigns, custom audience lookalikes, and retargeting funnels that turn social feeds into revenue streams.',
    'overviewTitle' => 'Reach Millions of Ready-to-Engage Customers Across Meta',
    'overviewParagraphs' => [
        'With over 3 billion active monthly users across the Meta ecosystem, Facebook remains an unmatched engine for demographic, interest-based, and behavioral targeting. However, rising CPMs and algorithm evolutions mean generic boosted posts no longer generate sustainable returns.',
        'At Metrics Mart Infoline Pvt Ltd, our Meta advertising team applies rigorous creative testing, high-impact video hooks, custom audience modeling, and server-side Conversions API integration. We build multi-tiered funnels that introduce your brand to cold prospects and systematically guide them toward inquiry or purchase.',
        'Whether generating verified B2B leads or driving high-volume e-commerce sales, our Facebook marketing campaigns are optimized daily for maximum Return on Ad Spend (ROAS).'
    ],
    'featuresTitle' => 'Our Facebook Marketing Services',
    'features' => [
        [
            'icon' => 'fa-brands fa-facebook-f',
            'title' => 'Custom & Lookalike Audiences',
            'desc' => 'Building 1% lookalike audiences modeled after your highest-value customers and website converters to acquire new qualified prospects.'
        ],
        [
            'icon' => 'fa fa-film',
            'title' => 'High-Converting Creative Ad Formats',
            'desc' => 'Designing scroll-stopping carousel ads, single image showcases, short-form video hooks, and collection ads engineered to capture attention.'
        ],
        [
            'icon' => 'fa fa-server',
            'title' => 'Meta Conversions API (CAPI)',
            'desc' => 'Configuring direct server-to-server tracking via Meta CAPI to preserve full conversion visibility and defeat ad-blocker limitations.'
        ],
        [
            'icon' => 'fa fa-bullseye',
            'title' => 'Lead Gen Instant Forms & Funnels',
            'desc' => 'Deploying frictionless on-platform Meta Lead Forms that auto-populate user contact details for rapid lead capture.'
        ],
        [
            'icon' => 'fa fa-arrow-rotate-left',
            'title' => 'Dynamic Retargeting Campaigns',
            'desc' => 'Automatically serving recently viewed products or service reminders to website visitors who abandoned carts or forms.'
        ],
        [
            'icon' => 'fa fa-chart-pie',
            'title' => 'A/B Creative & Copy Testing',
            'desc' => 'Testing multiple headlines, body copy lengths, value propositions, and visual hooks to identify winning combinations.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Facebook Marketing Process',
    'workflowSteps' => [
        [
            'title' => 'Audience Research & Pixel Setup',
            'desc' => 'We map buyer demographics, audit current Meta Pixel events, and configure server-side tracking via Conversions API.'
        ],
        [
            'title' => 'Creative Sprint & Copywriting',
            'desc' => 'Our creative team designs compelling visual assets, writes benefit-driven ad copy, and prepares high-converting landing pages.'
        ],
        [
            'title' => 'Campaign Launch & Algorithmic Learning',
            'desc' => 'We launch structured campaigns with Broad and Lookalike targeting, allowing Meta algorithms to exit the learning phase smoothly.'
        ],
        [
            'title' => 'Creative Refresh & Budget Scaling',
            'desc' => 'We combat creative fatigue by introducing fresh ad variations weekly while scaling budgets on top-performing ad sets.'
        ]
    ],
    'benefitsTitle' => 'Why Choose Metrics Mart for Facebook Marketing?',
    'benefits' => [
        ['title' => 'Hyper-Granular Demographic Reach', 'desc' => 'Target prospects based on precise age brackets, job titles, interests, geographic zip codes, and past buying behaviors.'],
        ['title' => 'Lower Cost Per Acquisition', 'desc' => 'Optimized creative hooks and frictionless lead forms drive down acquisition costs compared to competitive search bids.'],
        ['title' => 'Direct CRM & Lead Integration', 'desc' => 'Instantly route Facebook leads directly to your sales team’s email, WhatsApp, or CRM for immediate follow-up.'],
        ['title' => 'Transparent Performance Reporting', 'desc' => 'Detailed weekly metrics detailing ROAS, cost per lead, click-through rates, and total attributed revenue.']
    ],
    'faqs' => [
        [
            'q' => 'Is Facebook advertising still effective with younger demographics?',
            'a' => 'Yes. Furthermore, our Meta Ads campaigns run concurrently across both Facebook and Instagram from a single unified ad manager, allowing Meta’s machine learning to allocate impressions where your ideal demographic engages most.'
        ],
        [
            'q' => 'What is the Meta Conversions API (CAPI) and why is it needed?',
            'a' => 'Meta CAPI sends conversion data directly from your web server to Meta, bypassing browser-based ad blockers and iOS tracking restrictions. This provides 20% to 30% more accurate attribution and improves ad delivery optimization.'
        ],
        [
            'q' => 'Do you provide the graphic design and video creatives?',
            'a' => 'Yes. Our in-house creative team designs high-resolution banners, carousel cards, and video creatives tailored specifically for Facebook and Instagram feeds and Stories.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Instagram Marketing', 'url' => 'instagram-marketing.php'],
        ['name' => 'Social Media Marketing', 'url' => 'social-media-marketing.php'],
        ['name' => 'Performance Marketing', 'url' => 'performance-marketing.php'],
        ['name' => 'Google Ads', 'url' => 'google-ads.php'],
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php']
    ]
]);