<?php
/**
 * This file contains the configuration settings for the marketplace.
 */
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'your_db_username');
define('DB_PASSWORD', 'your_db_password');
define('DB_NAME', 'your_db_name');
// Monero RPC configuration
define('MONERO_RPC_HOST', 'localhost');
define('MONERO_RPC_PORT', 18080);
// CoinGecko API configuration
define('COINGECKO_API_URL', 'https://api.coingecko.com/api/v3');
define('COINGECKO_API_TIMEOUT', 10);
// Captcha configuration
define('CAPTCHA_LENGTH', 5);
define('CAPTCHA_ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
// Other configuration settings
define('THEME', 'dark');
define('TEXT_COLOR', 'blue');
define('WITHDRAWAL_CONFIRMATIONS', 2);
define('PASSWORD_HASH_ALGORITHM', 'bcrypt'); // Change this to the desired password hashing algorithm
?>