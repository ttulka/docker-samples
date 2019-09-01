<html>
<body>
  <h1><?= 'Hello PHP+MySQL!' ?></h1>
<?php
$conn = new PDO('mysql:host=mysql;dbname=mydb', 'myuser', 'secret');
 
$sql = "SELECT name FROM users";
$res = $conn->query($sql);
if ($res) {
  foreach ($res as $row) {
    echo $row['name']."<br>";
  }
}
?>
</body>
</html>