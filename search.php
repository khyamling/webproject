<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123html2pdf';
$dbName = 'employment';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM journals1 WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['name'];
}
//return json data
echo json_encode($data);
?>
