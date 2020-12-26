<?php
// include composer autoload
require 'vendor/autoload.php';


include_once 'Product.php';
include_once 'Product2.php';


//use andrew2\Product as Product2;111

$product = new \andrew1\Product();
$product->getProduct()->getProduct()->getProduct();



// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
echo __DIR__ .'/images/test.jpg';
$image = $manager->make(__DIR__ .'/images/test.jpg')->resize(300, 200)->blur(2)->save('images/test22.jpg');;

