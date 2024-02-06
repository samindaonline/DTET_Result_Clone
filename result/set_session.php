<?php
// Start session
session_start();

// Check if the NIC is sent via POST
if (isset($_POST['nic'])) {
    // Set NIC value in session variable
    $_SESSION['nic'] = $_POST['nic'];
    echo 'success'; // Return success response
} else {
    echo 'error'; // Return error response if NIC is not provided
}
?>