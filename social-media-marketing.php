<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'Social Media Marketing (SMM) Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Build an engaged, loyal community and drive qualified leads across LinkedIn, Instagram, Facebook, and YouTube with SMM services by Metrics Mart Infoline Pvt Ltd.',
    'canonical' => 'social-media-marketing.php',
    'badge' => 'FULL-SERVICE SMM AGENCY',
    'headline' => 'Social Media Marketing (SMM) Services',
    'subhead' => 'Turn social media channels into powerful brand advocacy and revenue engines. We combine creative storytelling, community management, and targeted paid distribution to build authentic engagement.',
    'overviewTitle' => 'Building Meaningful Brand Connections in a Crowded Digital World',
    'overviewParagraphs' => [
        'Social media is the modern town square where consumer opinions are formed, brand loyalty is tested, and purchasing decisions are influenced daily. Simply posting sporadic stock images yields virtually zero engagement on algorithmic social feeds.',
        'At Metrics Mart Infoline Pvt Ltd, our social media marketing strategy begins with deep audience intelligence. We uncover what your target market cares about, what questions they ask, and what formats capture their attention. We build cross-platform social ecosystems spanning LinkedIn, Instagram, Facebook, and YouTube.',
        'We combine thumb-stopping visual design, compelling video hooks, proactive community engagement, and performance-driven paid amplification to turn passive scrollers into dedicated brand advocates.'
    ],
    'featuresTitle' => 'Our Complete SMM Service Suite',
    'features' => [
        [
            'icon' => 'fa fa-calendar-days',
            'title' => 'Custom Content Calendar & Production',
            'desc' => 'Monthly strategic content roadmaps featuring branded infographics, carousel slides, short-form Reels, and thought-leadership posts.'
        ],
        [
            'icon' => 'fa-brands fa-linkedin-in',
            'title' => 'B2B LinkedIn Thought Leadership',
            'desc' => 'Establishing corporate and founder authority on LinkedIn through insightful industry perspectives, case studies, and networking campaigns.'
        ],
        [
            'icon' => 'fa fa-comments',
            'title' => 'Proactive Community Management',
            'desc' => 'Monitoring and responding promptly to comments, direct messages, and brand mentions to maintain an active, attentive customer presence.'
        ],
        [
            'icon' => 'fa fa-video',
            'title' => 'Short-Form Video Production (Reels/Shorts)',
            'desc' => 'Scripting, editing, and producing high-retention vertical video content optimized for Instagram Reels and YouTube Shorts algorithms.'
        ],
        [
            'icon' => 'fa fa-bullhorn',
            'title' => 'Paid Social Advertising & Boosting',
            'desc' => 'Amplifying top-performing organic posts with targeted ad spend to reach thousands of qualified prospective customers outside your follower base.'
        ],
        [
            'icon' => 'fa fa-chart-line',
            'title' => 'Social Analytics & Engagement Reports',
            'desc' => 'Detailed monthly tracking of follower growth rates, engagement metrics, reach, website referrals, and conversions.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step Social Media Marketing Roadmap',
    'workflowSteps' => [
        [
            'title' => 'Brand Persona & Competitor Audit',
            'desc' => 'We analyze your brand voice, evaluate competitor content gaps, and define primary customer personas across platforms.'
        ],
        [
            'title' => 'Content Strategy & Creative Production',
            'desc' => 'Our copywriters and designers produce high-impact monthly content batches tailored to the strengths of each platform.'
        ],
        [
            'title' => 'Publishing & Real-Time Engagement',
            'desc' => 'We post at peak engagement hours, interact with comments, and engage with relevant industry conversations.'
        ],
        [
            'title' => 'Performance Analysis & Iteration',
            'desc' => 'We review top-performing post formats monthly, double down on high-engagement themes, and refine paid amplification.'
        ]
    ],
    'benefitsTitle' => 'Measurable Advantages of Professional SMM',
    'benefits' => [
        ['title' => 'Humanized Brand Authority', 'desc' => 'Showcase your company culture, real client successes, and team expertise to build authentic trust.'],
        ['title' => 'Direct Customer Feedback Loop', 'desc' => 'Gain real-time insights into customer desires, pain points, and product reactions directly from comments and DMs.'],
        ['title' => 'Increased Organic Referral Traffic', 'desc' => 'Channel thousands of engaged social followers directly to your website landing pages and service offerings.'],
        ['title' => 'Omnichannel Brand Cohesion', 'desc' => 'Ensure consistent visual branding and messaging across all your customer touchpoints on the web.']
    ],
    'faqs' => [
        [
            'q' => 'Which social media platforms should my business focus on?',
            'a' => 'This depends on your target customer. B2B service firms thrive on LinkedIn and YouTube. E-commerce, lifestyle, and healthcare brands often see the strongest engagement on Instagram and Facebook. We help you focus budget on the channels with the highest concentration of buyers.'
        ],
        [
            'q' => 'Do I have to approve posts before they go live?',
            'a' => 'Yes. We prepare complete monthly content calendars with copy, graphics, and posting dates well in advance for your review and approval before scheduling.'
        ],
        [
            'q' => 'How do you measure ROI from social media marketing?',
            'a' => 'We track both engagement metrics (shares, comments, saves) and business metrics (website referral traffic, conversion events, direct inquiries, and assisted conversions via Google Analytics 4).'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Social Media Optimization', 'url' => 'social-media-optimization.php'],
        ['name' => 'Facebook Marketing', 'url' => 'facebook-marketing.php'],
        ['name' => 'Instagram Marketing', 'url' => 'instagram-marketing.php'],
        ['name' => 'Content Marketing', 'url' => 'content-marketing.php'],
        ['name' => 'Online Reputation Management', 'url' => 'online-reputation-management.php']
    ]
]);