<?php
/*
Plugin Name: Plugin Hello Dunia by Fajri
Description: Plugin sederhana untuk menampilkan pesan "Hello Dunia".
Author: Fajri
Version: 1.0
*/

// Kode plugin akan diletakkan di sini
function tampilkan_hello_dunia() {
    echo "<p>Hello Dunia! Ini dari plugin pertamaku.</p>";
}

//add_action('wp_footer', 'tampilkan_hello_dunia');
add_action('wp_head', 'tampilkan_hello_dunia');
?>
