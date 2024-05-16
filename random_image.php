<?php
// Define the directory containing your images
$imageDir = 'car/';

// Get all image files from the directory
$images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Get a random image from the array of image files
$randomImage = $images[array_rand($images)];

// Output the image HTML
echo '<img src="' . $randomImage . '" alt="Random Image">';
?>
