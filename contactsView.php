<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <?php 
    include 'header.php'
    ?>
    
    <div class="contactsViewcontainer">
        <h2>Contact List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            <?php
            include 'db.php';
            $sql = "SELECT * FROM contacts";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["message"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No contacts found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
        
    <?php 
    include 'footer.php'
    ?>
    
</body>
</html>
