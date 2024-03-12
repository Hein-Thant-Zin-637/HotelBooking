
<?php

class Router
{

    public static function route($uri, $method, $routes)
    {
        foreach ($routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                if ($route['middleware'] === 'guest') {
                    if ($_SESSION['user'] ?? false) {
                        header('location: /home');
                        exit();
                    }
                }

                if ($route['middleware'] === 'auth') {
                    if (!$_SESSION['user'] ?? false) {
                        header('location: /home');
                        exit();
                    }
                }

                require($route['controller']);
                return;
            }
        }

        abort();
    }
}