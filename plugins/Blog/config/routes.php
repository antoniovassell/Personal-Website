<?php
use Cake\Routing\Router;

Router::plugin('Blog', function ($routes) {
    $routes->fallbacks();
});
