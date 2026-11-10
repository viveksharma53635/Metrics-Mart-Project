<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'Digital Marketing for Finance & Banking Industry | Metrics Mart Digital',
    'metaDesc'     => 'Result-driven digital marketing for banks, NBFCs, insurance firms, and FinTech companies in India. SEO, paid ads, lead generation, and website development for financial brands.',
    'canonical'    => 'finance-banking-industry.php',
    'heroKicker'   => 'FINANCE & BANKING DIGITAL MARKETING',
    'heroIcon'     => 'fa fa-landmark',
    'heroH1'       => 'Digital Marketing for Finance & Banking',
    'heroH1Accent' => 'Finance & Banking',
    'heroDesc'     => 'Build trust, generate high-quality leads, and strengthen your brand presence with digital marketing strategies tailored for banks, NBFCs, insurance firms, wealth managers, and FinTech companies.',
    'breadcrumb'   => 'Finance & Banking',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Growing Finance & Banking Businesses Digitally',
    'introPara1'   => 'The financial services sector is one of the most competitive and trust-sensitive industries in India. Consumers today research financial products online before making decisions—whether they are looking for personal loans, insurance policies, investment options, or banking services. Without a strong digital presence, your brand risks losing these prospects to digitally active competitors.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd specialises in building outcome-driven digital marketing strategies for financial brands. We understand the regulatory landscape, the importance of compliance-aligned content, and the need for messaging that inspires genuine trust and drives quality enquiries.',
    'introChallenges' => [
        'Reaching financially aware, high-intent audiences online',
        'Building digital trust for sensitive financial decisions',
        'Generating qualified leads within compliance boundaries',
        'Competing against large banks and financial aggregators in search rankings',
        'Managing online reputation across review platforms and social channels',
    ],
    'introImgIcon'  => 'fa fa-landmark',
    'introImgLabel' => 'Finance & Banking Digital Marketing',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'Finance & Banking Digital Marketing Services',
    'servicesDesc'   => 'From SEO and lead generation to website development and paid advertising, we offer end-to-end digital marketing tailored for financial organisations.',
    'services' => [
        ['icon'=>'fa fa-search','title'=>'Financial Services SEO','desc'=>'Rank higher on Google for high-intent financial keywords such as "personal loan in Mumbai", "best savings account", and "insurance plans online". We build topical authority and trust signals that search engines reward.','url'=>'seo.php'],
        ['icon'=>'fa fa-bullhorn','title'=>'Banking Digital Marketing','desc'=>'Comprehensive digital marketing campaigns for retail banks, cooperative banks, and NBFCs. We cover content strategy, social media, email campaigns, and performance marketing to attract and retain customers.'],
        ['icon'=>'fa fa-shield-alt','title'=>'Insurance Marketing','desc'=>'Generate qualified insurance leads through targeted search campaigns, educational content, and landing pages. We craft messaging that clearly explains product value and simplifies the decision-making process.'],
        ['icon'=>'fa fa-microchip','title'=>'FinTech Marketing','desc'=>'Help your FinTech product reach its target audience with performance marketing, app-install campaigns, content-led SEO, and user acquisition strategies built for growth-stage and scaling companies.'],
        ['icon'=>'fa fa-chart-line','title'=>'Financial Lead Generation','desc'=>'Drive consistent, high-quality enquiries from prospects actively seeking financial products. Our multi-channel lead generation combines Google Ads, Meta campaigns, landing page CRO, and remarketing.','url'=>'lead-generation.php'],
        ['icon'=>'fa fa-ad','title'=>'Paid Advertising for Financial Brands','desc'=>'Precision-targeted Google Search Ads and social media campaigns that reach decision-ready financial consumers. We manage bid strategies, ad copy, compliance review, and conversion tracking.','url'=>'google-ads.php'],
        ['icon'=>'fa fa-laptop-code','title'=>'Website Development for Financial Services','desc'=>'Build a secure, fast, and trust-optimised website for your financial brand. We develop compliance-ready pages, loan calculators, lead capture forms, and mobile-responsive layouts.','url'=>'web-development.php'],
        ['icon'=>'fa fa-star','title'=>'Online Reputation Management','desc'=>'Monitor and improve your brand perception across Google reviews, banking aggregators, and social platforms. We respond to negative feedback, amplify positive stories, and build a credible online reputation.','url'=>'online-reputation-management.php'],
        ['icon'=>'fa fa-envelope','title'=>'Email Marketing for Finance','desc'=>'Nurture leads and retain existing customers with well-timed, personalised email campaigns. From product announcements to EMI reminders and investment tips, we design emails that drive action.','url'=>'email-marketing.php'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Help Finance Businesses Grow Online',
    'helpPara'   => 'We combine industry knowledge with digital expertise to build campaigns that deliver measurable ROI for financial brands—while remaining fully compliant and customer-centric.',
    'helpPoints' => [
        ['icon'=>'fa fa-bullseye','title'=>'High-Intent Audience Targeting','desc'=>'We focus your budget on audiences actively researching financial products, reducing wasted spend.'],
        ['icon'=>'fa fa-lock','title'=>'Compliance-Aligned Messaging','desc'=>'All content and ads are crafted to stay within SEBI, IRDAI, and RBI communication guidelines.'],
        ['icon'=>'fa fa-funnel-dollar','title'=>'Quality Lead Funnels','desc'=>'Multi-step lead qualification systems that deliver warm prospects, not just form submissions.'],
        ['icon'=>'fa fa-chart-bar','title'=>'ROI-Focused Reporting','desc'=>'Monthly dashboards showing lead volume, cost per acquisition, and channel-wise performance.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why Financial Brands Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'Industry-Specific Knowledge','desc'=>'We understand financial product categories, buyer journeys, and the unique trust signals financial consumers need before converting.'],
        ['title'=>'Ethical, Transparent Practice','desc'=>'No inflated promises. We set realistic KPIs, track verified metrics, and report honestly on campaign performance.'],
        ['title'=>'Multi-Channel Expertise','desc'=>'From organic SEO to Google Ads, LinkedIn, email, and content marketing—we build integrated campaigns across every relevant channel.'],
        ['title'=>'Conversion-First Design','desc'=>'Every landing page and lead form is designed with conversion rate optimisation principles proven to reduce bounce and increase enquiries.'],
        ['title'=>'Responsive Account Management','desc'=>'Dedicated account managers who understand your business and are reachable when you need them.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for Finance Clients',
    'processSteps'  => [
        ['title'=>'Industry Discovery','desc'=>'We study your financial product, target audience, competition, and regulatory requirements before strategy development.'],
        ['title'=>'Audience & Keyword Research','desc'=>'We identify high-intent search queries, demographic targets, and geographic opportunities specific to your financial offerings.'],
        ['title'=>'Campaign Architecture','desc'=>'We design a full-funnel strategy—awareness, consideration, conversion—and build the required creative assets, landing pages, and tracking.'],
        ['title'=>'Launch & Optimise','desc'=>'Campaigns go live with continuous monitoring, A/B testing, bid adjustments, and weekly reporting to maximise ROI.'],
    ],

    'ctaH2'  => 'Ready to Generate More Financial Leads?',
    'ctaDesc' => 'Connect with Metrics Mart Digital for a free strategy consultation. We will audit your current digital presence and recommend a plan built specifically for your financial brand.',

    'faqs' => [
        ['q'=>'Is digital marketing regulated for financial services in India?','a'=>'Yes. SEBI, IRDAI, and RBI provide guidelines on how financial products can be advertised and what claims are permissible. Metrics Mart Digital creates all content and ad copies with these guidelines in mind, so your campaigns remain compliant.'],
        ['q'=>'What types of financial businesses do you work with?','a'=>'We work with retail banks, cooperative banks, NBFCs, insurance companies, mutual fund distributors, wealth management firms, loan aggregators, and FinTech startups across India.'],
        ['q'=>'How long does it take to see results from financial SEO?','a'=>'Organic SEO improvements typically become visible within 60 to 90 days, with significant traffic growth in 4 to 6 months. Paid campaigns can generate qualified leads within the first week of going live.'],
        ['q'=>'Can you help us reduce our cost per lead for financial products?','a'=>'Yes. Through precise audience targeting, conversion-optimised landing pages, improved quality scores, and ongoing campaign refinement, we work to progressively reduce your cost per qualified lead over time.'],
        ['q'=>'Do you create content for financial blogs and educational resources?','a'=>'Absolutely. Educational content—such as guides on financial planning, investment tips, and product comparisons—is one of the most effective ways to build trust and attract high-intent organic traffic in the finance sector.'],
    ],

    'related' => [
        ['name'=>'B2B Digital Marketing','url'=>'b2b-industry.php','icon'=>'fa fa-handshake'],
        ['name'=>'eCommerce Marketing','url'=>'ecommerce-industry.php','icon'=>'fa fa-shopping-cart'],
        ['name'=>'Healthcare Marketing','url'=>'healthcare-industry.php','icon'=>'fa fa-stethoscope'],
    ],
]);
