<?php

class Home
{

    function index($params) {
        $view = new View('home');

        $albumModel = new AlbumModel();
        $errors = [];

        $albums = $albumModel->findThreeRand();

        $view->render([
            'errors' => $errors,
            'albums' => $albums
        ]);
    }

    /**
     * @param $params
     */
    public function error($params) {
        $view = new View('error');
        $view->render();
    }

    function login($params) {

        $view = new View('login');

        $modelUser = new UserModel();
        $errors = [];

        if (!empty($_POST)) {

            if (
                !empty($_POST['mail']) &&
                !empty($_POST['password'])
            ) {

                $mail = htmlspecialchars(trim($_POST['mail']));
                $password = htmlspecialchars(trim($_POST['password']));

                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

                    if ($modelUser->exists($mail)) {

                        $user = $modelUser->find($mail);

                        if (password_verify($password, $user->getPassword())) {

                            unset($_SESSION['mail']);

                            $_SESSION['user'] = [
                                "nom" => $user->getNom(),
                                "prenom" => $user->getPrenom(),
                                "mail" => $user->getMail(),
                                "type" => $user->getType(),
                                "id" => $user->getId(),
                            ];

                            $view->redirect('home');

                        } else {
                            $errors['password'] = "Mot de passe incorrect";
                        }

                    } else {
                        $errors['user'] = "E-mail invalide";
                    }

                } else {
                    $errors['mail'] = "Merci de renseigner un mail valide";
                }

            } else {
                $errors['empty'] = "Merci de compléter tous les champs";
            }
        }


        $view->render([
            'errors' => $errors
        ]);
    }

    function register($params) {

        $view = new View('register');

        $modelUser = new UserModel();
        $errors = [];

        if (!empty($_POST)) {

            if (
                !empty($_POST['nom']) &&
                !empty($_POST['prenom']) &&
                !empty($_POST['mail']) &&
                !empty($_POST['password'])
            ) {

                $nom = htmlspecialchars(trim($_POST['nom']));
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail = htmlspecialchars(trim($_POST['mail']));
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

                    $modelUser->create($nom, $prenom, $mail, $password);

                } else {
                    $errors['mail'] = "Merci de renseigner un mail valide";
                }
            } else {
                $errors['empty'] = "Merci de remplir tout les champs";
            }
        }

        $view->render([
            'errors' => $errors
        ]);
    }

    function deconnexion ($params)
    {
        $view = new View('deconnexion');

        $errors = [];

        if (!empty($_SESSION['user'])) {
            unset($_SESSION['user']);
            header("Location: index?page=home");
        } else {
            $errors['empty'] = "Vous n'êtes pas connecté";
        }

        $view->render([
            'errors' => $errors
        ]);
    }
}
