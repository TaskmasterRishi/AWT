<?php
// Directory where images are located
$imageDir = './images/';

// Get all image files from the directory
$imageFiles = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// If there are images in the directory
if (!empty($imageFiles)) {
    // Shuffle the array to display images randomly
    shuffle($imageFiles);

    // Display the first image in the shuffled array
    $randomImage = $imageFiles[0];
    echo '<img src="' . $randomImage . '" alt="Random Image">';
} else {
    echo 'No images found.';
}
?>
