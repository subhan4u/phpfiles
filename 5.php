<?php
function callFunc1(Closure $closure) {
    $closure();
}

function callFunc2(Callable $callback) {
    $callback();
}

$function = function() {
    echo 'Hello, World!';
};

callFunc1($function); // Hello, World!
callFunc2($function); // Hello, World!

/**
 * The difference is, that a Closure must be an anonymous function, where callable also can be a normal function.
 * 
 * The main difference between them is that a closure is a class and callable a type.
 * 
 * https://stackoverflow.com/questions/29730720/php-type-hinting-difference-between-closure-and-callable
 */

function callFunc3(Closure $closure) {
    $closure();
}

function callFunc4(Callable $callback) {
    $callback();
}

function xy() {
    echo 'Hello, World!';
}

$xyz = function(){
    echo "Javid";
};

callFunc3("xy"); // Catchable fatal error: Argument 1 passed to callFunc1() must be an instance of Closure, string given
callFunc4("xy"); // Hello, World!