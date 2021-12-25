<?php

class Album
{
    private $id;
    private $nom;
    private $artiste;
    private $pochette;
    private $integration;


    /**
     * UserObject constructor.
     */
    public function __construct(){

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * @param mixed $artiste
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;
    }

    /**
     * @return mixed
     */
    public function getPochette()
    {
        return $this->pochette;
    }

    /**
     * @param mixed $pochette
     */
    public function setPochette($pochette)
    {
        $this->pochette = $pochette;
    }

    /**
     * @return mixed
     */
    public function getIntegration()
    {
        return $this->integration;
    }

    /**
     * @param $integration
     */
    public function setIntegration($integration)
    {
        $this->integration = $integration;
    }
}