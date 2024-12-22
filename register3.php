<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

// SQL query to fetch data
$sql = "SELECT * FROM HASH";
$result = mysqli_query($conn, $sql) or die("SQL query failed");

// Generate the table output
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
            <td>{$row['id']}</td>
            <td>{$row['First_name']} {$row['Last_name']}</td>
        </tr>";
    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
} else {
    echo "<h2>No record found.</h2>";
}
?>
