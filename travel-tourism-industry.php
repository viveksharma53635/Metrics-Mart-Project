<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'Travel & Tourism Digital Marketing Services | Metrics Mart Digital',
    'metaDesc'     => 'Increase travel bookings and build your tourism brand online with SEO, Google Ads, social media, and travel website development from Metrics Mart Infoline Pvt Ltd.',
    'canonical'    => 'travel-tourism-industry.php',
    'heroKicker'   => 'TRAVEL & TOURISM DIGITAL MARKETING',
    'heroIcon'     => 'fa fa-plane',
    'heroH1'       => 'Travel & Tourism Digital Marketing Services',
    'heroH1Accent' => 'Travel & Tourism',
    'heroDesc'     => 'Increase online travel bookings, build your destination brand, and engage travellers at every stage of their journey with tailored digital marketing strategies for travel agencies, hotels, tourism boards, and hospitality businesses.',
    'breadcrumb'   => 'Travel & Tourism',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Digital Marketing for the Travel & Tourism Sector',
    'introPara1'   => 'Travel and tourism is one of the most research-intensive purchase journeys in the digital world. Travellers spend significant time online comparing destinations, reading reviews, checking hotel ratings, and evaluating tour packages before making a booking decision. Travel businesses that are not visible during this research phase lose bookings to competitors who are.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd helps travel agencies, hotels, tour operators, travel technology platforms, and tourism destination brands build a compelling digital presence that attracts travellers, inspires confidence, and converts enquiries into confirmed bookings.',
    'introChallenges' => [
        'Competing with large OTAs and aggregators in search engine rankings',
        'Converting website visitors into direct booking enquiries and reservations',
        'Building seasonal campaigns that capture peak travel planning periods',
        'Managing online reputation across travel review platforms like TripAdvisor',
        'Engaging travellers on visual platforms like Instagram and YouTube',
    ],
    'introImgIcon'  => 'fa fa-plane',
    'introImgLabel' => 'Travel & Tourism Digital Marketing',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'Travel & Tourism Digital Marketing Services',
    'servicesDesc'   => 'Comprehensive digital marketing solutions designed to drive direct travel bookings, improve online visibility, and build your travel brand\'s credibility.',
    'services' => [
        ['icon'=>'fa fa-search','title'=>'Travel Agency SEO','desc'=>'Rank your travel packages, destination pages, and service offerings on Google for high-intent travel searches. We build topical authority, optimise itinerary pages, and create travel content that ranks for the keywords your audience uses.','url'=>'seo.php'],
        ['icon'=>'fa fa-hotel','title'=>'Hotel & Hospitality Marketing','desc'=>'Increase direct bookings for hotels, resorts, and hospitality properties. We manage search campaigns, reputation management, social media, and content strategies that reduce OTA dependency and grow direct revenue.'],
        ['icon'=>'fa fa-thumbs-up','title'=>'Tourism Social Media Marketing','desc'=>'Inspire travel desire and build a loyal travel community on Instagram, Facebook, Pinterest, and YouTube. We create visually stunning travel content and run targeted campaigns that reach travellers in the planning stage.','url'=>'social-media-marketing.php'],
        ['icon'=>'fa fa-chart-line','title'=>'Travel Lead Generation','desc'=>'Generate a consistent flow of qualified travel enquiries and booking requests. We design landing pages for specific packages, run targeted paid campaigns, and implement lead nurturing workflows for travel agencies.','url'=>'lead-generation.php'],
        ['icon'=>'fa fa-ad','title'=>'Google Ads for Travel Businesses','desc'=>'Capture high-intent travellers with Google Search Ads, Hotel Ads, and Performance Max campaigns. We manage budgets, seasonal bid adjustments, and audience targeting to maximise booking conversions and ROI.','url'=>'google-ads.php'],
        ['icon'=>'fa fa-laptop-code','title'=>'Travel Website Development','desc'=>'Build a visually immersive, booking-optimised travel website with package listings, itinerary pages, photo galleries, enquiry forms, and seamless mobile experience that converts visitors into travellers.','url'=>'web-development.php'],
        ['icon'=>'fa fa-calendar-check','title'=>'Booking Conversion Optimisation','desc'=>'Identify and remove barriers to booking completion. We optimise your enquiry forms, booking flows, pricing presentation, and trust signals to convert more website visitors into confirmed guests.'],
        ['icon'=>'fa fa-star','title'=>'Travel Reputation Management','desc'=>'Build and manage your brand\'s reputation across TripAdvisor, Google Reviews, MakeMyTrip reviews, and social media. We help you gather genuine positive testimonials and handle negative feedback professionally.','url'=>'online-reputation-management.php'],
        ['icon'=>'fa fa-envelope','title'=>'Travel Email Marketing','desc'=>'Engage subscribers and past customers with personalised travel inspiration, early-bird offers, seasonal packages, and post-trip follow-ups that drive repeat bookings and referrals.','url'=>'email-marketing.php'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Help Travel Businesses Grow',
    'helpPara'   => 'We build travel marketing strategies that capture the full traveller journey—from early inspiration and destination research through to final booking and post-travel engagement.',
    'helpPoints' => [
        ['icon'=>'fa fa-route','title'=>'Full Journey Marketing','desc'=>'We engage travellers at the inspiration, research, comparison, and booking stages—not just the final purchase moment.'],
        ['icon'=>'fa fa-camera','title'=>'Visual Content Strategy','desc'=>'Travel is a visual category. We create compelling imagery-driven content for Instagram, YouTube, and Pinterest.'],
        ['icon'=>'fa fa-calendar-alt','title'=>'Seasonal Campaign Planning','desc'=>'We plan campaign calendars around peak travel seasons, school holidays, and destination-specific demand cycles.'],
        ['icon'=>'fa fa-chart-bar','title'=>'Direct Booking Growth','desc'=>'Our strategies prioritise driving direct bookings, reducing costly OTA commission dependence over time.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why Travel Businesses Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'Travel Sector Knowledge','desc'=>'We understand seasonal demand patterns, OTA competition dynamics, and the specific digital channels that drive travel bookings.'],
        ['title'=>'Visual Content Capability','desc'=>'Our team creates destination-worthy visual content that inspires travel desire and builds brand aspiration on social platforms.'],
        ['title'=>'Booking-Focused Campaigns','desc'=>'Every campaign we design is measured by enquiry volume, booking conversion rate, and revenue generated—not just impressions.'],
        ['title'=>'Multi-Platform Expertise','desc'=>'From Google Hotel Ads and Search to Instagram Stories, Pinterest boards, and email automation, we manage every relevant channel.'],
        ['title'=>'OTA Independence Strategy','desc'=>'We help travel businesses build direct booking capability to reduce commission costs and strengthen long-term margins.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for Travel Clients',
    'processSteps'  => [
        ['title'=>'Business & Market Discovery','desc'=>'We study your travel products, target traveller profiles, seasonal patterns, and competitive landscape before strategy development.'],
        ['title'=>'Traveller Persona Research','desc'=>'We identify where your ideal travellers research, what content inspires them, and which channels drive their booking decisions.'],
        ['title'=>'Campaign & Content Development','desc'=>'We build destination content, package landing pages, paid campaigns, social content calendars, and email workflows aligned to your peak seasons.'],
        ['title'=>'Monitor, Optimise & Report','desc'=>'Monthly reporting on booking enquiries, conversion rates, channel-wise performance, and campaign ROI with continuous seasonal refinement.'],
    ],

    'ctaH2'  => 'Ready to Grow Your Travel Business Online?',
    'ctaDesc' => 'Connect with Metrics Mart Digital for a free travel marketing consultation. We will review your current digital presence and recommend a strategy to increase bookings and build your travel brand.',

    'faqs' => [
        ['q'=>'How can SEO help my travel agency rank above OTAs?','a'=>'While competing directly with major OTAs for generic keywords is challenging, well-executed SEO allows smaller travel businesses to dominate niche destination searches, long-tail package queries, and local tour-specific keywords where OTAs have less focus. We build a targeted SEO strategy around the terms most likely to bring you direct booking enquiries.'],
        ['q'=>'What social media platforms work best for travel marketing?','a'=>'Instagram and Pinterest are most effective for travel inspiration and destination showcasing. Facebook is strong for targeted advertising and community building. YouTube is excellent for destination guides and travel vlogs. The best platform mix depends on your target traveller demographic.'],
        ['q'=>'How do you help hotels reduce dependence on OTAs?','a'=>'We build a hotel\'s direct booking capability through SEO-optimised property pages, Google Hotel Ads for metasearch visibility, targeted social media advertising, email marketing to past guests, and conversion-optimised booking pages with clear rate parity policies.'],
        ['q'=>'Can you help us market destination packages to international travellers?','a'=>'Yes. We use international Google Search campaigns, multilingual content, targeted social media advertising in specific international markets, and travel blogger outreach to build awareness of your destination or packages among international traveller audiences.'],
        ['q'=>'How important are online reviews for travel businesses?','a'=>'Critically important. TripAdvisor ratings, Google reviews, and social media sentiment directly influence booking decisions for the vast majority of travellers. We help you systematically gather positive reviews from satisfied guests and manage any negative feedback professionally to protect your reputation.'],
    ],

    'related' => [
        ['name'=>'eCommerce Digital Marketing','url'=>'ecommerce-industry.php','icon'=>'fa fa-shopping-cart'],
        ['name'=>'Healthcare Digital Marketing','url'=>'healthcare-industry.php','icon'=>'fa fa-stethoscope'],
        ['name'=>'Education Digital Marketing','url'=>'education-industry.php','icon'=>'fa fa-graduation-cap'],
    ],
]);
