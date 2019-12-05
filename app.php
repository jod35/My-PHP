<?php
require_once 'login.php';
$conn= new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");


$query="SELECT * FROM classics";
$result=$conn->query($query);
if(!$result) die("Fatal Error");

$rows=$result->num_rows;

for ($i=0; $i < $rows; $i++) {
  $result->data_seek($i);
  echo "Author: ".htmlspecialchars($result->fetchassoc()['author'])."<br>";

  $result->data_seek($i);
  echo "Author: ".htmlspecialchars($result->fetchassoc()['title'])."<br>";

  $result->data_seek($i);
  echo "Author: ".htmlspecialchars($result->fetchassoc()['category'])."<br>";

  $result->data_seek($i);
  echo "Author: ".htmlspecialchars($result->fetchassoc()['year'])."<br>";
}
$result->close();
$conn->close();

?>
