<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'B2B Digital Marketing Agency India | Metrics Mart Digital',
    'metaDesc'     => 'Result-driven B2B digital marketing services for Indian businesses. SEO, LinkedIn marketing, lead generation, account-based marketing, and content strategy for B2B companies.',
    'canonical'    => 'b2b-industry.php',
    'heroKicker'   => 'B2B DIGITAL MARKETING',
    'heroIcon'     => 'fa fa-handshake',
    'heroH1'       => 'B2B Digital Marketing Agency',
    'heroH1Accent' => 'B2B Digital Marketing',
    'heroDesc'     => 'Generate qualified business leads, shorten sales cycles, and build lasting relationships with decision-makers through strategic B2B digital marketing. We help Indian businesses grow their client base with measurable, data-driven digital campaigns.',
    'breadcrumb'   => 'B2B',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Digital Marketing Built for B2B Success',
    'introPara1'   => 'B2B marketing is fundamentally different from consumer marketing. Longer sales cycles, multiple decision-makers, high-value contracts, and niche target audiences require a strategic, multi-touch digital approach. Generic digital marketing tactics rarely work in a B2B context—precision, credibility, and consistent value communication are what drive results.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd delivers B2B-specific digital marketing strategies that help businesses attract qualified prospects, nurture them through extended sales cycles, and convert them into long-term clients. We work with manufacturing firms, IT companies, logistics providers, professional services firms, and B2B SaaS companies across India.',
    'introChallenges' => [
        'Reaching the right business decision-makers across a fragmented digital landscape',
        'Generating high-quality leads that meet specific firmographic criteria',
        'Nurturing prospects through long, complex B2B sales cycles',
        'Demonstrating clear ROI from digital marketing investment to internal stakeholders',
        'Building domain authority and thought leadership in niche B2B sectors',
    ],
    'introImgIcon'  => 'fa fa-handshake',
    'introImgLabel' => 'B2B Digital Marketing',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'B2B Digital Marketing Services',
    'servicesDesc'   => 'Strategic digital marketing services designed specifically for B2B companies that want measurable lead generation, improved visibility, and sustainable business growth.',
    'services' => [
        ['icon'=>'fa fa-search','title'=>'B2B SEO Services','desc'=>'Build organic search authority for industry-specific keywords that decision-makers use when researching vendors and solutions. We develop topical content clusters, technical SEO, and link acquisition strategies for B2B sectors.','url'=>'seo.php'],
        ['icon'=>'fa fa-chart-line','title'=>'B2B Lead Generation','desc'=>'Generate a consistent pipeline of qualified business enquiries using multi-channel strategies including Google Search Ads, LinkedIn lead forms, content offers, and inbound SEO campaigns.','url'=>'lead-generation.php'],
        ['icon'=>'fa fa-linkedin','title'=>'LinkedIn Marketing','desc'=>'Reach C-suite executives, procurement managers, and business owners directly on LinkedIn through organic content, sponsored campaigns, InMail outreach, and thought leadership positioning.','url'=>'social-media-marketing.php'],
        ['icon'=>'fa fa-bullseye','title'=>'Account-Based Marketing (ABM)','desc'=>'Target specific high-value accounts with personalised content, tailored ad campaigns, and direct outreach strategies. ABM aligns your marketing and sales teams around the most valuable prospects.'],
        ['icon'=>'fa fa-laptop-code','title'=>'B2B Website Development','desc'=>'Build a credibility-first website with comprehensive service pages, case study sections, capability documents, RFQ forms, and an architecture designed to convert business visitors.','url'=>'web-development.php'],
        ['icon'=>'fa fa-envelope','title'=>'B2B Email Marketing','desc'=>'Nurture leads through long sales cycles with strategic email sequences. We design drip campaigns, product update newsletters, and event invitations that keep your brand top-of-mind with decision-makers.','url'=>'email-marketing.php'],
        ['icon'=>'fa fa-file-alt','title'=>'Content Marketing for B2B','desc'=>'Establish thought leadership with industry white papers, case studies, technical blogs, and video content that educates prospects and builds confidence in your capability.','url'=>'content-marketing.php'],
        ['icon'=>'fa fa-ad','title'=>'Google & Display Advertising','desc'=>'Precision-targeted paid campaigns that reach business professionals researching relevant services. We manage search intent campaigns, remarketing for website visitors, and display campaigns.','url'=>'google-ads.php'],
        ['icon'=>'fa fa-chart-bar','title'=>'B2B Analytics & CRM Integration','desc'=>'Set up lead source tracking, CRM integration, and marketing attribution dashboards so your team has complete visibility of the lead journey from first touch to closed deal.'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Help B2B Companies Grow',
    'helpPara'   => 'B2B growth requires patience, precision, and a deep understanding of buyer psychology. We build multi-touch strategies that engage decision-makers at every stage of their journey.',
    'helpPoints' => [
        ['icon'=>'fa fa-bullseye','title'=>'Precision Audience Targeting','desc'=>'We reach specific industries, company sizes, roles, and geographies—not broad consumer audiences.'],
        ['icon'=>'fa fa-route','title'=>'Multi-Touch Lead Nurturing','desc'=>'Long sales cycles require sustained, relevant communication. We design nurture sequences that maintain engagement.'],
        ['icon'=>'fa fa-certificate','title'=>'Thought Leadership Content','desc'=>'High-value content positions your brand as an expert that prospects trust before they ever make contact.'],
        ['icon'=>'fa fa-chart-line','title'=>'Revenue-Focused Measurement','desc'=>'We tie marketing activity directly to pipeline and revenue metrics, not just clicks and impressions.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why B2B Companies Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'B2B Marketing Expertise','desc'=>'We understand B2B buyer journeys, long sales cycles, and the importance of building multi-stakeholder consensus before a deal closes.'],
        ['title'=>'LinkedIn & Search Mastery','desc'=>'We are proficient in the two channels that matter most for B2B: LinkedIn for professional reach and Google Search for intent capture.'],
        ['title'=>'CRM & Analytics Integration','desc'=>'We integrate your marketing with CRM systems and attribution models so every lead is tracked from source to close.'],
        ['title'=>'Content-Led Strategy','desc'=>'Our content builds genuine authority in your sector, reducing dependence on expensive paid channels over time.'],
        ['title'=>'Collaborative Partnership','desc'=>'We work closely with your sales team to ensure marketing activity directly supports pipeline development and revenue targets.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for B2B Clients',
    'processSteps'  => [
        ['title'=>'ICP & Buyer Research','desc'=>'We define your Ideal Customer Profile, map decision-maker personas, and research the digital channels and content types they engage with.'],
        ['title'=>'Multi-Channel Strategy','desc'=>'We design a full-funnel B2B marketing plan combining SEO, LinkedIn, content, email, and paid campaigns aligned to your sales cycle.'],
        ['title'=>'Build & Launch','desc'=>'We develop content assets, campaigns, landing pages, and automation workflows before a carefully coordinated launch.'],
        ['title'=>'Optimise & Report','desc'=>'Monthly reporting on lead volume, quality, pipeline contribution, and cost per acquisition with continuous campaign improvement.'],
    ],

    'ctaH2'  => 'Ready to Build a Stronger B2B Lead Pipeline?',
    'ctaDesc' => 'Connect with Metrics Mart Digital for a free B2B digital marketing consultation. We will assess your current approach and recommend a strategy built around your sales targets.',

    'faqs' => [
        ['q'=>'What makes B2B digital marketing different from B2C marketing?','a'=>'B2B marketing targets business buyers who make decisions based on ROI, capability, risk reduction, and long-term value—not impulse or emotion. Sales cycles are longer, decisions involve multiple stakeholders, and content must be more technical and credibility-focused.'],
        ['q'=>'Which digital channels work best for B2B lead generation in India?','a'=>'Google Search Ads and organic SEO are most effective for capturing active intent, while LinkedIn is the strongest channel for reaching specific professional roles and industries. Email marketing excels for nurturing leads already in your pipeline.'],
        ['q'=>'How long does B2B digital marketing take to show results?','a'=>'Paid campaigns can generate qualified enquiries within days. SEO and content marketing build momentum over 3 to 6 months. Full pipeline impact, including closed deals, reflects the sales cycle length of your specific product or service.'],
        ['q'=>'Can you help us reach procurement and C-suite decision-makers?','a'=>'Yes. LinkedIn\'s targeting allows us to reach users by job title, seniority, company size, and industry with remarkable precision. We also create content and thought leadership campaigns specifically designed to resonate with senior business decision-makers.'],
        ['q'=>'Do you integrate digital marketing with our CRM system?','a'=>'Yes. We set up lead source tracking, UTM parameters, and CRM integrations so your sales team can see exactly which marketing channels and campaigns are generating the leads that convert into clients.'],
    ],

    'related' => [
        ['name'=>'Finance & Banking Marketing','url'=>'finance-banking-industry.php','icon'=>'fa fa-landmark'],
        ['name'=>'eCommerce Digital Marketing','url'=>'ecommerce-industry.php','icon'=>'fa fa-shopping-cart'],
        ['name'=>'Education Digital Marketing','url'=>'education-industry.php','icon'=>'fa fa-graduation-cap'],
    ],
]);
