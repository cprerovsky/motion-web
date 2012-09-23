<?php
system('./frame.py localhost:8081 frame.jpg');
header('Content-type:image/jpg');
readfile('frame.jpg');
?>
