<?php

// App modes
defined('DEMO') || define('DEMO', 'demo');
defined('DEV') || define('DEV', 'dev');
defined('LIVE') || define('LIVE', 'live');

// Example email
defined('EXAMPLE_MAIL') || define('EXAMPLE_MAIL', 'example@example.com');

// Status
defined('ACTIVE') || define('ACTIVE', 'active');
defined('INACTIVE') || define('INACTIVE', 'inactive');

// Management section
defined('MANAGEMENT_SECTION') || define('MANAGEMENT_SECTION', [
    'dashboard_management' => 'dashboard_management',
    'pos_management' => 'pos_management',
    'order_management' => 'order_management',
    'product_management' => 'product_management',
    'promotion_management' => 'promotion_management',
    'help_and_support_management' => 'help_and_support_management',
    'report_and_analytics_management' => 'report_and_analytics_management',
    'user_management' => 'user_management',
    'table_management' => 'table_management',
    'system_management' => 'system_management',
]);

// Cache tables
defined('CACHE_BUSINESS_SETTINGS_TABLE') || define('CACHE_BUSINESS_SETTINGS_TABLE', 'cache_business_settings_table');
defined('CACHE_LOGIN_SETUP_TABLE') || define('CACHE_LOGIN_SETUP_TABLE', 'cache_login_setup_table');
defined('CATEGORIES_WITH_CHILDES') || define('CATEGORIES_WITH_CHILDES', 'categories_with_childes');

// Order statuses
defined('PENDING') || define('PENDING', 'pending');
defined('CONFIRMED') || define('CONFIRMED', 'confirmed');
defined('PROCESSING') || define('PROCESSING', 'processing');
defined('OUT_FOR_DELIVERY') || define('OUT_FOR_DELIVERY', 'out_for_delivery');
defined('DELIVERED') || define('DELIVERED', 'delivered');
defined('RETURNED') || define('RETURNED', 'returned');
defined('FAILED') || define('FAILED', 'failed');
defined('CANCELED') || define('CANCELED', 'canceled');
defined('COOKING') || define('COOKING', 'cooking');
defined('COMPLETED') || define('COMPLETED', 'completed');

// Wallet messages
defined('ADD_WALLET_MESSAGE') || define('ADD_WALLET_MESSAGE', 'add_wallet_message');
defined('ADD_WALLET_BONUS_MESSAGE') || define('ADD_WALLET_BONUS_MESSAGE', 'add_wallet_bonus_message');

// Payment gateway images
defined('PAYMENT_GATEWAY_IMAGE_ARRAY') || define('PAYMENT_GATEWAY_IMAGE_ARRAY', [
    'ssl_commerz_payment' => 'ssl.png',
    'razor_pay' => 'razor_pay.png',
    'paypal' => 'paypal.png',
    'stripe' => 'stripe.png',
    'paystack' => 'paystack.png',
    'bkash' => 'bkash.png',
    'paymob' => 'paymob.png',
    'flutterwave' => 'flutterwave.png',
    'mercadopago' => 'mercadopago.png',
]);

// Telephone codes
defined('TELEPHONE_CODES') || define('TELEPHONE_CODES', [
    'UG' => '+256'
]);