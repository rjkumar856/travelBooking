<?php
$user = new USER();
$user_id = $_GET['id'];
$stmt = $user->runQuery("SELECT * FROM user WHERE id='$user_id'");
$stmt->execute();
for($i=0; $stmt1 = $stmt->fetchObject(); $i++)
{
$result = $stmt1->status;

if($result == 1){
$update=$user->runQuery("UPDATE user SET status='0' WHERE id='$user_id'");
$update->execute();
header("Location: user-list");
}

if($result == 0){
$update=$user->runQuery("UPDATE user SET status='1' WHERE id='$user_id'");
$update->execute();
header("Location: user-list");
}
}
?>