<html>
<body>
<?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "1234";
                    $dbname = "weblog";

                    $title=$_REQUEST["blog_title"];
                    $pub=$_REQUEST["pub_by"];
                    $content=$_REQUEST["blog_content"];

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql1 = "SELECT * FROM blogs ";
                    $result = $conn->query($sql1);
                    $n=$result->num_rows;
                    $n++;
                    
                    $sql = "INSERT INTO blogs  VALUES ('$title', '$pub', '$content','$n')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Blog submited successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
              ?>
<br>
<a href="weblog.php">Go back</a>
</body>
</html>              