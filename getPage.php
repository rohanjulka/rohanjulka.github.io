<?php 
$postdata = file_get_contents("php://input");
$request = json_decode($postdata, true);
require("Db.class.php");
// Creates the instance
$db = new Db();
$content = $db->query("SELECT * FROM pages where id = :page_id ", array('page_id'=>$request['page_id']));

echo json_encode($content[0]);
exit;
?>