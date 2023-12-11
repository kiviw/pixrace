<?php
/**
 * This file contains various helper functions used throughout the marketplace.
 */
/**
 * Initialize the marketplace.
 */
function initializeMarketplace() {
    // Connect to the database
    $db = connectToDatabase();
    // Set the default time zone
    date_default_timezone_set('UTC');
    // Set the theme and text color
    setThemeAndTextColor();
    // Check if the user is logged in
    if (isLoggedIn()) {
        // Load the user data
        $user = loadUser($_SESSION['user_id']);
        // Update the user's Monero balance
        $user->updateMoneroBalance();
    }
}
/**
 * Connect to the database.
 *
 * @return mysqli The database connection object.
 */
function connectToDatabase() {
    $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($db->connect_error) {
        die('Database connection failed: ' . $db->connect_error);
    }
    return $db;
}
/**
 * Set the theme and text color.
 */
function setThemeAndTextColor() {
    // Set the theme
    $theme = THEME;
    // Set the text color
    $textColor = TEXT_COLOR;
    // Set the theme and text color in the session
    $_SESSION['theme'] = $theme;
    $_SESSION['text_color'] = $textColor;
}
/**
 * Check if the user is logged in.
 *
 * @return bool True if the user is logged in, false otherwise.
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}
/**
 * Load a user by their ID.
 *
 * @param int $userId The ID of the user.
 * @return User The user object.
 */
function loadUser($userId) {
    $db = connectToDatabase();
    // Fetch the user data from the database
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = $db->query($query);
    if ($result->num_rows == 1) {
        $userData = $result->fetch_assoc();
        $user = new User($userData);
        return $user;
    } else {
        die('User not found');
    }
}
/**
 * Handle the incoming request.
 */
function handleRequest() {
    // Get the requested page
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    // Check if the requested page exists
    if (file_exists("pages/$page.php")) {
        // Include the requested page
        include "pages/$page.php";
    } else {
        // Redirect to the home page
        header('Location: index.php?page=home');
        exit();
    }
}
?>