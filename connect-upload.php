<html>
    <head>
        <title> Insert Page </title>
    </head>
<body>
    <?php

        $oeder_no = $_POST['order_no'];
        $book = $_POST['book'];
        $author = $_POST['author'];
        $year_of_publication = $_POST['year_of_publication'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $Img_name = $_POST['Img_name'];
        $img_path= $_POST['img_path'];
        $upload_date = $_POST['upload_date'];
        $email = $_POST['email'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "lit";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO product(book, author, year_of_publication, price, description, Img_name, img_path, upload_date, email) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            session_start();
            
            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssiisss",  $book, $author, $year_of_publication, $price, $descrition,  $Img_name,  $img_path,  $upload_date,  $email);
                if ($stmt->execute()) {
                    // $sql = "SELECT fname FROM login WHERE email = '$email' and password = '$password'";
                    // $result = mysqli_query($conn,$sql);
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $_SESSION['username'] =  $username;
                    header("Location: Userhomepg.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    
?>
</body>
</html>