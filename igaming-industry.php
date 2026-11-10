<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'Digital Marketing for iGaming Industry | Metrics Mart Digital',
    'metaDesc'     => 'Professional digital marketing and technology solutions for iGaming businesses. Website design, SEO, platform optimisation, analytics, and community engagement for gaming brands.',
    'canonical'    => 'igaming-industry.php',
    'heroKicker'   => 'IGAMING DIGITAL SOLUTIONS',
    'heroIcon'     => 'fa fa-gamepad',
    'heroH1'       => 'iGaming Digital Marketing Solutions',
    'heroH1Accent' => 'iGaming',
    'heroDesc'     => 'Professional digital marketing and technology services for iGaming businesses. We help gaming platforms improve their online visibility, engage their communities, and optimise their digital infrastructure for performance and growth.',
    'breadcrumb'   => 'iGaming',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Digital Solutions for iGaming Businesses',
    'introPara1'   => 'The iGaming sector is one of the most technically demanding and competitive digital industries. iGaming businesses require high-performance websites, strong brand visibility, effective community engagement, and robust analytics to operate and grow in a rapidly evolving landscape.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd provides digital marketing and technology services for lawfully operating iGaming businesses. Our work is focused on website performance, SEO visibility, brand positioning, community management, and data analytics. We do not make claims about guaranteed outcomes or provide support for activities prohibited under applicable laws.',
    'introChallenges' => [
        'Standing out with strong brand visibility in a competitive digital space',
        'Maintaining fast, technically reliable gaming platform websites',
        'Building and managing an engaged online gaming community',
        'Tracking and interpreting performance analytics across digital channels',
        'Creating clear, compliant brand communications for the gaming audience',
    ],
    'introImgIcon'  => 'fa fa-gamepad',
    'introImgLabel' => 'iGaming Digital Solutions',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'iGaming Digital Marketing & Technology Services',
    'servicesDesc'   => 'Technology and marketing services built for the specific performance, visibility, and community needs of iGaming businesses.',
    'services' => [
        ['icon'=>'fa fa-laptop-code','title'=>'iGaming Website Design','desc'=>'Build a high-performance, visually engaging website for your iGaming brand. We develop fast-loading, mobile-responsive platforms with clean architecture, secure payment gateway integration, and intuitive user experiences.','url'=>'web-development.php'],
        ['icon'=>'fa fa-search','title'=>'Gaming Platform SEO','desc'=>'Improve your iGaming platform\'s organic search visibility for relevant, lawful keywords in your target markets. We conduct technical audits, on-page optimisation, and content structuring to build search authority.','url'=>'seo.php'],
        ['icon'=>'fa fa-bullhorn','title'=>'Brand Visibility Campaigns','desc'=>'Build brand recognition and awareness for your iGaming business across digital channels. We create targeted display campaigns, social content, and sponsored placements that reach your intended audience.'],
        ['icon'=>'fa fa-users','title'=>'Gaming Community Engagement','desc'=>'Grow and manage your gaming community across social media, forums, and content platforms. We create engaging posts, run community events, and build consistent brand interaction that retains players.','url'=>'social-media-marketing.php'],
        ['icon'=>'fa fa-tachometer-alt','title'=>'Website Performance Optimisation','desc'=>'Speed and stability are essential for gaming platforms. We conduct performance audits, implement Core Web Vitals improvements, optimise hosting architecture, and reduce page load times significantly.'],
        ['icon'=>'fa fa-chart-bar','title'=>'Industry Analytics & Reporting','desc'=>'Set up comprehensive data tracking, conversion funnels, and performance dashboards. We help you understand user behaviour, traffic sources, and engagement metrics to make informed business decisions.'],
        ['icon'=>'fa fa-ad','title'=>'Display & Programmatic Advertising','desc'=>'Reach your target gaming audience through contextually relevant display networks and programmatic advertising placements that build brand recognition and drive qualified traffic to your platform.','url'=>'performance-marketing.php'],
        ['icon'=>'fa fa-mobile-alt','title'=>'Mobile App Marketing','desc'=>'Promote your mobile gaming app across app stores and digital channels. We manage App Store Optimisation (ASO), app install campaigns, and mobile-specific audience targeting.'],
        ['icon'=>'fa fa-star','title'=>'Online Reputation Management','desc'=>'Manage your gaming brand\'s online reputation across review platforms, forums, and social channels. We monitor brand mentions and respond professionally to build a credible public image.','url'=>'online-reputation-management.php'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Support iGaming Businesses Digitally',
    'helpPara'   => 'We focus on the technical and marketing disciplines that iGaming businesses need to build a credible, visible, and high-performing digital presence.',
    'helpPoints' => [
        ['icon'=>'fa fa-tachometer-alt','title'=>'Performance-First Development','desc'=>'We build and optimise websites that load instantly, function reliably, and deliver a seamless experience.'],
        ['icon'=>'fa fa-search','title'=>'Search Visibility Building','desc'=>'We improve organic rankings for relevant, lawful search terms that drive qualified traffic to your platform.'],
        ['icon'=>'fa fa-chart-line','title'=>'Data-Driven Decisions','desc'=>'Comprehensive analytics setup ensures you have the data needed to make smart, evidence-based decisions.'],
        ['icon'=>'fa fa-users','title'=>'Community Growth','desc'=>'Active community management keeps your audience engaged, loyal, and advocates for your brand.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why iGaming Businesses Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'Technical Excellence','desc'=>'We understand the performance, security, and infrastructure requirements unique to gaming platforms and digital entertainment businesses.'],
        ['title'=>'Compliance Awareness','desc'=>'We work only within lawful marketing parameters and do not support or make claims related to activities restricted under applicable regulations.'],
        ['title'=>'Audience Understanding','desc'=>'We know what gaming communities expect and how to engage them authentically across digital channels.'],
        ['title'=>'Full-Stack Digital Support','desc'=>'From website development to SEO, analytics, and community management—we provide end-to-end digital support under one roof.'],
        ['title'=>'Transparent Reporting','desc'=>'Clear, honest monthly reporting on traffic, engagement, and campaign performance with no inflated metrics or unrealistic guarantees.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for iGaming Clients',
    'processSteps'  => [
        ['title'=>'Business Discovery','desc'=>'We understand your iGaming platform, target markets, compliance context, and current digital infrastructure before proposing any solution.'],
        ['title'=>'Technical & Marketing Audit','desc'=>'We audit your website performance, SEO health, analytics setup, and social media presence to identify key improvement areas.'],
        ['title'=>'Strategy & Development','desc'=>'We develop a focused digital plan covering website, SEO, community management, and analytics—then execute with precision.'],
        ['title'=>'Monitor & Report','desc'=>'Monthly performance reviews cover traffic growth, engagement metrics, technical health, and campaign outcomes with actionable recommendations.'],
    ],

    'ctaH2'  => 'Ready to Strengthen Your iGaming Digital Presence?',
    'ctaDesc' => 'Get in touch with Metrics Mart Digital for a consultation on website performance, SEO, community management, and analytics for your iGaming platform.',

    'faqs' => [
        ['q'=>'What digital marketing services do you offer for iGaming businesses?','a'=>'We provide website design and development, SEO, brand visibility campaigns, social media and community management, website performance optimisation, analytics setup, and online reputation management for lawfully operating iGaming businesses.'],
        ['q'=>'Do you support all types of iGaming businesses?','a'=>'We provide marketing and technology services for iGaming businesses that operate lawfully within applicable regulations in their target markets. We do not support activities that are prohibited under applicable laws.'],
        ['q'=>'How can SEO benefit an iGaming platform?','a'=>'SEO improves your organic search visibility for relevant, lawful keywords, reducing dependence on paid traffic and building long-term brand authority. A well-optimised iGaming website attracts more qualified visitors through search engines.'],
        ['q'=>'Can you help us set up analytics for our gaming platform?','a'=>'Yes. We set up comprehensive analytics tracking including user flows, conversion events, traffic source attribution, and custom dashboards so you have full visibility of your platform\'s performance data.'],
        ['q'=>'How do you manage community engagement for gaming brands?','a'=>'We create a content calendar for your social channels, manage daily community interactions, run engagement campaigns, respond to community queries, and build a consistent brand voice that resonates with your gaming audience.'],
    ],

    'related' => [
        ['name'=>'eCommerce Digital Marketing','url'=>'ecommerce-industry.php','icon'=>'fa fa-shopping-cart'],
        ['name'=>'B2B Digital Marketing','url'=>'b2b-industry.php','icon'=>'fa fa-handshake'],
        ['name'=>'Travel & Tourism Marketing','url'=>'travel-tourism-industry.php','icon'=>'fa fa-plane'],
    ],
]);
