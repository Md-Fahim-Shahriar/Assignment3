<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body style="margin: 50px 100px; padding: ">
    <h1 style="text-align: center;">Details of Contact Form</h1>
    <table class="table">
        <thead style="font-size: 1.25rem">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $connection = new mysqli("localhost", "root", "", "contactdb");

            if ($connection->connect_error) {
                die("Connection not established " . $connection->connect_error);
            }

            $sql = "SELECT * FROM contactlist ";
            $result = $connection->query($sql);

            if (!$result) {
                die("SQL query failed " . $connection->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["phone"] . "</td>
                        <td>" . $row["message"] . "</td>
                    </tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>