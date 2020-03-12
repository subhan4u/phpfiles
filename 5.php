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