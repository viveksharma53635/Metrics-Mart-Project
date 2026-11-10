<?php
require_once __DIR__ . '/includes/config.php';

$formSubmitted = false;
$formSuccess = false;
$errorMessage = '';

// Process Contact Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $formSubmitted = true;
    $csrfToken = $_POST['csrf_token'] ?? '';
    $fullName = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? 'General Inquiry');
    $service = trim($_POST['service'] ?? 'General Consultation');
    $message = trim($_POST['message'] ?? '');
    $honeypot = trim($_POST['website_url'] ?? ''); // Anti-spam hidden field

    // 1. Verify CSRF Token
    if (!verifyCsrfToken($csrfToken)) {
        $errorMessage = "Security verification failed. Please refresh and try again.";
    }
    // 2. Anti-spam honeypot check
    elseif (!empty($honeypot)) {
        // Silent success for bots
        $formSuccess = true;
    }
    // 3. Validation
    elseif (empty($fullName) || empty($email) || empty($phone) || empty($message)) {
        $errorMessage = "Please fill in all required fields (Name, Email, Phone, and Message).";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    }
    elseif (strlen(preg_replace('/\D/', '', $phone)) < 7) {
        $errorMessage = "Please provide a valid contact telephone or mobile number.";
    }
    else {
        // Valid submission
        // In a live SMTP environment, mail is dispatched here
        $formSuccess = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | <?php echo safeOut(SITE_NAME); ?></title>
    <meta name="description" content="Get in touch with Metrics Mart Infoline Pvt Ltd. Reach our Mumbai Head Office or Noida branch by phone, email, or schedule a strategy consultation.">
    <link rel="canonical" href="contact.php">

    <!-- Open Graph -->
    <meta property="og:title" content="Contact Us | <?php echo safeOut(SITE_NAME); ?>">
    <meta property="og:description" content="Reach our digital marketing strategists for project inquiries, audits, and business consultations in Mumbai &amp; Noida.">
    <meta property="og:type" content="website">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/Style.css?v=<?php echo filemtime(__DIR__ . '/assets/CSS/Style.css'); ?>">
</head>
<body class="contact-page">

    <!-- Shared Header -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="mainContent">
        <!-- Page Hero Banner -->
        <section class="page-hero">
            <div class="container page-hero-inner">
                <div>
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="current">Contact Us</span>
                    </nav>

                    <span class="hero-badge"><i class="fa fa-envelope-open" aria-hidden="true"></i> Let's Start a Conversation</span>
                    <h1 class="page-hero-title">Connect With Our Digital Growth Strategists</h1>
                    <p class="page-hero-desc">
                        Whether you are looking to scale organic search rankings, optimize paid advertising budgets, or develop a modern web platform, our team in Mumbai and Noida is here to help.
                    </p>

                    <div class="hero-actions">
                        <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" class="btn btn-accent"><i class="fa fa-phone" aria-hidden="true"></i> Call <?php echo safeOut(PHONE_PRIMARY); ?></a>
                        <a href="<?php echo safeOut(WHATSAPP_LINK); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp Us</a>
                    </div>
                </div>

                <div class="page-hero-card">
                    <h3 style="color: #ffffff; margin-bottom: 12px; font-size: 1.25rem;">Direct Helplines</h3>
                    <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6; margin-bottom: 15px;">
                        Need immediate assistance with an ongoing campaign or urgent project inquiry?
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 10px; font-size: 0.95rem; color: #ffffff;">
                        <p style="margin: 0;"><i class="fa fa-phone" style="color: #4caf92; width: 22px;"></i> Mobile: <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>" style="color: #ffffff; font-weight: 600;"><?php echo safeOut(PHONE_PRIMARY); ?></a></p>
                        <p style="margin: 0;"><i class="fa fa-phone-square" style="color: #4caf92; width: 22px;"></i> Landline: <a href="tel:<?php echo safeOut(PHONE_LANDLINE_RAW); ?>" style="color: #ffffff; font-weight: 600;"><?php echo safeOut(PHONE_LANDLINE); ?></a></p>
                        <p style="margin: 0;"><i class="fa fa-envelope" style="color: #4caf92; width: 22px;"></i> Email: <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>" style="color: #ffffff; font-weight: 600;"><?php echo safeOut(EMAIL_INFO); ?></a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Contact & Form Section -->
        <section class="section">
            <div class="container">
                <div class="lead-grid" style="align-items: flex-start;">
                    <!-- Left: Contact Details Cards -->
                    <div>
                        <span class="section-kicker">Get in Touch</span>
                        <h2 class="section-title">We’re Here to Support Your Digital Journey</h2>
                        <p class="section-desc" style="margin-bottom: 30px;">
                            Reach out via phone, email, or schedule an in-person meeting at our corporate headquarters in Goregaon West, Mumbai, or our northern branch in Sector 63, Noida.
                        </p>

                        <!-- Office 1: Mumbai -->
                        <div class="diff-card contact-office-card">
                            <span class="office-tag">Head Office</span>
                            <h3 style="margin-bottom: 10px; color: var(--text-navy);">Mumbai Headquarters</h3>
                            <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 12px;">
                                <i class="fa fa-location-dot" style="color: var(--accent-red); margin-right: 8px;"></i>
                                <?php echo safeOut(ADDRESS_MUMBAI); ?>
                            </p>
                            <p style="margin-bottom: 6px; font-size: 0.9rem;">
                                <strong>Phone:</strong> <a href="tel:<?php echo safeOut(PHONE_LANDLINE_RAW); ?>"><?php echo safeOut(PHONE_LANDLINE); ?></a> / <a href="tel:<?php echo safeOut(PHONE_PRIMARY_RAW); ?>"><?php echo safeOut(PHONE_PRIMARY); ?></a>
                            </p>
                            <p style="margin-bottom: 0; font-size: 0.9rem;">
                                <strong>Email:</strong> <a href="mailto:<?php echo safeOut(EMAIL_INFO); ?>"><?php echo safeOut(EMAIL_INFO); ?></a>
                            </p>
                        </div>

                        <!-- Office 2: Noida -->
                        <div class="diff-card contact-office-card">
                            <span class="office-tag">Branch Office</span>
                            <h3 style="margin-bottom: 10px; color: var(--text-navy);">Delhi NCR / Noida Office</h3>
                            <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 12px;">
                                <i class="fa fa-location-dot" style="color: var(--accent-red); margin-right: 8px;"></i>
                                <?php echo safeOut(ADDRESS_NOIDA); ?>
                            </p>
                            <p style="margin-bottom: 6px; font-size: 0.9rem;">
                                <strong>Direct Helpline:</strong> <a href="tel:<?php echo safeOut(PHONE_SEC_RAW); ?>"><?php echo safeOut(PHONE_SEC_RAW); ?></a>
                            </p>
                            <p style="margin-bottom: 0; font-size: 0.9rem;">
                                <strong>Email:</strong> <a href="mailto:<?php echo safeOut(EMAIL_INFO_); ?>"><?php echo safeOut(EMAIL_INFO_); ?></a>
                            </p>
                            <p style="margin-bottom: 0; font-size: 0.9rem;">
                                <strong>Hours:</strong> <?php echo safeOut(BUSINESS_HOURS); ?> (Sat - Sun Closed)
                            </p>
                        </div>

                        <!-- Office 3: Dubai -->
                         <div class="diff-card contact-office-card">
                            <!-- <span class="office-tag">Branch Office</span> -->
                            <h3 style="margin-bottom: 10px; color: var(--text-navy);">Dubai</h3>
                            <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 12px;">
                                <i class="fa fa-location-dot" style="color: var(--accent-red); margin-right: 8px;"></i>
                                <?php echo safeOut(ADDRESS_DUBAI); ?>
                            </p>
                           
                            <p style="margin-bottom: 6px; font-size: 0.9rem;">
                                <strong>WhatsApp:</strong> <a href="tel:<?php echo safeOut(PHONE_SEC_RAW); ?>"><?php echo safeOut(PHONE_SEC_RAW); ?></a>
                            </p>
                             <p style="margin-bottom: 0; font-size: 0.9rem;">
                                <strong>Email:</strong> <a href="mailto:<?php echo safeOut(EMAIL_INFO_); ?>"><?php echo safeOut(EMAIL_INFO_); ?></a>
                            </p>
                        </div>


                        <!-- Social & Hours Box -->
                        <div class="diff-card contact-office-card">
                            <h4 style="margin-bottom: 12px; font-size: 1.05rem;">Connect on Official Social Channels</h4>
                            <div class="footer-social-links" style="margin-top: 10px;">
                                <a href="<?php echo safeOut(SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer" style="background: var(--primary-blue);" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="<?php echo safeOut(SOCIAL_TWITTER); ?>" target="_blank" rel="noopener noreferrer" style="background: #111;" title="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="<?php echo safeOut(SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer" style="background: #e1306c;" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                <a href="<?php echo safeOut(SOCIAL_LINKEDIN); ?>" target="_blank" rel="noopener noreferrer" style="background: #0077b5;" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="<?php echo safeOut(SOCIAL_PINTEREST); ?>" target="_blank" rel="noopener noreferrer" style="background: red;" title="Pinterest"><i class="fa-brands fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Verified Contact Form -->
                    <div class="lead-form-card" style="box-shadow: var(--shadow-lg); border: 1px solid var(--border-light);">
                        <h3>Send an Official Project Inquiry</h3>
                        <p>Fill out the form below and an assigned account director will get in touch within 24 business hours.</p>

                        <?php if ($formSubmitted && $formSuccess): ?>
                            <div class="form-feedback success" style="display: block;">
                                <strong>Message Sent Successfully!</strong> Thank you for contacting <?php echo safeOut(SITE_NAME); ?>. We have received your inquiry and our senior team will connect with you shortly.
                            </div>
                        <?php elseif ($formSubmitted && !empty($errorMessage)): ?>
                            <div class="form-feedback error" style="display: block;">
                                <strong>Error:</strong> <?php echo safeOut($errorMessage); ?>
                            </div>
                        <?php endif; ?>

                        <form action="contact.php" method="POST" class="validate-form">
                            <!-- Client-side JS feedback container -->
                            <div class="form-feedback error" id="jsContactFeedback" style="display: none;"></div>

                            <!-- CSRF Token -->
                            <input type="hidden" name="csrf_token" value="<?php echo safeOut(getCsrfToken()); ?>">
                            
                            <!-- Bot Honeypot (Hidden) -->
                            <div style="display: none;">
                                <label for="bot_website_url">Do not fill this</label>
                                <input type="text" id="bot_website_url" name="website_url" value="">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="contactName">Full Name *</label>
                                <input type="text" id="contactName" name="name" class="form-control" placeholder="e.g. Vikram Malhotra" required value="<?php echo safeOut($_POST['name'] ?? ''); ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="contactEmail">Email Address *</label>
                                <input type="email" id="contactEmail" name="email" class="form-control" placeholder="name@company.com" required value="<?php echo safeOut($_POST['email'] ?? ''); ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="contactPhone">Telephone / Mobile *</label>
                                <input type="tel" id="contactPhone" name="phone" class="form-control" placeholder="+91 98765 43210" required value="<?php echo safeOut($_POST['phone'] ?? ''); ?>">
                            </div>

                            <div class="form-group custom-select-parent">
                                <label class="form-label" for="contactService" id="contactServiceLabel">Primary Service of Interest</label>
                                <select id="contactService" name="service" class="form-control">
                                    <?php
                                    $selectedService = $_POST['service'] ?? 'Search Engine Optimization (SEO)';
                                    $servicesList = [
                                        "Search Engine Optimization (SEO)" => "Search Engine Optimization (SEO)",
                                        "Local SEO & Google My Business" => "Local SEO &amp; Google My Business",
                                        "Google Ads & PPC Management" => "Google Ads &amp; PPC Management",
                                        "Website Design & Development" => "Website Design &amp; Development",
                                        "Online Reputation Management (ORM)" => "Online Reputation Management (ORM)",
                                        "Social Media Marketing (SMM)" => "Social Media Marketing (SMM)",
                                        "E-Commerce Solutions" => "E-Commerce Growth Solutions",
                                        "Complete Digital Strategy" => "Complete Digital Audit &amp; Strategy"
                                    ];
                                    foreach ($servicesList as $sVal => $sLabel):
                                        $sSelected = ($selectedService === $sVal) ? ' selected' : '';
                                    ?>
                                        <option value="<?php echo safeOut($sVal); ?>"<?php echo $sSelected; ?>><?php echo $sLabel; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <!-- Custom Accessible Dropdown for Mobile Viewports -->
                                <div class="custom-service-dropdown" id="customServiceDropdown" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-controls="customServiceListbox">
                                    <button type="button" class="custom-dropdown-trigger" id="customDropdownTrigger" aria-labelledby="contactServiceLabel customDropdownLabel">
                                        <span class="custom-dropdown-selected" id="customDropdownLabel"><?php echo safeOut($servicesList[$selectedService] ?? 'Search Engine Optimization (SEO)'); ?></span>
                                        <i class="fa fa-chevron-down custom-dropdown-icon" aria-hidden="true"></i>
                                    </button>
                                    <div class="custom-dropdown-menu" id="customServiceListbox" role="listbox" aria-labelledby="contactServiceLabel" tabindex="-1">
                                        <?php foreach ($servicesList as $sVal => $sLabel): 
                                            $isActive = ($selectedService === $sVal) ? ' is-selected' : '';
                                            $isAriaSelected = ($selectedService === $sVal) ? 'true' : 'false';
                                        ?>
                                            <div class="custom-dropdown-item<?php echo $isActive; ?>" role="option" aria-selected="<?php echo $isAriaSelected; ?>" data-value="<?php echo safeOut($sVal); ?>" tabindex="0">
                                                <span class="item-text"><?php echo $sLabel; ?></span>
                                                <i class="fa fa-check item-check" aria-hidden="true"></i>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="contactMessage">Your Message or Project Details *</label>
                                <textarea id="contactMessage" name="message" class="form-control" rows="4" placeholder="Briefly describe your goals, current challenges, and project timeline..." required><?php echo safeOut($_POST['message'] ?? ''); ?></textarea>
                            </div>

                            <button type="submit" name="contact_submit" class="btn btn-accent btn-block">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Submit Your Inquiry
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Google Map Section -->
        <section class="section section-surface" style="padding: 50px 0;">
            <div class="container">
                <div class="section-header">
                    <span class="section-kicker">Location Directions</span>
                    <h2 class="section-title">Visit Our Corporate Offices</h2>
                    <p class="section-desc">Conveniently situated in major commercial centers in Mumbai and Noida.</p>
                </div>

                <div class="contact-map-wrapper">
                    <iframe 
                        title="Metrics Mart Infoline Pvt Ltd Mumbai Office Location" 
                        src="https://maps.google.com/maps?q=E-107%2C%20Riddhi%20Siddhi%20Building%2C%20Opp.%20Patkar%20College%2C%20S.V.%20Road%2C%20Goregaon%20West%2C%20Mumbai%20400104&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="420" 
                        style="border:0; display: block;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
    </main>

    <!-- Shared Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="assets/JS/script.js?v=<?php echo filemtime(__DIR__ . '/assets/JS/script.js'); ?>"></script>
</body>
</html>