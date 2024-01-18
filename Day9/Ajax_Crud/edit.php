<?php 
$eid = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "root", "test") or die("Connection failed");

$sql = "SELECT * from demo WHERE id = '{$eid}'";

$result = mysqli_query($conn, $sql) or die("SQL Failed");

$output = "";

if (mysqli_num_rows($result) > 0) {
    

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
        <td>First Name:</td>
        <td><input type='text' id='fname-edit' value='{$row['fname']}'>
        <input type='text' id='id-edit' value='{$row['id']}' hidden></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><input type='text' id='lname-edit' value=' {$row['lname']}'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' id='edit-submit' value='Save'></td>
    </tr>";
    
    }

    
    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No Record found</h2>";
}
?>
