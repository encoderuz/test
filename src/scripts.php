<?php

function color($color, $text){
    return "\033[$color" . "m $text \033[0m\n";
}
$red = 31;
$green = 32;
$brown = 33;
$blue = 34;
$purple = 35;
$skyblue = 36;
$white = 37;
print_r(color($blue, 'encoderuz/test'));