<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Email Marketing & Marketing Automation Services | Metrics Mart Infoline',
    'metaDesc' => 'Drive repeat revenue, customer retention, and automated lead nurturing with specialized email marketing services from Metrics Mart Infoline Pvt Ltd. Klaviyo, Mailchimp, and custom automation.',
    'canonical' => 'email-marketing.php',
    'badge' => 'CUSTOMER RETENTION & NURTURE',
    'headline' => 'Email Marketing & Automation That Converts',
    'subhead' => 'Turn your subscriber list into your highest-ROI owned channel. We build automated welcome series, abandoned cart recoveries, segmented newsletters, and re-engagement workflows.',
    'overviewTitle' => 'Own Your Audience with Direct, High-ROI Email Communication',
    'overviewParagraphs' => [
        'While social media platforms change their algorithms and paid ad costs fluctuate, your email list remains an owned asset that connects you directly with customers without platform middlemen. Email marketing consistently delivers an astronomical ROI—generating upwards of \$36 to \$42 for every \$1 invested when executed strategically.',
        'At Metrics Mart Infoline Pvt Ltd, we move beyond generic email blasts. We build sophisticated behavioral automation funnels, dynamic segmentation based on purchase history or engagement recency, and mobile-responsive email templates with compelling copywriting.',
        'From e-commerce store owners looking to recover abandoned checkouts to B2B enterprises nurturing long-cycle decision makers, our email marketing strategies drive consistent customer lifetime value.'
    ],
    'featuresTitle' => 'Our Email Marketing Deliverables',
    'features' => [
        [
            'icon' => 'fa fa-envelopes-bulk',
            'title' => 'Automated Drip Sequences & Flows',
            'desc' => 'High-converting automated flows including Welcome Series, Abandoned Cart reminders, Browse Abandonment, and Post-Purchase Thank You sequences.'
        ],
        [
            'icon' => 'fa fa-users-viewfinder',
            'title' => 'List Segmentation & Hygiene',
            'desc' => 'Segmenting audiences by VIP spenders, dormant subscribers, and specific product interests, alongside routine list cleaning to protect deliverability.'
        ],
        [
            'icon' => 'fa fa-palette',
            'title' => 'Custom Responsive Template Design',
            'desc' => 'Bespoke, brand-aligned HTML email templates tested across Gmail, Outlook, Apple Mail, and mobile devices for flawless rendering.'
        ],
        [
            'icon' => 'fa fa-pen-nib',
            'title' => 'Direct-Response Copywriting',
            'desc' => 'Compelling subject lines that achieve high open rates and benefit-oriented email copy that drives clicks and purchase actions.'
        ],
        [
            'icon' => 'fa fa-shield-halved',
            'title' => 'Deliverability & SPF/DKIM/DMARC Setup',
            'desc' => 'Full configuration of sender authentication protocols to ensure your emails land squarely in the primary inbox, avoiding the spam folder.'
        ],
        [
            'icon' => 'fa fa-chart-pie',
            'title' => 'Revenue & Conversion Attribution',
            'desc' => 'In-depth reporting on open rates, click-through rates (CTR), bounce rates, unsubscribe metrics, and exact sales revenue generated.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Email Marketing Methodology',
    'workflowSteps' => [
        [
            'title' => 'Deliverability & Technical Audit',
            'desc' => 'We audit your sender domain reputation, authentication records (SPF, DKIM, DMARC), and current list health.'
        ],
        [
            'title' => 'Segmentation & Automation Blueprint',
            'desc' => 'We map customer journey triggers and build core automated flows (Welcome, Cart Abandonment, Win-Back).'
        ],
        [
            'title' => 'Template Design & Copy Sprints',
            'desc' => 'Our creative team crafts branded mobile-friendly templates and persuasive copy aligned with your seasonal marketing calendar.'
        ],
        [
            'title' => 'A/B Testing & Revenue Scaling',
            'desc' => 'We systematically test subject lines, send times, and CTA placements to continuously improve revenue per recipient.'
        ]
    ],
    'benefitsTitle' => 'Why Partner with Metrics Mart for Email Marketing?',
    'benefits' => [
        ['title' => 'Zero Reliance on Third-Party Algorithms', 'desc' => 'Communicate directly with your customers in their private inboxes without paying for ad reach.'],
        ['title' => 'Predictable Recurring Revenue', 'desc' => 'Automated sequences generate continuous sales in the background 24 hours a day, 7 days a week.'],
        ['title' => 'Higher Customer Lifetime Value (LTV)', 'desc' => 'Nurture existing clients to purchase repeatedly, dramatically increasing total profitability per customer.'],
        ['title' => 'Platform Agnostic Expertise', 'desc' => 'Expertise across Klaviyo, Mailchimp, ActiveCampaign, HubSpot, Sendinblue (Brevo), and custom SMTP gateways.']
    ],
    'faqs' => [
        [
            'q' => 'Which email marketing platforms do you work with?',
            'a' => 'We specialize in Klaviyo (ideal for e-commerce), Mailchimp, ActiveCampaign, HubSpot, Brevo, Constant Contact, and custom transactional SMTP configurations.'
        ],
        [
            'q' => 'How do you prevent emails from landing in the spam folder?',
            'a' => 'We set up strict DNS authentication (SPF, DKIM, DMARC, BIMI), warm up new sender domains gradually, clean inactive or bounced email addresses, and avoid spam-trigger words in copy.'
        ],
        [
            'q' => 'Can you help build our email subscriber list from scratch?',
            'a' => 'Yes. We design high-converting website pop-ups, exit-intent overlays, and lead-magnet download funnels to rapidly collect verified subscriber emails.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php'],
        ['name' => 'E-Commerce SEO', 'url' => 'ecommerce-seo.php'],
        ['name' => 'Content Marketing', 'url' => 'content-marketing.php'],
        ['name' => 'Performance Marketing', 'url' => 'performance-marketing.php'],
        ['name' => 'Web Development', 'url' => 'web-development.php']
    ]
]);