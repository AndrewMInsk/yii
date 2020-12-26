<?php
// include composer autoload
require 'vendor/autoload.php';


include_once 'Product.php';
include_once 'Product2.php';


//use andrew2\Product as Product2;

$product = new \andrew1\Product();
$product->getProduct()->getProduct()->getProduct();



// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('images/test.jpg')->resize(300, 200);
var_dump($image);

