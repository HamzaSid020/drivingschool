<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
        
        $email = $_POST['email'];
        
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $to = $email;
                $subject = 'Thank You Email';
                $message = "Thank you for choosing us! We're thrilled to have you on board. Stay tuned for exciting templates and themes!\n\nBest regards,\nTechzaa";
                $headers = 'From: example@gmail.com' . "\r\n";
                
                $mail = mail($to, $subject, $message, $headers);

                if ($mail) {
                    echo "<script>alert('The email was sent to your email address: " . htmlspecialchars($email) . "');</script>";
                } else {
                    echo "<script>alert('There was an error sending the email. Please try again later.');</script>";
                }

            }
            else {
                echo "<script>alert('Please enter a valid email address.');</script>";
            }
    } 
    else {
             error_log("No email provided or invalid request method.");
        }   
?>