<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Suggestion Form</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php 
    include 'header.php'
    ?>
    <div class="container">
        <h1>We Value Your Suggestion</h1>
        <p>Your feedback helps us improve. Please let us know your thoughts and suggestions.</p>
        <form action="PublicSuggestion.php" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="suggestion">Your Suggestion</label>
                <textarea id="suggestion" name="suggestion" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit Suggestion</button>
            </div>
        </form>
        <a href="PublicSuggestionView.php">Contact</a>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include 'db.php';

            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $subject = $conn->real_escape_string($_POST['subject']);
            $suggestion = $conn->real_escape_string($_POST['suggestion']);

            $sql = "INSERT INTO suggestions (name, email, subject, suggestion) VALUES ('$name', '$email', '$subject', '$suggestion')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Thank you, $name. Your suggestion has been submitted successfully.</p>";
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
