<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Connect to your database (replace 'your_db_hostname', 'your_db_username', 'your_db_password', and 'your_db_name' with appropriate values)
    $conn = new mysqli('localhost', 'root', '', 'lit');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user data from the form
    $book = $_POST['book'];
    $author = $_POST['author'];
    $year_of_publication = $_POST['year_of_publication'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $imageData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $email = $_POST['email'];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO product (book, author, year_of_publication, price, description, image, email) VALUES ('$book', '$author', '$year_of_publication', '$price', '$description', '$imageData', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Data and image uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>