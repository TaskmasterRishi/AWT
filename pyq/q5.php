<?php
// Directory containing the images
$imageDirectory = 'images/';

// Get an array of all image files in the directory
$images = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Check if there are any images in the directory
if (count($images) > 0) {
    // Select a random image
    $randomImage = $images[array_rand($images)];

    // Display the selected image
    echo '<img src="' . $randomImage . '" alt="Random Image">';
} else {
    echo 'No images found in the directory.';
}
?>