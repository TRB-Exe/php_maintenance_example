<?php
$file = 'maintenance.txt';
$techw = file_get_contents($file);

if ($techw == 1) {
    include 'maintenance.php';
} else {
    include './pages/index.html';
}
