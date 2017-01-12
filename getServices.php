<?php 

$services = array();
$services[] = ['title' => 'Sturdy Templates', 'description' => 'Our templates are updated regularly so they don\'t break.'];
$services[] = ['title' => 'Ready to Ship', 'description' => 'You can use this theme as is, or you can make changes!'];
$services[] = ['title' => 'Up to Date', 'description' => 'We update dependencies to keep things fresh.'];
$services[] = ['title' => 'Made with Love', 'description' => 'You have to make your websites with love these days!'];
echo json_encode($services);
exit;

?>