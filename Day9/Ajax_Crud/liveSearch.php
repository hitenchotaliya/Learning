<?php

$search_value = $_POST['search'];


$conn = mysqli_connect("localhost", "root", "root", "test") or die("Connection failed");

$sql = "SELECT * FROM demo WHERE fname LIKE '%{$search_value}%' OR lname LIKE '%{$search_value}%' ";

$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = "";

if (mysqli_num_rows($result) > 0) {
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px" >
        
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['fname']} {$row['lname']}</td>
            <td><button id='edit-btn' data-id='{$row["id"]}'>Edit</button></td>
            <td><button id='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
    }

    $output .= "</table>";
    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No Record found</h2>";
}