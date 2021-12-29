<?php

class Reservations
{
    function index($params)
    {
        $view = new View('reservations');

        $view->render([
            'params' => $params
        ]);
    }

    function panier($params)
    {
        $view = new View('panier');
        $albumModel = new AlbumModel();
        $resaModel = new ReservationsModel();
        $errors = [];

        if (!isset($_SESSION['user'])){
            $view->redirect('login');
        }
        if (!empty($_GET['album'])) {
            $num_album = $_GET['album'];
            $num_user = $_SESSION['user']['id'];

            $reserved = $resaModel->create($num_album, $num_user);
            $reservations = $resaModel->findAlbum($num_user);
            if ($reserved){
                $errors['success'] = "Merci d'avoir reservé";
            } else {
                $errors['error'] = "Une erreur s'est produite";
            }
        } else {
            $num_user = $_SESSION['user']['id'];

            $reservations = $resaModel->findAlbum($num_user);

        }

        $view->render([
            'errors' => $errors,
            'reservations' => $reservations
        ]);
    }

}