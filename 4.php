<?php

$name = "Javid";

$hello = function() use($name) {
    return "Hello ". $name;
};

echo $hello();