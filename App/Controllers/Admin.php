<?php

class Admin {
    function index($params) {
        $view = new View('home');

        $view->render([
            'params' => $params
        ]);
    }


    /**
     * @param $params
     */
    public function error($params) {
        $view = new View('error');
        $view->render();
    }

    function adminVerif ($params) {
        $view = new View('admin');
        $errors = [];

        if (!empty($_SESSION['user'])) {
            if ($_SESSION['user']['type']=='admin') {
                $errors['admin'] = 'Vous êtes admin';
            } else {
                $errors['notAdmin'] = "Vous n'êtes pas admin";
                header('Location: index.php?page=home');
            }
        } else {
            $errors['empty'] = "Vous n'êtes pas connecté";
            header('Location: index.php?page=home');
        }

        $view->render([
            'errors' => $errors
        ]);
    }

    function addAlbum($params) {
        $view = new View('addAlbum');

        $albumModel = new AlbumModel();
        $errors = [];

        if (!empty($_SESSION['user'])) {
            if ($_SESSION['user']['type']=='admin') {
                if (!empty($_POST)) {
                    if (
                        !empty($_POST['nom']) &&
                        !empty($_POST['artiste']) &&
                        !empty($_FILES['pochette']) &&
                        !empty($_POST['integration'])
                    ) {
                        $nom = htmlspecialchars(trim($_POST['nom']));
                        $artiste = htmlspecialchars(trim($_POST['artiste']));
                        $integration = htmlspecialchars(trim($_POST['integration']));

                        $path_img = str_replace(' ', '_', $nom);
                        $pochette = "images/albumsPochette/".$path_img.".jpeg";
                        $tmp_name = $_FILES['pochette']['tmp_name'];
                        move_uploaded_file($tmp_name, $pochette);

                        $albumModel->create($nom, $artiste, $pochette, $integration);
                    } else {
                        $errors['empty'] = "Merci de remplir tout les champs";
                    }
                }
            } else {
                $errors['notAdmin'] = "Vous n'êtes pas admin";
                header('Location: index.php?page=home');
            }
        } else {
            $errors['empty'] = "Vous n'êtes pas connecté";
            header('Location: index.php?page=home');
        }

        $view->render([
            'errors' => $errors
        ]);
    }

    function deleteAlbum($params) {
        $view = new View('deleteAlbum');

        $albumModel = new AlbumModel();
        $errors = [];

        if (!empty($_SESSION['user'])) {
            if ($_SESSION['user']['type']=='admin') {
                if (!empty($_POST)) {
                    if (
                        !empty($_POST['nom']) &&
                        !empty($_POST['artiste'])
                    ) {
                        $nom = htmlspecialchars(trim($_POST['nom']));
                        $artiste = htmlspecialchars(trim($_POST['artiste']));

                        $albumModel->delete($nom, $artiste);
                    } else {
                        $errors['empty'] = "Merci de remplir tout les champs";
                    }
                }
            } else {
                $errors['notAdmin'] = "Vous n'êtes pas admin";
                header('Location: index.php?page=home');
            }
        } else {
            $errors['empty'] = "Vous n'êtes pas connecté";
            header('Location: index.php?page=home');
        }

        $view->render([
            'errors' => $errors,
        ]);
    }

    function findAllUsers($params) {
        $view = new View('findAllUsers');

        $albumModel = new UserModel();
        $errors = [];

        $users = $albumModel->findAll();

        $view->render([
            'errors' => $errors,
            'users' => $users
        ]);
    }
}