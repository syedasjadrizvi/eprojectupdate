<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CARE Medical Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Make your appointment</h1>
    </header>

    <section>
        <form action="book_appointment.php" method="POST">
            <label for="name">Full Name</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="address">Address</label><br>
            <input type="text" id="address" name="address" required><br><br>

            <label for="username">Doctor Name</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="date">Date</label><br>
            <input type="date" id="date" name="date" required><br><br>

            <button type="submit" name="book_appointment">Make your Appointment</button><br><br>
        </form>
        
    </section>

    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
}

header {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 20px;
}

footer {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

h1 {
    font-size: 2rem;
    margin-bottom: 20px;
}

/* Form Styles */
form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 40px auto;
    padding: 30px;
    text-align: left;
}

label {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}

input[type="text"], input[type="email"], input[type="tel"], input[type="password"], input[type="datetime-local"], textarea {
    width: 100%;
    padding: 12px;
    margin: 8px 0 15px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #007bff;
    color: white;
    font-size: 1rem;
    border: none;
    padding: 12px;
    border-radius: 4px;
    width: 100%;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    form {
        padding: 20px;
        margin: 20px;
    }

    header, footer {
        padding: 15px;
    }

    h1 {
        font-size: 1.5rem;
    }
}

    </style>

    



</body>
<?php
include("footer.php");
?>
</html>
