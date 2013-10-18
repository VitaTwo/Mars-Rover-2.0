<?php

include dirname(__FILE__).'/Cell.php';
include dirname(__FILE__).'/Grid.php';
include dirname(__FILE__).'/MarsRover.php';
include dirname(__FILE__).'/Controller.php';

$grid = new Grid(5, 10);

$controller = new Controller("ffrff", new MarsRover(0, 0), $grid);
$controller->controlRover();

$grid->grid[$controller->rover->getX()][$controller->rover->getY()]->setState('X');

for ($x=$grid->width; $x > 0; $x--) { 
	for ($y=0; $y < $grid->height; $y++) { 
		print $grid->grid[$x -1][$y]->getState();
	}
	print "".PHP_EOL;
}