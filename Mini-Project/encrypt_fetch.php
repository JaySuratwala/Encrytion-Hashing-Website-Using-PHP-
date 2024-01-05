<?php
    $conn = mysqli_connect("localhost", "username", "password", "user_cred");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, name, age FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"] . "</td><td>" . $row["hashed_password"] . "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>