<?php
require_once __DIR__ . '/includes/industry-template.php';

renderIndustryPage([
    'title'        => 'eCommerce Digital Marketing Services | Metrics Mart Digital',
    'metaDesc'     => 'Scale your online store with eCommerce SEO, Google Shopping Ads, Meta advertising, conversion rate optimisation, and eCommerce website development from Metrics Mart Digital.',
    'canonical'    => 'ecommerce-industry.php',
    'heroKicker'   => 'ECOMMERCE DIGITAL MARKETING',
    'heroIcon'     => 'fa fa-shopping-cart',
    'heroH1'       => 'eCommerce Digital Marketing Services',
    'heroH1Accent' => 'eCommerce',
    'heroDesc'     => 'Drive more traffic, increase product sales, and reduce cart abandonment with comprehensive eCommerce digital marketing strategies. We help Indian online stores and D2C brands scale their revenue through data-driven campaigns and conversion-focused optimisation.',
    'breadcrumb'   => 'eCommerce',

    'introKicker'  => 'Industry Overview',
    'introH2'      => 'Growing eCommerce Businesses with Digital Marketing',
    'introPara1'   => 'India\'s eCommerce market is growing rapidly, and competition for consumer attention online has never been more intense. Whether you operate an independent D2C store, a niche product brand, or a multi-category marketplace, your success depends on your ability to attract the right shoppers, convert their visits into purchases, and retain them as repeat customers.',
    'introPara2'   => 'Metrics Mart Infoline Pvt Ltd delivers end-to-end eCommerce digital marketing services that cover organic search, paid advertising, social commerce, email retention, conversion optimisation, and website development. We help eCommerce businesses at every stage—from early growth to established scale.',
    'introChallenges' => [
        'Attracting high-intent shoppers in an increasingly competitive paid and organic landscape',
        'Converting product page visitors into actual buyers with optimised UX and copy',
        'Reducing cart abandonment and recovering lost revenue from incomplete purchases',
        'Retaining customers and maximising lifetime value with post-purchase engagement',
        'Managing advertising costs while maintaining profitable ROAS across channels',
    ],
    'introImgIcon'  => 'fa fa-shopping-cart',
    'introImgLabel' => 'eCommerce Digital Marketing',

    'servicesKicker' => 'OUR SERVICES',
    'servicesH2'     => 'eCommerce Digital Marketing Services',
    'servicesDesc'   => 'Comprehensive digital marketing services designed to increase your online store\'s traffic, conversions, and revenue at every stage of the customer journey.',
    'services' => [
        ['icon'=>'fa fa-search','title'=>'eCommerce SEO','desc'=>'Rank your product and category pages on the first page of Google for high-intent shopping searches. We optimise product metadata, image alt text, schema markup, internal linking, and site architecture for maximum organic visibility.','url'=>'ecommerce-seo.php'],
        ['icon'=>'fa fa-thumbs-up','title'=>'Social Media Marketing','desc'=>'Build your brand community and drive product discovery on Instagram, Facebook, Pinterest, and YouTube. We create visually compelling content, run product showcases, and manage shoppable social campaigns.','url'=>'social-media-marketing.php'],
        ['icon'=>'fa fa-ad','title'=>'Google Shopping & Meta Advertising','desc'=>'Reach high-intent buyers with Google Shopping ads, Performance Max campaigns, Meta product catalogue ads, and dynamic remarketing that recovers abandoned carts and re-engages past visitors.','url'=>'google-ads.php'],
        ['icon'=>'fa fa-box-open','title'=>'Product Page Optimisation','desc'=>'Improve product page conversion rates with compelling descriptions, structured specifications, optimised imagery, trust signals, and clear calls-to-action that turn browsers into buyers.'],
        ['icon'=>'fa fa-chart-line','title'=>'Conversion Rate Optimisation','desc'=>'Identify and fix friction points in your checkout journey. We conduct heatmap analysis, A/B testing, and UX reviews to systematically increase the percentage of visitors who complete a purchase.','url'=>'performance-marketing.php'],
        ['icon'=>'fa fa-envelope','title'=>'Email Marketing & Retention','desc'=>'Build customer loyalty and repeat revenue with abandoned cart recovery emails, post-purchase sequences, win-back campaigns, and personalised product recommendation flows.','url'=>'email-marketing.php'],
        ['icon'=>'fa fa-laptop-code','title'=>'eCommerce Website Development','desc'=>'Build or improve your online store with a fast, mobile-first, conversion-optimised website. We work with custom PHP, WooCommerce, and other platforms, ensuring seamless shopping experiences.','url'=>'web-development.php'],
        ['icon'=>'fa fa-shopping-bag','title'=>'Shopping Cart & Checkout Optimisation','desc'=>'Reduce cart abandonment by streamlining your checkout process. We simplify steps, add trust signals, optimise payment gateway UX, and implement guest checkout to maximise purchase completion.'],
        ['icon'=>'fa fa-chart-bar','title'=>'eCommerce Analytics & Tracking','desc'=>'Set up comprehensive GA4 eCommerce tracking, conversion attribution, funnel analysis, and revenue reporting dashboards so every marketing rupee is fully accountable.'],
    ],

    'helpKicker' => 'STRATEGIC APPROACH',
    'helpH2'     => 'How We Help eCommerce Businesses Scale',
    'helpPara'   => 'We build full-funnel eCommerce strategies that attract new shoppers, convert them efficiently, and retain them as loyal repeat customers—with every channel contributing measurably to revenue.',
    'helpPoints' => [
        ['icon'=>'fa fa-funnel-dollar','title'=>'Full-Funnel Revenue Focus','desc'=>'We optimise every stage from first search to repeat purchase, not just top-of-funnel traffic.'],
        ['icon'=>'fa fa-chart-bar','title'=>'ROAS-Driven Advertising','desc'=>'Every paid campaign is managed with Return on Ad Spend as the primary success metric.'],
        ['icon'=>'fa fa-box-open','title'=>'Product-Level Optimisation','desc'=>'We optimise individual product pages for both search engines and human shoppers simultaneously.'],
        ['icon'=>'fa fa-sync','title'=>'Retention & Lifetime Value','desc'=>'Email automation and loyalty strategies ensure one-time buyers become long-term customers.'],
    ],

    'whyKicker' => 'WHY METRICS MART',
    'whyH2'     => 'Why eCommerce Brands Choose Metrics Mart Digital',
    'whyPoints' => [
        ['title'=>'eCommerce-Specific SEO Expertise','desc'=>'We understand the unique SEO challenges of product catalogues, faceted navigation, duplicate content, and product schema implementation.'],
        ['title'=>'Revenue-Linked Reporting','desc'=>'We track revenue, ROAS, and cost per acquisition—not just traffic—so you always know the financial impact of your marketing.'],
        ['title'=>'Conversion Rate Focus','desc'=>'We continuously test and improve your conversion funnel because increasing your conversion rate directly multiplies the ROI of all other marketing.'],
        ['title'=>'Multi-Channel Integration','desc'=>'We manage SEO, paid ads, social media, and email as an integrated ecosystem rather than isolated channels, maximising their combined effect.'],
        ['title'=>'Scalable Campaign Architecture','desc'=>'Our campaign structures are built to scale with your catalogue growth and seasonal demand spikes without requiring a complete rebuild.'],
    ],

    'processKicker' => 'OUR PROCESS',
    'processH2'     => 'Our Working Process for eCommerce Clients',
    'processSteps'  => [
        ['title'=>'Store & Market Audit','desc'=>'We audit your website technical health, existing SEO, paid campaigns, analytics setup, and competitive landscape to identify the highest-impact opportunities.'],
        ['title'=>'Revenue Growth Strategy','desc'=>'We develop a prioritised roadmap covering SEO, paid ads, email, CRO, and content—each tied to specific revenue targets.'],
        ['title'=>'Build & Launch Campaigns','desc'=>'We execute product page optimisation, campaign builds, email flows, and tracking implementation with a phased rollout.'],
        ['title'=>'Measure, Test & Scale','desc'=>'Monthly reporting on revenue, ROAS, conversion rates, and customer acquisition costs with continuous A/B testing and campaign refinement.'],
    ],

    'ctaH2'  => 'Ready to Grow Your eCommerce Revenue?',
    'ctaDesc' => 'Connect with Metrics Mart Digital for a free eCommerce marketing audit. We will review your current performance and recommend a data-backed strategy to increase traffic, conversions, and revenue.',

    'faqs' => [
        ['q'=>'What is eCommerce SEO and why does it matter?','a'=>'eCommerce SEO involves optimising your product pages, category pages, and website architecture so they rank on Google for the keywords your customers use when shopping. High organic rankings drive free, high-intent traffic that consistently converts to sales without ongoing ad spend.'],
        ['q'=>'How do you reduce cart abandonment for eCommerce stores?','a'=>'We address cart abandonment through a combination of UX improvements to the checkout process, trust signals such as security badges and clear return policies, abandoned cart email sequences, and exit-intent popups with relevant offers.'],
        ['q'=>'Which advertising platforms work best for eCommerce in India?','a'=>'Google Shopping and Search Ads are highly effective for capturing active purchase intent. Meta (Facebook and Instagram) product catalogue ads and Instagram Shopping are excellent for visual product discovery and remarketing. The best mix depends on your product category and target audience.'],
        ['q'=>'Can you manage both our paid ads and SEO simultaneously?','a'=>'Yes. We manage integrated campaigns where SEO and paid advertising complement each other—paid ads capture immediate intent while SEO builds long-term organic revenue. We use paid data to inform organic keyword strategy and vice versa.'],
        ['q'=>'How do you measure the success of eCommerce marketing campaigns?','a'=>'We track revenue directly attributed to each channel, Return on Ad Spend (ROAS), conversion rates, average order value, cart abandonment rates, customer acquisition cost, and email marketing revenue. All metrics are consolidated into a monthly performance dashboard.'],
    ],

    'related' => [
        ['name'=>'B2B Digital Marketing','url'=>'b2b-industry.php','icon'=>'fa fa-handshake'],
        ['name'=>'Travel & Tourism Marketing','url'=>'travel-tourism-industry.php','icon'=>'fa fa-plane'],
        ['name'=>'Finance & Banking Marketing','url'=>'finance-banking-industry.php','icon'=>'fa fa-landmark'],
    ],
]);
