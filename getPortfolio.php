<?php 

$portfolios = array();
$portfolios[] = ['image' => 'img/portfolio/thumbnails/1.jpg', 'full_size' => 'img/portfolio/fullsize/1.jpg', 'category'=>'Category', 'proj_name'=>'Project Name'];
$portfolios[] = ['image' => 'img/portfolio/thumbnails/2.jpg', 'full_size' => 'img/portfolio/fullsize/2.jpg', 'category'=>'Category', 'proj_name'=>'Project Name'];
$portfolios[] = ['image' => 'img/portfolio/thumbnails/3.jpg', 'full_size' => 'img/portfolio/fullsize/3.jpg', 'category'=>'Category', 'proj_name'=>'Project Name'];
$portfolios[] = ['image' => 'img/portfolio/thumbnails/4.jpg', 'full_size' => 'img/portfolio/fullsize/4.jpg', 'category'=>'Category', 'proj_name'=>'Project Name'];
$portfolios[] = ['image' => 'img/portfolio/thumbnails/5.jpg', 'full_size' => 'img/portfolio/fullsize/5.jpg', 'category'=>'Category', 'proj_name'=>'Project Name'];
$portfolios[] = ['image' => 'img/portfolio/thumbnails/6.jpg', 'full_size' => 'img/portfolio/fullsize/6.jpg', 'category'=>'Category', 'proj_name'=>'Project Name'];

echo json_encode($portfolios);
exit;

?>