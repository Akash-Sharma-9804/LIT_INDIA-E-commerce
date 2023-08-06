<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <h2>Send Email</h2>
    <button onclick="sendEmail()">Send Email</button>

    <script>
        function sendEmail() {
            // Make an AJAX request to the server when the button is clicked
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    // Display the server response in an alert box
                    alert(xhr.responseText);
                }
            };

            // Replace "server.php" with the appropriate URL of your server-side PHP script
            xhr.open("GET", "server.php", true);
            xhr.send();
        }
    </script>
</body>
</html>

<?php
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db = "lit";  
   


try {
    $conn = mysqli_connect($host, $user, $password, $db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch the email address from the database (adjust the query according to your schema)
    $stmt = $conn->prepare("SELECT email FROM login WHERE email = :email_id");
    $stmt->bindParam(':email_id', $userId); // Assuming you have the user's ID
    $stmt->execute();
    $row = $stmt->fetch();

    $emailAddress = $row['email'];

    // Send the email
    $to = $emailAddress;
    $subject = "Test Email";
    $message = "This is a test email.";
    $headers = "From: your_email@example.com";

    // Use PHP's mail() function to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send the email.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>