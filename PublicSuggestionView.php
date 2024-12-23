<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Suggestion List</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <?php 
    include 'header.php'
    ?>
    
    <div class="PublicSuggestionViewContainer">
        <h2>Public Suggestion List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Suggestion</th>
                <th>Date</th>
            </tr>
            <?php

            include 'db.php';

            $sql = "SELECT * FROM suggestions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["suggestion"] . "</td><td>" . $row["created_at"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No suggestions found</td></tr>";
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
