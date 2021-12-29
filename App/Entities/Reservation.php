<?php

class Reservations
{
    public $id_resa;
    private $id_resa_album;
    private $id_resa_user;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId_resa()
    {
        return $this->id_resa;
    }

    /**
     * @param $id_resa
     */
    public function setId_resa($id_resa)
    {
        $this->id_resa = $id_resa;
    }

    /**
     * @return mixed
     */
    public function getId_resa_album()
    {
        return $this->id_resa_album;
    }

    /**
     * @param $id_resa_album
     */
    public function setId_resa_album($id_resa_album)
    {
        $this->id_resa_album = $id_resa_album;
    }

    /**
     * @return mixed
     */
    public function getId_resa_user()
    {
        return $this->id_resa_user;
    }

    /**
     * @param $id_resa_user
     */
    public function setId_resa_user($id_resa_user)
    {
        $this->id_resa_user = $id_resa_user;
    }
}