<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Suggestion List</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="Image/LogoPNG.png" alt="Public Awareness Campaign" height="50px" >
</div>
<div class="nav">
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="Donation.php">Donation</a></li>
                <li><a href="VolunteerRegistration.php">Volunteer Registration</a></li>
                <li><a href="CommingEvents.php">Coming Events</a></li>
                <li><a href="PublicSuggestion.php">Public Suggestion</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="CredentialButton">
        <button><a href="#">Sign Up</a></button>
        <button><a href="#">Login</a></button>
        </div>
    </header>
    <div class="container">
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
    <footer class="footer">
        <div class="footercontainer">
            <div class="newsletter">
                <h3>Newsletter</h3>
                <p>Subscribe to our JaGaUpdates!</p>
                <input type="email" placeholder="Email Address...">
                <button>Subscribe</button>
            </div>
            <div class="solutions">
                <h3>Our Solutions</h3>
                <ul>
                    <li><a href="#">JaGaApp</a></li>
                    <li><a href="#">JaGaRonda</a></li>
                    <li><a href="#">JaGaCount</a></li>
                    <li><a href="#">JaGaCard</a></li>
                    <li><a href="#">HeyJaGa</a></li>
                    <li><a href="#">JaGaPay</a></li>
                </ul>
            </div>
            <div class="about-us">
                <h3>About Us</h3>
                <ul>
                    <li><a href="#">Investor Relation</a></li>
                </ul>
            </div>
            <div class="careers">
                <h3>Careers</h3>
                <ul>
                    <li><a href="#">Join Us</a></li>
                </ul>
            </div>
            <div class="contact-us">
                <h3>Contact Us</h3>
                <p>Email: hello@jagaapp.com</p>
                <p>Phone: +603 7931 9911</p>
                <div class="social-media">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                    <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
                    <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
                </div>
            </div>
            <div class="terms">
                <h3>JaGa Community Service Terms</h3>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">JaGaSolution Community Agreement</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p> All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
