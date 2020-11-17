<?php


class Router
{
    protected $routes = [];

      public function define($routes)
{
   $this->routes = $routes;

}

    public function direct($uri)
    {


        if(array_key_exists($uri, $this->routes[$_SERVER['REQUEST_METHOD']])){
            $currentRoute = $this->routes[$_SERVER['REQUEST_METHOD']][$uri];

            // checks if the route needs authentication and the user is authenticated or else the route is always allowed.
            if(($currentRoute['authenticated'] && isset($_SESSION['user']) && ($currentRoute['adminOnly'] ===false || (isset($_SESSION['admin']) && boolval($_SESSION['admin']) === true) )) || $currentRoute['authenticated'] === false) {

                $controller = new $currentRoute['controller']();
                $controller->{$currentRoute['method']}();
                return;
            }
            else
            {
                header("Location: /login?error=Not%20authenticated");
                die();
            }
        }

        throw new Exception("Deze route ken ik niet");
    }

}
