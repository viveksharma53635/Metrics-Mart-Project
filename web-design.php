<?php
require_once __DIR__ . '/includes/service-template.php';

renderServicePage([
    'title' => 'UI/UX & Website Design Services | Metrics Mart Infoline Pvt Ltd',
    'metaDesc' => 'Award-winning UI/UX and responsive web design services by Metrics Mart Infoline Pvt Ltd. Wireframing, prototype design, landing page design, and modern brand identities.',
    'canonical' => 'web-design.php',
    'badge' => 'CREATIVE UI/UX EXCELLENCE',
    'headline' => 'UI/UX & Responsive Website Design Services',
    'subhead' => 'Design that looks stunning and converts visitors effortlessly. We combine aesthetic elegance, modern micro-interactions, and human-centered design to craft unforgettable digital experiences.',
    'overviewTitle' => 'Design That Elevates Brand Equity and Drives Conversion',
    'overviewParagraphs' => [
        'Good design is not merely decoration—it is the psychology of visual trust, effortless navigation, and frictionless user action. Visitors form an opinion about your business credibility within 50 milliseconds of landing on your website.',
        'At Metrics Mart Infoline Pvt Ltd, our UI/UX designers create bespoke digital interfaces grounded in user empathy and conversion data. We eliminate cognitive friction, design intuitive navigation paths, and apply deliberate visual hierarchies that guide prospects naturally toward booking a call or purchasing a service.',
        'Whether designing a complete corporate brand redesign, a high-converting PPC landing page, or an intuitive mobile web app interface, our designs balance contemporary aesthetics with commercial performance.'
    ],
    'featuresTitle' => 'Our Design Capabilities',
    'features' => [
        [
            'icon' => 'fa fa-compass-drafting',
            'title' => 'Wireframing & Information Architecture',
            'desc' => 'Structuring user journeys, content hierarchies, and clickable wireframes that map every essential customer decision point.'
        ],
        [
            'icon' => 'fa fa-palette',
            'title' => 'Modern UI Visual Design',
            'desc' => 'Crafting contemporary design systems, clean typography pairings, bespoke color palettes, and responsive grid layouts.'
        ],
        [
            'icon' => 'fa fa-mobile-screen-button',
            'title' => 'Mobile-First Responsive Layouts',
            'desc' => 'Designing native-feeling mobile interfaces with thumb-friendly controls, readable font scalings, and rapid touch navigation.'
        ],
        [
            'icon' => 'fa fa-arrow-pointer',
            'title' => 'High-Conversion Landing Page Design',
            'desc' => 'Laser-focused landing page templates crafted specifically for Google Ads and Meta campaigns to minimize bounce rates.'
        ],
        [
            'icon' => 'fa fa-pen-ruler',
            'title' => 'Corporate Branding & Logo Design',
            'desc' => 'Developing cohesive visual brand assets, logos, typography standards, and brand identity manuals.'
        ],
        [
            'icon' => 'fa fa-rotate',
            'title' => 'Website Redesign & Modernization',
            'desc' => 'Transforming clunky, dated legacy websites into cutting-edge, professional digital platforms that outperform competitors.'
        ]
    ],
    'workflowTitle' => 'Our 4-Step UI/UX Design Process',
    'workflowSteps' => [
        [
            'title' => 'User Research & Brand Empathy',
            'desc' => 'We analyze target audience behaviors, study competitor aesthetics, and identify customer pain points.'
        ],
        [
            'title' => 'Wireframes & User Flow Architecture',
            'desc' => 'We create low-fidelity wireframes to establish logical layout flow and CTA positioning before visual styling.'
        ],
        [
            'title' => 'High-Fidelity Visual Mockups',
            'desc' => 'Our senior designers produce polished desktop and mobile mockups in Figma with interactive component states.'
        ],
        [
            'title' => 'Design System & Developer Handoff',
            'desc' => 'We prepare comprehensive design systems, CSS style guides, and optimized SVG/WebP assets for flawless code implementation.'
        ]
    ],
    'benefitsTitle' => 'Why Invest in World-Class UI/UX Design?',
    'benefits' => [
        ['title' => 'Instant Institutional Credibility', 'desc' => 'Modern, clean visual design signals enterprise professionalism and reliability within seconds.'],
        ['title' => 'Reduced Bounce Rates', 'desc' => 'Intuitive navigation and engaging micro-copy keep visitors exploring your services longer.'],
        ['title' => 'Higher Marketing ROI', 'desc' => 'Traffic generated from SEO and paid ads converts at significantly higher percentages on well-designed pages.'],
        ['title' => 'Accessibility & Inclusivity', 'desc' => 'Adherence to WCAG contrast guidelines and legible typography ensures all users navigate smoothly.']
    ],
    'faqs' => [
        [
            'q' => 'Which tools do you use for UI/UX design?',
            'a' => 'Our design team works primarily in Figma and Adobe Creative Cloud, providing interactive prototypes and collaborative review links.'
        ],
        [
            'q' => 'Can you redesign our existing website without changing our backend or hosting?',
            'a' => 'Yes. We frequently execute frontend redesigns that modernize user interface styling and mobile responsiveness while keeping your existing database and CMS intact.'
        ],
        [
            'q' => 'Do you also code the designs into functional HTML/CSS?',
            'a' => 'Yes! As a full-stack agency, our designers collaborate closely with our frontend engineers to turn every approved design into clean, responsive HTML, CSS, and PHP code.'
        ]
    ],
    'relatedServices' => [
        ['name' => 'Web Development', 'url' => 'web-development.php'],
        ['name' => 'Search Engine Optimization', 'url' => 'seo.php'],
        ['name' => 'Social Media Optimization', 'url' => 'social-media-optimization.php'],
        ['name' => 'Google Ads', 'url' => 'google-ads.php'],
        ['name' => 'Lead Generation', 'url' => 'lead-generation.php']
    ]
]);
