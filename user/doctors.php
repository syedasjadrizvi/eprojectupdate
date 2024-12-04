<?php
// Database connection
$servername = "localhost"; // Usually localhost
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password (usually empty for local setups)
$dbname = "doctors_db";    // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch doctors data from the database
$sql = "SELECT id, name, specialty, diseases FROM doctors";
$result = $conn->query($sql);

// Fetch all doctors into an array
$doctors = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $doctors[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors List</title>
    <style>
        /* Basic styling for doctors list */
        body { font-family: Arial, sans-serif; }
        .doctor-item { padding: 10px; margin: 10px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 4px; cursor: pointer; }
        .doctor-item:hover { background-color: #e2e2e2; }
    </style>
</head>
<body>

    <h1>Doctors List</h1>

    <!-- Search Bar -->
    <div style="text-align: center; padding: 20px;">
        <input type="text" id="search" placeholder="Search Doctor by Name..." onkeyup="searchDoctor()">
    </div>

    <!-- Doctor List -->
    <div id="doctor-list">
        <?php foreach ($doctors as $doctor): ?>
            <div class="doctor-item" onclick="showDoctor('<?php echo $doctor['id']; ?>')">
                <h2><?php echo $doctor['name']; ?></h2>
                <p>Specialty: <?php echo $doctor['specialty']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        function showDoctor(doctorId) {
            // You can implement an AJAX call here to load doctor details dynamically based on doctorId.
            alert("Show details for doctor with ID: " + doctorId);
        }

        function searchDoctor() {
            const searchValue = document.getElementById("search").value.toLowerCase();
            const doctorItems = document.querySelectorAll('.doctor-item');

            doctorItems.forEach(function(item) {
                const doctorName = item.querySelector('h2').textContent.toLowerCase();
                if (doctorName.includes(searchValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
