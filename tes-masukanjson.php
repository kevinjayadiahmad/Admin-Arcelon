
<?php
$dbh = new PDO('mysql:host=localhost;dbname=adminarcelon', 'root', '');
$db = $dbh->prepare('SELECT * FROM mainpagehome ');
$db->execute();
$user = $db->fetchALL(PDO::FETCH_ASSOC);

$data = json_encode($user);
echo $data;
?>