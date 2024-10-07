<!DOCTYPE html>
<html>
<body>

<?php 
$myLinks = array(
	"https://yungjr.github.io/wallpapers/01.png", 
    "https://yungjr.github.io/wallpapers/02.png",
    "https://yungjr.github.io/wallpapers/03.jpg",
    "https://yungjr.github.io/wallpapers/04.jpg",
    "https://yungjr.github.io/wallpapers/05.jpg",
    "https://yungjr.github.io/wallpapers/06.jpg",
    "https://yungjr.github.io/wallpapers/07.png",
    "https://yungjr.github.io/wallpapers/08.png",
    "https://yungjr.github.io/wallpapers/09.png",
    "https://yungjr.github.io/wallpapers/10.png",
    "https://yungjr.github.io/wallpapers/11.jpg",
    "https://yungjr.github.io/wallpapers/12.png",
    "https://yungjr.github.io/wallpapers/13.jpg",
    "https://yungjr.github.io/wallpapers/14.jpg",
    "https://yungjr.github.io/wallpapers/15.jpg",
    "https://yungjr.github.io/wallpapers/16.jpg",
	"https://yungjr.github.io/wallpapers/17.jpg");

$randomRedirection = $myLinks[array_rand($myLinks)];
header("Location: $randomRedirection");
?>

</body>
</html>
