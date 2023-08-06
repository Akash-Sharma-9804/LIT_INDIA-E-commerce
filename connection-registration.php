<html>
    <head>
        <title> Insert Page </title>
    </head>
<body>
    <?php

        $username = $_POST['username'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "lit";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM login WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO login(username, contact_no, email, address, password) values(?, ?, ?, ?, ?)";

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
                $stmt->bind_param("sisss",$username, $contact_no, $email, $address, $password);
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