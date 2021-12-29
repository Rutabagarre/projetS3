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


    function allAlbums($params)
    {
        $view = new View('allAlbums');

        $albumModel = new AlbumModel();
        $errors = [];

        $albums = $albumModel->findAllRand();

        $view->render([
            'errors' => $errors,
            'albums' => $albums
        ]);
    }

    function album($params)
    {
        $view = new View('album');
        $albumModel = new AlbumModel();
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
}