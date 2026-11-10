<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'Digital Marketing for Education Industry | Metrics Mart Digital',
    'metaDesc'     => 'Increase student admissions, boost institute visibility, and build your educational brand online with proven digital marketing strategies from Metrics Mart Infoline Pvt Ltd.',
    'canonical'    => 'education-industry.php',
    'heroKicker'   => 'EDUCATION DIGITAL MARKETING',
    'heroIcon'     => 'fa fa-graduation-cap',
    'heroH1'       => 'Education Digital Marketing Services',
    'heroH1Accent' => 'Education',
    'heroDesc'     => 'Drive student admissions, improve online visibility, and build your institution\'s brand with tailored digital marketing strategies for schools, colleges, universities, coaching centres, and EdTech platforms.',
    'breadcrumb'   => 'Education',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Growing Educational Institutions with Digital Marketing',
    'introPara1'   => 'The Indian education sector is experiencing rapid digital transformation. Parents and students now search for institutions, courses, and coaching options online before making enrollment decisions. Whether you run a school, college, university, coaching institute, or an EdTech platform, your digital presence directly impacts your admissions.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd helps educational institutions build a compelling digital brand, appear prominently in relevant search results, and convert online interest into confirmed admissions through data-driven digital marketing strategies.',
    'introChallenges' => [
        'Reaching parents and students at the right stage of the admission journey',
        'Standing out in a crowded education market with strong competition',
        'Generating quality student enquiries for specific programmes and batches',
        'Building institutional credibility and trust online',
        'Managing reputation across review sites and social platforms',
    ],
    'introImgIcon'  => 'fa fa-graduation-cap',
    'introImgLabel' => 'Education Digital Marketing',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'Education Digital Marketing Services',
    'servicesDesc'   => 'Comprehensive digital solutions designed to increase student enquiries, improve ranking visibility, and strengthen your institution\'s brand.',
    'services' => [
        ['icon'=>'fa fa-search','title'=>'Education SEO','desc'=>'Rank your institution on Google for high-intent keywords like "best MBA college in Mumbai" or "CBSE school near me". We build topical authority and local search visibility to attract actively searching students and parents.','url'=>'seo.php'],
        ['icon'=>'fa fa-school','title'=>'School Digital Marketing','desc'=>'Position your school as the top choice for parents in your area. We create content, run local ads, optimise your Google Business Profile, and manage social media to build community trust and drive admissions.'],
        ['icon'=>'fa fa-university','title'=>'College & University Marketing','desc'=>'Build your institution\'s national or regional brand with integrated marketing campaigns covering content, SEO, social media, and paid ads for undergraduate, postgraduate, and professional programmes.'],
        ['icon'=>'fa fa-laptop','title'=>'EdTech Marketing','desc'=>'Grow your online learning platform\'s user base with app marketing, performance campaigns, content-led SEO, and email retention strategies designed for EdTech companies at every stage of growth.'],
        ['icon'=>'fa fa-users','title'=>'Student Admission Lead Generation','desc'=>'Generate a consistent pipeline of student enquiries for specific courses and intake periods. We deploy multi-channel lead generation with dedicated landing pages, ad campaigns, and lead qualification workflows.','url'=>'lead-generation.php'],
        ['icon'=>'fa fa-thumbs-up','title'=>'Social Media Marketing for Institutes','desc'=>'Engage students, parents, and alumni on Instagram, Facebook, LinkedIn, and YouTube. We create educational content, run admission-season campaigns, and build an active, loyal community around your brand.','url'=>'social-media-marketing.php'],
        ['icon'=>'fa fa-ad','title'=>'Google & Meta Advertising','desc'=>'Precision-targeted paid advertising campaigns to reach parents and students actively searching for educational options. We manage Google Search Ads, Display campaigns, and Meta lead generation ads.','url'=>'google-ads.php'],
        ['icon'=>'fa fa-laptop-code','title'=>'Educational Website Development','desc'=>'Build a modern, responsive, and admission-ready website for your institution. We develop course pages, enquiry forms, virtual tour integrations, and performance-optimised layouts.','url'=>'web-development.php'],
        ['icon'=>'fa fa-envelope','title'=>'Email Marketing for Institutions','desc'=>'Nurture prospective student enquiries and communicate with alumni and parents through targeted email campaigns. Admission alerts, event announcements, and course updates delivered at the right time.','url'=>'email-marketing.php'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Help Educational Institutions Grow',
    'helpPara'   => 'We combine deep education sector knowledge with proven digital marketing frameworks to help institutions attract the right students and build lasting brand equity.',
    'helpPoints' => [
        ['icon'=>'fa fa-map-marker-alt','title'=>'Local & National Reach','desc'=>'We build strategies that capture both hyperlocal parent search behaviour and broader national brand awareness.'],
        ['icon'=>'fa fa-funnel-dollar','title'=>'Admission-Focused Funnels','desc'=>'Every campaign is designed to move a prospect from first awareness through enquiry to confirmed admission.'],
        ['icon'=>'fa fa-star','title'=>'Reputation Management','desc'=>'We help you gather genuine positive reviews and address concerns across Google, Justdial, and social platforms.'],
        ['icon'=>'fa fa-chart-line','title'=>'Seasonal Campaign Planning','desc'=>'We plan admission-season campaigns well in advance, so you are always visible exactly when parents and students are deciding.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why Educational Institutions Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'Admission-Focused Expertise','desc'=>'We understand the education marketing calendar, the admission decision journey, and the channels that matter most for student acquisition.'],
        ['title'=>'Ethical, Accurate Content','desc'=>'All content we create for educational institutions is accurate, non-misleading, and aligned with AICTE, UGC, and institutional communication guidelines.'],
        ['title'=>'Multi-Platform Strategy','desc'=>'We deploy campaigns across Google, Instagram, Facebook, YouTube, LinkedIn, and email—wherever your students and parents spend their time.'],
        ['title'=>'Measurable Enquiry Growth','desc'=>'We track enquiry volumes, cost per lead, conversion rates, and admission pipeline data to demonstrate clear campaign value.'],
        ['title'=>'Long-Term Partnership','desc'=>'We work alongside your admissions and marketing team as a true extension, not just a vendor.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for Education Clients',
    'processSteps'  => [
        ['title'=>'Institution Discovery','desc'=>'We study your programmes, target student profiles, geographic reach, and competitive landscape before building any strategy.'],
        ['title'=>'Audience & Channel Research','desc'=>'We identify where your prospective students and parents research, what keywords they use, and which platforms influence their decisions.'],
        ['title'=>'Campaign Development','desc'=>'We build admission-focused content, ad campaigns, landing pages, and social media plans tuned to your intake timelines.'],
        ['title'=>'Execute & Optimise','desc'=>'Campaigns launch with continuous A/B testing, budget optimisation, and monthly performance reporting to maximise admission enquiries.'],
    ],

    'ctaH2'  => 'Ready to Increase Your Student Admissions?',
    'ctaDesc' => 'Connect with Metrics Mart Digital for a free digital marketing consultation for your educational institution. We will review your current presence and suggest a data-backed growth plan.',

    'faqs' => [
        ['q'=>'Which types of educational institutions do you work with?','a'=>'We work with schools, junior colleges, degree colleges, universities, professional institutes, coaching centres, vocational training providers, and EdTech platforms across India.'],
        ['q'=>'How can digital marketing help increase student admissions?','a'=>'Digital marketing places your institution in front of students and parents at the precise moment they are searching for courses. Through SEO, paid ads, social media, and lead nurturing, we help you capture and convert this interest into confirmed admissions.'],
        ['q'=>'What is the best time to launch digital campaigns for admissions?','a'=>'Ideally, campaigns should start 3 to 4 months before your admission window opens. This builds brand awareness early and ensures you are capturing intent as soon as students begin researching. We help you plan an admission marketing calendar.'],
        ['q'=>'Can you help with student enquiries for specific courses?','a'=>'Yes. We build dedicated campaign structures for individual programmes—engineering, MBA, medical, law, and others—each targeting the specific audience and keywords relevant to that course.'],
        ['q'=>'Do you help with managing negative reviews for educational institutions?','a'=>'Yes. Our Online Reputation Management (ORM) service monitors, responds to, and mitigates the impact of negative reviews, while helping you build a consistent stream of authentic positive testimonials.'],
    ],

    'related' => [
        ['name'=>'Healthcare & Medical Marketing','url'=>'healthcare-industry.php','icon'=>'fa fa-stethoscope'],
        ['name'=>'B2B Digital Marketing','url'=>'b2b-industry.php','icon'=>'fa fa-handshake'],
        ['name'=>'eCommerce Marketing','url'=>'ecommerce-industry.php','icon'=>'fa fa-shopping-cart'],
    ],
]);
