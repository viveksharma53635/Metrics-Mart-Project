<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'Digital Marketing for Healthcare & Medical Industry | Metrics Mart Digital',
    'metaDesc'     => 'Patient-focused digital marketing for hospitals, clinics, doctors, and healthcare brands in India. SEO, local visibility, reputation management, and healthcare website development.',
    'canonical'    => 'healthcare-industry.php',
    'heroKicker'   => 'HEALTHCARE DIGITAL MARKETING',
    'heroIcon'     => 'fa fa-stethoscope',
    'heroH1'       => 'Healthcare Digital Marketing Services',
    'heroH1Accent' => 'Healthcare',
    'heroDesc'     => 'Build patient trust, improve local visibility, and generate appointment enquiries with compliant, accurate digital marketing strategies crafted for hospitals, clinics, doctors, and healthcare organisations.',
    'breadcrumb'   => 'Healthcare & Medical',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Digital Marketing Built for Healthcare Providers',
    'introPara1'   => 'Patients in India increasingly turn to online search before choosing a doctor, hospital, or medical service. Whether they are searching for a specialist in their city, reading reviews before booking an appointment, or researching treatment options, your digital presence plays a critical role in their decision. Healthcare providers who invest in ethical, accurate digital marketing attract more patients and build lasting community trust.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd delivers compliant, patient-first digital marketing strategies for hospitals, multi-specialty clinics, individual practitioners, diagnostics centres, pharmaceutical brands, and medical devices companies. We focus on local visibility, appointment-driven content, and reputation management.',
    'introChallenges' => [
        'Appearing prominently in local search when patients seek healthcare services',
        'Building genuine trust and credibility in a sensitive sector',
        'Generating appointment enquiries from the right patient demographic',
        'Managing reputation across health review platforms and Google',
        'Maintaining compliant, accurate health content under MCI and NMC guidelines',
    ],
    'introImgIcon'  => 'fa fa-stethoscope',
    'introImgLabel' => 'Healthcare Digital Marketing',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'Healthcare Digital Marketing Services',
    'servicesDesc'   => 'Patient-centric digital marketing services designed to increase appointments, improve local visibility, and build your healthcare brand credibly.',
    'services' => [
        ['icon'=>'fa fa-search','title'=>'Doctor & Clinic SEO','desc'=>'Rank your clinic or practice on the first page of Google for searches like "cardiologist in Noida" or "best dental clinic near me". We build local authority that drives measurable appointment bookings.','url'=>'seo.php'],
        ['icon'=>'fa fa-hospital','title'=>'Hospital Digital Marketing','desc'=>'Comprehensive digital campaigns for multi-specialty hospitals. We create department-specific content, manage paid campaigns, optimise Google Business Profiles, and build a consistent online presence.'],
        ['icon'=>'fa fa-map-marker-alt','title'=>'Local SEO for Medical Practices','desc'=>'Dominate local search results with an optimised Google Business Profile, consistent local citations, positive review management, and location-specific content that attracts nearby patients.','url'=>'local-seo.php'],
        ['icon'=>'fa fa-file-medical-alt','title'=>'Healthcare Content Marketing','desc'=>'Build patient trust with accurate, helpful health content. We create symptom guides, treatment explainers, doctor Q&A content, and blog posts that position your team as trusted medical authorities.','url'=>'content-marketing.php'],
        ['icon'=>'fa fa-star','title'=>'Online Reputation Management','desc'=>'Monitor and improve your healthcare brand\'s rating across Google, Practo, Justdial, and social media. We help you gather genuine patient reviews and handle negative feedback professionally.','url'=>'online-reputation-management.php'],
        ['icon'=>'fa fa-chart-line','title'=>'Healthcare Lead Generation','desc'=>'Generate a consistent flow of appointment requests and consultation enquiries through targeted paid campaigns, landing pages, and multi-step lead qualification forms.','url'=>'lead-generation.php'],
        ['icon'=>'fa fa-laptop-code','title'=>'Healthcare Website Development','desc'=>'Build a secure, fast, mobile-responsive medical website with doctor profiles, online appointment booking, service pages, and health blog. Designed for patient trust and search engine visibility.','url'=>'web-development.php'],
        ['icon'=>'fa fa-thumbs-up','title'=>'Social Media for Healthcare','desc'=>'Educate patients, share health tips, and build community on Facebook, Instagram, and LinkedIn. We create compliant healthcare content and manage your social profiles with a consistent, caring voice.','url'=>'social-media-marketing.php'],
        ['icon'=>'fa fa-ad','title'=>'Google Ads for Healthcare','desc'=>'Reach patients actively searching for your medical services with precisely targeted Google Search Ads. We manage compliance-aligned ad copies, bid strategies, and conversion tracking.','url'=>'google-ads.php'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Help Healthcare Providers Grow',
    'helpPara'   => 'Patient trust is at the heart of every strategy we build for healthcare. We combine local SEO, accurate content, and ethical advertising to bring the right patients to your door.',
    'helpPoints' => [
        ['icon'=>'fa fa-map-marker-alt','title'=>'Local Visibility First','desc'=>'We prioritise local search, so patients in your catchment area find you first when they need care.'],
        ['icon'=>'fa fa-shield-alt','title'=>'Compliant Content Creation','desc'=>'All health content is factually accurate, reviewed for medical compliance, and free from prohibited claims.'],
        ['icon'=>'fa fa-calendar-check','title'=>'Appointment-Driven Campaigns','desc'=>'Every campaign funnel is designed with one goal: converting search interest into booked appointments.'],
        ['icon'=>'fa fa-chart-bar','title'=>'Reputation Monitoring','desc'=>'We monitor your brand across all platforms and help you build a consistently positive patient-facing reputation.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why Healthcare Providers Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'Patient-Centric Approach','desc'=>'We understand that healthcare marketing must prioritise accuracy, trust, and patient wellbeing above all else.'],
        ['title'=>'Local SEO Expertise','desc'=>'Our local SEO strategies consistently improve clinic and hospital visibility in map packs and local search results.'],
        ['title'=>'Reputation Management Focus','desc'=>'We help you build and maintain a credible digital reputation that reassures prospective patients before they even visit.'],
        ['title'=>'Compliant Advertising','desc'=>'We navigate the complexities of healthcare advertising regulations to keep your campaigns ethical and compliant.'],
        ['title'=>'Measurable Patient Growth','desc'=>'We track appointment enquiry volumes, conversion rates, and cost per patient acquisition across all channels.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for Healthcare Clients',
    'processSteps'  => [
        ['title'=>'Healthcare Audit','desc'=>'We review your website, Google Business Profile, local citations, review scores, and existing content before recommending a strategy.'],
        ['title'=>'Patient Persona Research','desc'=>'We identify the conditions, treatments, and geographic areas your target patients are searching for and build a keyword and content plan.'],
        ['title'=>'Campaign & Content Development','desc'=>'We build SEO-optimised service pages, Google Ads campaigns, social media content plans, and local citation strategies.'],
        ['title'=>'Monitor & Improve','desc'=>'Monthly reporting on appointment enquiries, search rankings, reputation scores, and campaign ROI with ongoing optimisation.'],
    ],

    'ctaH2'  => 'Ready to Attract More Patients Online?',
    'ctaDesc' => 'Get a free digital marketing assessment for your healthcare practice or hospital. Our team will evaluate your online presence and recommend practical steps to increase patient enquiries.',

    'faqs' => [
        ['q'=>'Is healthcare digital marketing regulated in India?','a'=>'Yes. The National Medical Commission (NMC) and various state medical councils have guidelines on how medical practitioners and organisations may advertise. We create all content and campaigns with these guidelines in mind to ensure compliance.'],
        ['q'=>'How does local SEO help hospitals and clinics?','a'=>'Local SEO ensures your clinic or hospital appears in Google Map Pack results and local search listings when patients search for healthcare services near them. This is especially important for walk-in clinics, specialty practices, and multi-location hospital networks.'],
        ['q'=>'Can digital marketing help small individual medical practices?','a'=>'Yes. Even solo practitioners benefit greatly from an optimised Google Business Profile, positive patient reviews, and a simple service website. These basics can consistently generate new patient enquiries at a very low ongoing cost.'],
        ['q'=>'How do you handle negative reviews for healthcare providers?','a'=>'We monitor review platforms continuously, draft professional and empathetic responses to negative reviews, and develop strategies to encourage satisfied patients to share their genuine experiences—improving your overall rating over time.'],
        ['q'=>'What kind of content do you create for healthcare organisations?','a'=>'We create doctor profile pages, disease and treatment information articles, symptom guides, health tips for social media, appointment booking pages, and department-specific service content—all reviewed for accuracy and compliance.'],
    ],

    'related' => [
        ['name'=>'Education Digital Marketing','url'=>'education-industry.php','icon'=>'fa fa-graduation-cap'],
        ['name'=>'Finance & Banking Marketing','url'=>'finance-banking-industry.php','icon'=>'fa fa-landmark'],
        ['name'=>'B2B Digital Marketing','url'=>'b2b-industry.php','icon'=>'fa fa-handshake'],
    ],
]);
