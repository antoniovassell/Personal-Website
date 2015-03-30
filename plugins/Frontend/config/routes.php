<?php
use Cake\Routing\Router;

Router::plugin('Frontend', function ($routes) {
    $routes->fallbacks();
});
