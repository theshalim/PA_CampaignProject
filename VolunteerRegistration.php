<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php 
    include 'header.php'
    ?>
    <div class="container">
        <h2>Volunteer Registration Form</h2>
        <form action="VolunteerRegistration.php" method="post">
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="availability">Availability</label>
                <input type="text" id="availability" name="availability" required>
            </div>
            <div class="form-group">
                <label for="interests">Areas of Interest</label>
                <textarea id="interests" name="interests" required></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Previous Volunteer Experience</label>
                <textarea id="experience" name="experience"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <a href="VolunteerView.php">Contact</a>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include 'db.php';

            $name = $conn->real_escape_string($_POST['full-name']);
            $email = $conn->real_escape_string($_POST['email']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $address = $conn->real_escape_string($_POST['address']);
            $availability = $conn->real_escape_string($_POST['availability']);
            $interests = $conn->real_escape_string($_POST['interests']);
            $experience = $conn->real_escape_string($_POST['experience']);

            $sql = "INSERT INTO volunteers (name, email, phone, address, availability, interests, experience) VALUES ('$name', '$email', '$phone', '$address', '$availability', '$interests', '$experience')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Thank you, $name. Your registration has been submitted successfully.</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
        ?>
    </div>
        
    <?php 
    include 'footer.php'
    ?>
</body>
</html>
