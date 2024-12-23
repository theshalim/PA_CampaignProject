<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php 
    include 'header.php'
    ?>
    <div class="event-container">
        <div class="event">
            <div class="event-image">
                <img src="community_cleanup.jpg" alt="Community Clean-Up Drive">
            </div>
            <div class="event-details">
                <h2>Community Clean-Up Drive</h2>
                <p><strong>Date:</strong> December 10, 2024</p>
                <p><strong>Location:</strong> Central Park</p>
                <p>Join us in making our community cleaner and greener. Volunteers will be provided with gloves, bags, and refreshments.</p>
            </div>
        </div>

        <div class="event">
            <div class="event-image">
                <img src="health_fair.jpg" alt="Health and Wellness Fair">
            </div>
            <div class="event-details">
                <h2>Health and Wellness Fair</h2>
                <p><strong>Date:</strong> January 15, 2025</p>
                <p><strong>Location:</strong> City Hall</p>
                <p>A day dedicated to health and wellness with free check-ups, fitness workshops, and healthy food stalls. Bring your family and friends!</p>
            </div>
        </div>
        <div class="event">
            <div class="event-image">
                <img src="charity_run.jpg" alt="Charity Fun Run">
            </div>
            <div class="event-details">
                <h2>Charity Fun Run</h2>
                <p><strong>Date:</strong> February 20, 2025</p>
                <p><strong>Location:</strong> Riverside Park</p>
                <p>Participate in our annual 5K run to support local charities. Registration includes a t-shirt and a medal for all finishers.</p>
            </div>
        </div>
        <div class="event">
            <div class="event-image">
                <img src="recycling_workshop.jpg" alt="Recycling Workshop">
            </div>
            <div class="event-details">
                <h2>Recycling Workshop</h2>
                <p><strong>Date:</strong> March 5, 2025</p>
                <p><strong>Location:</strong> Community Center</p>
                <p>Learn the basics of recycling and how to reduce waste at home. The workshop will include hands-on activities and a Q&A session.</p>
            </div>
        </div>

        <div class="event">
            <div class="event-image">
                <img src="tree_planting.jpg" alt="Tree Planting Day">
            </div>
            <div class="event-details">
                <h2>Tree Planting Day</h2>
                <p><strong>Date:</strong> April 22, 2025</p>
                <p><strong>Location:</strong> Greenfield Park</p>
                <p>Celebrate Earth Day with us by planting trees and contributing to a greener planet. All necessary tools and plants will be provided.</p>
            </div>
        </div>
    </div>
    <?php 
    include 'footer.php'
    ?>
</body>
</html>
