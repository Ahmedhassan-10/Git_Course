<?php
$servername = "AHMED\SQLEXPRESS";     // same as service name in docker-compose.yml
$username   = "AHMED/ahmed";
$password   = "rootpass";
$database   = "dataV1";

// connect to database
$conn = new mysqli($servername, $username, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// fetch data
$sql = "SELECT name, age FROM kill"; // your table name
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>People Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fafafa;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #0078d4;
            color: white;
        }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">People Table</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No data found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
