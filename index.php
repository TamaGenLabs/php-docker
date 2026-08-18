<?php
    require_once __DIR__ . '/vendor/autoload.php';

    use App\Greeting;

    $greet = new Greeting();
    echo "<h1>" . $greet->sayHello() . "</h1>";