<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation List</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <?php 
    include 'header.php'
    ?>
    <div class="DonationListcontainer">
        <h2>Donation List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <?php
            include 'db.php';
            $sql = "SELECT * FROM donations";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["message"] . "</td><td>" . $row["created_at"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No donations found</td></tr>";
            }
            ?>
        </table>
    </div> 
    
    <?php 
    include 'footer.php'
    ?>

</body>
</html>
