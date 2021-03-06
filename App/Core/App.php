<?php

class App
{

    private $routes = [
        'home' => ["controller" => "Home", "method" => "index"],
        'error' => ["controller" => "Home", "method" => "error"],
        'login' => ["controller" => "Home", "method" => "login"],
        'register' => ["controller" => "Home", "method" => "register"],
        'deconnexion' => ["controller" => "Home", "method" => "deconnexion"],

        'admin' => ["controller" => "Admin", "method" => "adminVerif"],
        'addAlbum' => ["controller" => "Admin", "method" => "addAlbum"],
        'deleteAlbum' => ["controller" => "Admin", "method" => "deleteAlbum"],
        'adminUsers' => ["controller" => "Admin", "method" => "adminUsers"],
        'adminResas' => ["controller" => "Admin", "method" => "adminResas"],
        'adminStats' => ["controller" => "Admin", "method" => "adminStats"],

        'allAlbums' => ["controller" => "Albums", "method" => "allAlbums"],
        'album' => ["controller" => "Albums", "method" => "album"],
        'playlist' => ["controller" => "Albums", "method" => "playlist"],

        'panier' => ["controller" => "Reservations", "method" => "panier"],
    ];

    public function __construct() {
        $route = $this->getRoute();
        $params = $this->getParams();

        if (key_exists($route, $this->routes)) {
            $controller = $this->routes[$route]['controller'];
            $method = $this->routes[$route]['method'];

            $controller = new $controller();
            $controller->$method($params);
        } else {
            $controller = $this->routes['error']['controller'];
            $method = $this->routes['error']['method'];

            $controller = new $controller();
            $controller->$method($params);
        }
    }

    /**
     * @return string
     */
    public function getRoute()
    {
        return !empty($_GET) && !empty($_GET['page'])? $_GET['page'] : 'home';
    }

    private function getParams() {
        if (empty($_GET)) return null;

        unset($_GET['page']);

        return $_GET;
    }
}
