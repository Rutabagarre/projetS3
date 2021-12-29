<?php

class AlbumModel extends BDD {
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function exists($nom){
        $sql = "select * from albums where nom = :nom";

        $req = $this->pdo->prepare($sql);
        $req->bindParam(':nom', $nom);
        $req->execute();

        $row = $req->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function findThreeRand() {
        $sql = "select * from albums order by rand() limit 3";

        $req = $this->pdo->prepare($sql);
        $req->execute();

        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $album = new Album();
            $album->setId($row['id_album']);
            $album->setNom($row['nom']);
            $album->setArtiste($row['artiste']);
            $album->setPochette($row['pochette']);
            $album->setIntegration($row['integration']);

            $albums[] = $album;
        }

        return $albums;
    }

    public function find($id) {
        $sql = "select * from albums where id_album = :id";

        $req = $this->pdo->prepare($sql);
        $req->bindParam(':id', $id);
        $req->execute();

        $row = $req->fetch(PDO::FETCH_ASSOC);
        $album = new Album();
        $album->setId($row['id_album']);
        $album->setNom($row['nom']);
        $album->setArtiste($row['artiste']);
        $album->setPochette($row['pochette']);
        $album->setIntegration($row['integration']);

        return $album;
    }

    public function create($nom, $artiste, $pochette, $integration) {
        $sql = "insert into albums (nom, artiste, pochette, integration) values (:nom, :artiste, :pochette, :integration)";

        $req = $this->pdo->prepare($sql);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':artiste', $artiste);
        $req->bindParam(':pochette', $pochette);
        $req->bindParam(':integration', $integration);

        return $req->execute();
    }

    public function delete($nom, $artiste) {
        $sql = "delete from albums where nom = :nom and artiste = :artiste";

        $req = $this->pdo->prepare($sql);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':artiste', $artiste);

        return $req->execute();
    }

    public function findAllRand() {
        $sql = "select * from albums order by rand()";

        $req = $this->pdo->prepare($sql);
        $req->execute();

        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $album = new Album();
            $album->setId($row['id_album']);
            $album->setNom($row['nom']);
            $album->setArtiste($row['artiste']);
            $album->setPochette($row['pochette']);
            $album->setIntegration($row['integration']);

            $albums[] = $album;
        }

        return $albums;
    }

    public function stats() {
        $sql = 'SELECT COUNT(*) as count FROM albums';
        $req = $this->pdo->prepare($sql);
        $req->execute();

        $row = $req->fetch(PDO::FETCH_ASSOC);

        return $row['count'];
    }
}