<?php
/**
 * This file contains the Admin class.
 */
class Admin {
    private $id;
    private $username;
    /**
     * Admin constructor.
     *
     * @param array $adminData The admin data.
     */
    public function __construct($adminData) {
        $this->id = $adminData['id'];
        $this->username = $adminData['username'];
    }
    // Other methods...
}
?>