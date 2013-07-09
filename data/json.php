<?php
header('Content-type: application/json');

$item = new stdClass();
$type = $_GET['type'];

$xperia = array(3, 10);
$sunglass = array(1, 8);
$blackops = array(2, 9);
$bag = array(4, 11);
$one = array(5, 12);
$cam = array(6, 13);
$galaxy = array(7, 14, 15);

switch ($type) {
	case 'details':
		// $item->limage = 'data/images/img1.jpg';
		$item->price = '15000';
		$item->oldPrice = '18000';
		$item->bids = '0';
		$item->offEnding = '6 روز';
		$item->off = true;
		$item->offPercent = '17';
		$item->shipping = rand(0, 1);
		$item->data = new stdClass();
		$item->data->status = 'دست دوم';
		$item->data->brand = 'Sony';
		
		echo json_encode($item);
		break;
	case 'slideshow':
		
		break;
}