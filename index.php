<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Background Video with Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Add the text above the button -->
    <h1 id="siteTitle">Teach Track</h1>

    <button id="playButton" onclick="playVideo()">LINK START</button>

    <!-- Fullscreen background video -->
    <video id="backgroundVideo" src="SAO.mp4"></video>

    <!-- Hidden login form -->
    <div id="loginForm" class="login-form">
        <h2>Log in</h2>
        <label>account</label>
        <input type="text" id="username" placeholder="Enter account" required>
        <label>password</label>
        <input type="password" id="password" placeholder="Enter password" required>
        <button type="button" onclick="login()">Login</button>
        <p id="errorMessage" style="color: red; display: none;">Incorrect username or password.</p>
    </div>

    <script>
        function playVideo() {
            const video = document.getElementById("backgroundVideo");
            const button = document.getElementById("playButton");
            const loginForm = document.getElementById("loginForm");
            const siteTitle = document.getElementById("siteTitle");  // Reference to the h1 text

            video.style.display = "block"; // Make the video visible
            video.play(); // Play the video
            button.style.display = "none"; // Hide the button
            siteTitle.style.display = "none"; // Hide the h1 text (Teach Track)

            // When the video ends, hide it and show the login form
            video.onended = function() {
                video.style.display = "none";
                loginForm.style.display = "flex";
            };
        }

        function login() {
            // Default credentials
            const defaultUsername = "Ralph";
            const defaultPassword = "Marusu";

            // Get entered credentials
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Check if credentials match
            if (username === defaultUsername && password === defaultPassword) {
                // Redirect to a new page (newPage.php)
                window.location.href = "index2.php";
            } else {
                // Display error message
                document.getElementById("errorMessage").style.display = "block";
            }
        }
    </script>
</body>
</html>
