    <?php
    // Check if form is submitted
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receive form data
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Check if username and password are correct
        if ($username === "admin" && $password === "cat123") {
            // Login successful
            echo "<h1>Welcome $username!</h1>";
            echo "<p>You will be redirected to the salary calculator in a few seconds...</p>";

            // Redirect after 2 seconds
            echo '<meta http-equiv="refresh" content="2; url=palkkalaskuri.php">';
            exit();
        } else {
            // Login failed
            echo "<p>Invalid username or password</p>";
        }
    }
    ?>
