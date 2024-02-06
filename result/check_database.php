<?php
// Assuming you have a database connection established

// Check if the NIC is sent via POST
if(isset($_POST['nic'])) {
    // Sanitize the input to prevent SQL injection
    $your_db_connection=mysqli_connect("localhost","library_user","123","result");
    $nic = mysqli_real_escape_string($your_db_connection, $_POST['nic']);

    // Perform a query to check if the NIC exists in your database
    $query = "SELECT * FROM examresult WHERE nic = '$nic'";
    $result = mysqli_query($your_db_connection, $query);

    // Check if the query was successful
    if($result) {
        // Check if any rows were returned (NIC exists)
        if(mysqli_num_rows($result) > 0) {
            // NIC exists in the database
            echo 'available';
        } else {
            // NIC does not exist in the database
            echo 'not_available';
        }
    } else {
        // Error occurred while executing the query
        echo 'error';
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // NIC not sent via POST
    echo 'nic_not_provided';
}

// Close the database connection
mysqli_close($your_db_connection);
?>
