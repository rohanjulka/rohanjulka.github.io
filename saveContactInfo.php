<?php 
$postdata = file_get_contents("php://input");
$request = json_decode($postdata, true);
require("Db.class.php");
// Creates the instance
$db = new Db();
$content = $db->query("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)", array('name'=>$request['name'], 'email'=>$request['email'], 'message'=>$request['message'] ));
if($content) {
	$response = array('succes'=>1);
}
echo json_encode($response);
exit;
?>