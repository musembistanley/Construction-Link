<?php
// Start session (if not already started)
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_name'])) {
    // Fetch and display user's name
    $user_name = $_SESSION['user_name'];
} else {
    // Redirect to login page if user is not logged in
    header("Location: login-company.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Link</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between; /* Align items at the right corner */
            align-items: center; /* Center items vertically */
        }

        .header-left {
            flex: 1; /* Take remaining space */
        }

        .header-right {
            margin-right: 20px; /* Add some margin */
        }

        .header-right p {
            margin: 0; /* Remove default margin */
        }

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f1f1f1;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            padding: 8px;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 20px;
        }

        .tabcontent h3 {
            margin-top: 0;
        }

        /* Style the tab links */
        .tablinks {
            background-color: #f1f1f1;
            padding: 8px;
            border: none;
            cursor: pointer;
        }

        .tablinks:hover {
            background-color: #ddd;
        }

        .tablinks.active {
            background-color: #ccc;
        }

        /* Style the messaging section */
        .message-section {
            margin-top: 20px;
        }

        .message-form {
            display: flex;
            align-items: center;
        }

        .message-input {
            flex: 1;
            padding: 8px;
            margin-right: 8px;
        }

        .message-send {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .message-send:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-left">
            <h1>Construction Link</h1>
        </div>
        <div class="header-right">
            <p>Welcome, <?php echo $user_name; ?>!</p>
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <div class="sidebar">
        <ul>
            <li><a href="#" onclick="openTab(event, 'companies')">Companies</a></li>
            <li><a href="CP-builder.php">Change Profile</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <!-- Companies Page -->
        <div id="companies" class="tabcontent">
            <h2>Companies</h2>
            <ul>
                <li>
                    <a href="#" onclick="openCompany(event, 'company1')">Company A</a>
                    <ul>
                        <li>Services Offered:
                            <ul>
                                <li>Architecture</li>
                                <li>Exterior Design</li>
                                <li>Interior Design</li>
                                <li>Decoration</li>
                                <li>Furniture</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="openCompany(event, 'company2')">Company B</a>
                    <ul>
                        <li>Services Offered:
                            <ul>
                                <li>Architecture</li>
                                <li>Exterior Design</li>
                                <li>Interior Design</li>
                                <li>Decoration</li>
                                <li>Furniture</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Add more companies here -->
            </ul>
        </div>
        <!-- Company A -->
        <div id="company1" class="company tabcontent" style="display: none;">
            <h2>Company A</h2>
            <!-- Projects of Company A -->
            <div class="tabs">
                <button class="tablinks" onclick="openTab(event, 'services1')">Services</button>
                <button class="tablinks" onclick="openTab(event, 'projects1')">Projects</button>
            </div>
            <!-- Service Page of Company A -->
            <div id="services1" class="tabcontent">
                <h3>Services Offered</h3>
                <ul>
                    <li>Architecture</li>
                    <li>Exterior Design</li>
                    <li>Interior Design</li>
                    <li>Decoration</li>
                    <li>Furniture</li>
                </ul>
            </div>
            <!-- Project Page of Company A -->
            <div id="projects1" class="tabcontent">
                <h3>Projects of Company A</h3>
                <!-- Display projects of Company A -->
                <div class="project">
                    <h4>Project 1</h4>
                    <p>Description of Project 1</p>
                    <!-- Messaging section for Project 1 -->
                    <div class="message-section">
                        <form class="message-form" onsubmit="sendMessage(event, 'company1', 'Project 1')">
                            <input type="text" class="message-input" placeholder="Type your message...">
                            <button type="submit" class="message-send">Send</button>
                        </form>
                    </div>
                </div>
                <!-- Add more projects of Company A here -->
            </div>
        </div>
        <!-- Company B -->
        <div id="company2" class="company tabcontent" style="display: none;">
            <h2>Company B</h2>
            <!-- Projects of Company B -->
            <div class="tabs">
                <button class="tablinks" onclick="openTab(event, 'services2')">Services</button>
                <button class="tablinks" onclick="openTab(event, 'projects2')">Projects</button>
            </div>
            <!-- Service Page of Company B -->
            <div id="services2" class="tabcontent">
                <h3>Services Offered</h3>
                <ul>
                    <li>Architecture</li>
                    <li>Exterior Design</li>
                    <li>Interior Design</li>
                    <li>Decoration</li>
                    <li>Furniture</li>
                </ul>
            </div>
            <!-- Project Page of Company B -->
            <div id="projects2" class="tabcontent">
                <h3>Projects of Company B</h3>
                <!-- Display projects of Company B -->
                <div class="project">
                    <h4>Project 1</h4>
                    <p>Description of Project 1</p>
                    <!-- Messaging section for Project 1 -->
                    <div class="message-section">
                        <form class="message-form" onsubmit="sendMessage(event, 'company2', 'Project 1')">
                            <input type="text" class="message-input" placeholder="Type your message...">
                            <button type="submit" class="message-send">Send</button>
                        </form>
                    </div>
                </div>
                <!-- Add more projects of Company B here -->
            </div>
        </div>
    </div>
    
    <script>
        // Function to open the tab
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }

        // Function to open the specific company
        function openCompany(evt, companyName) {
            var i, company, tabcontent;
            company = document.getElementsByClassName("company");
            for (i = 0; i < company.length; i++) {
                company[i].style.display = "none";
            }
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(companyName).style.display = "block";
            document.getElementById(companyName).querySelector('.tablinks').click();
        }

        // Function to send message
        function sendMessage(event, companyName, projectName) {
            event.preventDefault();
            var messageInput = event.target.querySelector('.message-input').value;
            // Here, you would typically send the message to the backend to be stored in the database
            // For demonstration purposes, we'll just log the message to the console
            console.log("Message sent to " + companyName + " regarding project " + projectName + ": " + messageInput);
            // Optionally, you can display a confirmation message to the user
            alert("Message sent!");
            // Clear the message input field
            event.target.querySelector('.message-input').value = '';
        }
    </script>
</body>
</html>
