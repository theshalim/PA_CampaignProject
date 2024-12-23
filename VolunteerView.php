<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer List</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php 
    include 'header.php'
    ?>
    <div class="VolunteerViewcontainer">
        <h2>Volunteer List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Availability</th>
                <th>Interests</th>
                <th>Experience</th>
                <th>Date</th>
            </tr>
            <?php
            include 'db.php';

            $sql = "SELECT * FROM volunteers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . $row["availability"] . "</td><td>" . $row["interests"] . "</td><td>" . $row["experience"] . "</td><td>" . $row["created_at"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No volunteers found</td></tr>";
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
