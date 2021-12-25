<?php

class Albums
{

    function index($params)
    {
        $view = new View('albums');

        $view->render([
            'params' => $params
        ]);
    }


    function viewAlbum($params)
    {
        $view = new View('viewAlbum');

        $albumModel = new AlbumModel();
        $errors = [];

        $albums = $albumModel->findAllRand();

        $view->render([
            'errors' => $errors,
            'albums' => $albums
        ]);
    }

    function oneAlbum($params)
    {
        $view = new View('oneAlbum');
        $albumModel = new AlbumMOdel();
        $errors = [];

        if (!empty($_GET['album'])) {
            $num_album = $_GET['album'];

            $album = $albumModel->find($num_album);
        } else {
            $errors['empty'] = 'Erreur';
        }

        $view->render([
            'errors' => $errors,
            'album' => $album
        ]);
    }

    function playlist($params)
    {
        $view = new View('playlist');

        $view->render([

        ]);
    }

    function panier($params){
        $view = new View('panier');
        $albumModel = new AlbumMOdel();
        $errors = [];

        if (!empty($_GET['album'])) {
            $num_album = $_GET['album'];

            $album = $albumModel->find($num_album);
        } else {
            $errors['empty'] = 'Erreur';
        }

        $view->render([
            'errors' => $errors,
            'album' => $album
        ]);
    }
}