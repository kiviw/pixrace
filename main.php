<?php
/**
 * This is the main file of the peer-to-peer marketplace.
 * It handles the routing and initialization of the application.
 */
// Include necessary files
require_once 'config.php';
require_once 'functions.php';
require_once 'classes/User.php';
require_once 'classes/Product.php';
require_once 'classes/Transaction.php';
require_once 'classes/Message.php';
require_once 'classes/Admin.php';
require_once 'classes/MoneroRpc.php'; // Include the MoneroRpc class
// Start session
session_start();
// Initialize the marketplace
initializeMarketplace();
// Handle the incoming request
handleRequest();
?>