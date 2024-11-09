<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="index2.css"> <!-- Link to the new CSS file -->
    <style>
        /* Basic modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
            color: black; /* Ensure text inside the modal is black */
        }

        .modal button {
            margin-top: 10px;
            padding: 10px;
            width: 100px;
            font-size: 16px;
            cursor: pointer;
        }

        .modal button.confirm {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .modal button.cancel {
            background-color: #f44336;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- IGN Input Form -->
        <div class="ign-form">
            <h2>Enter your In-Game Name</h2>
            <label>IGN</label>
            <input type="text" id="ign" placeholder="Enter IGN" required>
            <button onclick="submitIGN()">Submit</button>
        </div>
    </div>

    <!-- Modal for confirmation -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <h3>Are you sure?</h3> <!-- Added the "Are you sure?" text -->
            <p id="ignDisplay"></p> <!-- Display the entered IGN here -->
            <button class="confirm" onclick="confirmIGN()">Yes</button>
            <button class="cancel" onclick="cancelIGN()">No</button>
        </div>
    </div>

    <script>
        function submitIGN() {
            const ign = document.getElementById("ign").value;

            if (ign) {
                // Show modal with the entered IGN
                document.getElementById("ignDisplay").innerText = ign;
                document.getElementById("confirmationModal").style.display = "flex";
            } else {
                // If no IGN is entered, hide the modal
                document.getElementById("confirmationModal").style.display = "none"; 
            }
        }

        function confirmIGN() {
            const ign = document.getElementById("ign").value;
            // Do something with the confirmed IGN (like storing it, proceeding to a new page, etc.)
            console.log(`User confirmed their IGN: ${ign}`);
            // Redirect to a new page
            window.location.href = "index3.html"; // Redirect to newPage.html
        }

        function cancelIGN() {
            // Close the modal without doing anything
            document.getElementById("confirmationModal").style.display = "none";
        }
    </script>
</body>
</html>
