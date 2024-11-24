<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $db_username = "root@localhost"; 
    $db_password = " "; 
    $dbname = "offres_en_or"; 

    // Email settings
    $to_email = "admin1@offresenor.net"; 
    $subject = "New Contact Form Submission";
    $headers = "From: no-reply@offresenor.net" . "\r\n" .
               "Reply-To: no-reply@offresenor.net" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Form data
    $user_name = $_POST['username'];
    $user_email = $_POST['email'];
    $user_message = $_POST['msg'];
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // reCAPTCHA secret key
    $recaptcha_secret = "6Ld6_GgqAAAAAIKW2dhDvgSL1ugo7XQT5p9NyPKf";

    // Verify the reCAPTCHA response
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $response_data = json_decode($response);

    if (!$response_data->success) {
        echo "<p style='color:red;'>Captcha verification failed. Please try again.</p>";
        exit();
    }

    // Connect to the database
    $conn = new mysqli("localhost", "root@localhost", "", "offres_en_or");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the form data into the database
    $sql = "INSERT INTO contact_submissions (username, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user_name, $user_email, $user_message);

    if ($stmt->execute()) {
        // Prepare the email message
        $email_message = "<h3>New Contact Form Submission</h3>";
        $email_message .= "<p><strong>Name:</strong> $user_name</p>";
        $email_message .= "<p><strong>Email:</strong> $user_email</p>";
        $email_message .= "<p><strong>Message:</strong><br>$user_message</p>";

        // Send the email
        if (mail($to_email, $subject, $email_message, $headers)) {
            echo "<p style='color:green;'>Form submitted successfully. Thank you!</p>";
        } else {
            echo "<p style='color:red;'>Error sending email.</p>";
        }
    } else {
        echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>



