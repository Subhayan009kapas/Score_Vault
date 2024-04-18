<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: grey;
        }

        .btn {
            width: 10%;
            height: 5%;
            font-size: 22px;
            padding: 0px;
        }

        table,
        th,
        td {
            border: 2px solid black;
            width: 1100px;
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="Enrollment" class="btn" placeholder="Enter">
        <input type="submit" name="search" class="btn" value="search">
    </form>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Password</th>
            <th>sem1</th>
            <th>sem2</th>
            <th>sem3</th>
            <th>sem4</th>
            <th>sem5</th>
            <th>sem6</th>
            <th>sem7</th>
            <th>sem8</th>
        </tr>
        <?php
        // Database connection
        $connection = mysqli_connect("localhost", "root", "", "uem_student");

        // Check connection
        if ($connection === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Check if form is submitted
        if (isset($_POST['search'])) {
            // Get input value
            $Enrollment = $_POST['Enrollment'];

            // Prepare query
            $query = "SELECT * FROM student_data WHERE Enrollment='$Enrollment' LIMIT 1";

            // Execute query
            $result = mysqli_query($connection, $query);

            // Check if query executed successfully
            if ($result) {
                // Check if rows are found
                if (mysqli_num_rows($result) > 0) {
                    // Fetch data
                    $row = mysqli_fetch_assoc($result);

                    // Output data
                    echo "<tr>";
                    echo "<td>" . $row['Image'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Password'] . "</td>";
                    echo "<td>" . $row['sem1'] . "</td>";
                    echo "<td>" . $row['sem2'] . "</td>";
                    echo "<td>" . $row['sem3'] . "</td>";
                    echo "<td>" . $row['sem4'] . "</td>";
                    echo "<td>" . $row['sem5'] . "</td>";
                    echo "<td>" . $row['sem6'] . "</td>";
                    echo "<td>" . $row['sem7'] . "</td>";
                    echo "<td>" . $row['sem8'] . "</td>";
                    echo "</tr>";
                } else {
                    echo "<tr><td colspan='11'>No records found</td></tr>";
                }
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($connection);
            }

            // Close connection
            mysqli_close($connection);
        }
        ?>
    </table>
</body>
</html>
