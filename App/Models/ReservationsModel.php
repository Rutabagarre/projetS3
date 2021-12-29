<?php

class ReservationsModel extends BDD
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->connect();
    }

    public function findAllReservations() {
        $sql = "select id_resa, id_resa_album, id_resa_user from reservations";
        $req = $this->pdo->prepare($sql);
        $req->execute();

        $reservations = [];

        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $reservation = new Reservation();
            $reservation->setId_resa($row['id_resa']);
            $reservation->setId_resa_user($row['id_resa_user']);
            $reservation->setId_resa_album($row['id_resa_album']);

            $reservations[] = $reservation;
        }

        return $reservations;
    }

    public function findAlbum($id_resa_user) {
        $sql = "SELECT A.nom, A.artiste, A.pochette FROM reservations R JOIN albums A ON A.id_album = R.id_resa_album WHERE R.id_resa_user = :id_resa_user";
        $req = $this->pdo->prepare($sql);
        $req->bindParam(':id_resa_user', $id_resa_user);
        $req->execute();

        $albums = [];

        while ($row = $req->fetch(PDO::FETCH_ASSOC)){
            $album = new Album();
            $album->setNom($row['nom']);
            $album->setArtiste($row['artiste']);
            $album->setPochette($row['pochette']);

            $albums[] = $album;
        }

        return $albums;
    }

    public function create($id_album, $id_user) {
        $sql = 'insert into reservations (id_resa_album, id_resa_user) values (:id_album, :id_user)';
        $req = $this->pdo->prepare($sql);
        $req->bindParam(':id_album', $id_album);
        $req->bindParam(':id_user', $id_user);
        $req->execute();

        return $req->rowCount() == 1;
    }

    public function stats() {
        $sql = 'SELECT COUNT(*) as count FROM reservations';
        $req = $this->pdo->prepare($sql);
        $req->execute();

        $row = $req->fetch(PDO::FETCH_ASSOC);

        return $row['count'];
    }
}