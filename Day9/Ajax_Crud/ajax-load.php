<?php
$conn = mysqli_connect("localhost", "root", "root", "test") or die("Connection failed");

$limit_per_page = 5;

$page = "";
if(isset($_POST["page_no"])){
  $page = $_POST["page_no"];
}else{
  $page = 1;
}

$offset = ($page - 1) * $limit_per_page;

$sql = "SELECT * FROM demo LIMIT {$offset},{$limit_per_page}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
$output= "";

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

    $sql_total = "SELECT * FROM demo";
    $records = mysqli_query($conn,$sql_total) or die("Query Unsuccessful.");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record/$limit_per_page);

    $output .='<div id="pagination">';
    for($i=1; $i <= $total_pages; $i++){
        if($i == $page){
          $class_name = "active";
        }else{
          $class_name = "";
        }
        $output .= "<a class='{$class_name}' id='{$i}' href=''>{$i}</a>";
      }
      $output .='</div>';


    echo $output;
} else {
    echo "<h2>No Record found</h2>";
}
?>
