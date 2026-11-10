<?php
/**
 * Metrics Mart Infoline Pvt Ltd - Site Configuration
 * Single source of truth for company information, navigation, and helpers.
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Company Profile & Verified Contact Information
define('SITE_NAME', 'Metrics Mart Infoline Pvt Ltd');
define('SITE_SHORT_NAME', 'Metrics Mart');
define('SITE_TAGLINE', 'Digital Marketing & Growth Partner');

// Verified Contact Details
define('PHONE_PRIMARY', '+91 98 6719 9213');
define('PHONE_PRIMARY_RAW', '+919867199213');
define('PHONE_SEC_RAW', '+919310355211');
define('PHONE_LANDLINE', '022-44504885');
define('PHONE_LANDLINE_RAW', '+912244504885');
define('PHONE_SECONDARY', '+91 79001 40805');
define('PHONE_SECONDARY_RAW', '+917900140805');

define('EMAIL_INFO', 'info@metricsmartinfoline.in');
define('EMAIL_SUPPORT', 'info@metricsmartinfoline.in');
define('EMAIL_INFO_', 'info@redseadigitals.com ');

// Verified Office Addresses
define('ADDRESS_MUMBAI', 'E-107, Riddhi Siddhi Building, Near Goregaon Traffic Police Station, Opp. Patkar College, S.V. Road, Goregaon (W), Mumbai - 400104');
define('ADDRESS_NOIDA', 'B006, H-140, Sector 63, Noida, Uttar Pradesh - 201301');
define('ADDRESS_DUBAI', '128, City Road, Dubai, United Arab Emirates.');

// Business Hours
define('BUSINESS_HOURS', 'Mon - Fri: 10:00 AM - 06:00 PM');
define('BUSINESS_DAYS_SHORT', 'Mon - Fri 10:00-18:00');

// Social Media Channels
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/Metricsmart/');
define('SOCIAL_TWITTER', 'https://twitter.com/Metrics01973560/');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/metricsmartinfo/');
define('SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/metrics-mart/');
define('SOCIAL_PINTEREST', 'https://in.pinterest.com/metricsmart/');
define('WHATSAPP_LINK', 'https://wa.me/919867199213?text=' . urlencode('Hello Metrics Mart, I would like to enquire about your digital services.'));

/**
 * Generate CSRF Token
 */
function getCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF Token
 */
function verifyCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Sanitize String Output
 */
function safeOut($data) {
    return htmlspecialchars((string)$data, ENT_QUOTES, 'UTF-8');
}
