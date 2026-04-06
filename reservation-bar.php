<?php
$today = date('m-d');
if ($today >= '03-21' && $today < '06-22') {
    include 'reservation-bar-spring.php';   // Wiosna
}
elseif ($today >= '06-22' && $today < '09-23') {
    include 'reservation-bar-summer.php';   // Lato
}
elseif ($today >= '09-23' && $today < '12-22') {
    include 'reservation-bar-autumn.php';   // Jesień
}
else {
    include 'reservation-bar-winter.php';   // Zima
}
?>