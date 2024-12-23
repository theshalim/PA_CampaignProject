<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Entry Form</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>  
    <?php 
    include 'header.php'
    ?>
    <div class="container">
        <h2>Donation Entry Form</h2>
        <form action="Donation.php" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
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
                <label for="amount">Donation Amount</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="message">Message (Optional)</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Donate</button>
            </div>
        </form>
        <a href="DonationView.php">Donation View</a>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include 'db.php';

            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $amount = $conn->real_escape_string($_POST['amount']);
            $message = $conn->real_escape_string($_POST['message']);

            $sql = "INSERT INTO donations (name, email, phone, amount, message) VALUES ('$name', '$email', '$phone', '$amount', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Thank you, $name. Your donation has been submitted successfully.</p>";
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
