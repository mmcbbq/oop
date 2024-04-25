<?php

class Reifen
{
    private int $id;
    private string $type;
    private float $profile;
    private string|null $letztePos;
    private float $gefahreneKm;



    /**
     * @param int $id
     * @param string $type
     * @param float $profile
     * @param float $gefahreneKm
     * @param string|null $letztePos
     */
    public function __construct(int $id, string $type, float $profile,float $gefahreneKm =0, string $letztePos= null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->profile = $profile;
        $this->letztePos = $letztePos;
        $this->gefahreneKm = $gefahreneKm;
    }

    /**
     * @param float $km
     * @return void
     */
    public function addGefahreneKm(float $km):void
    {

    }

    /**
     * @param string|null $letztePos
     */
    public function setLetztePos(?string $letztePos): void
    {
        $this->letztePos = $letztePos;
    }






}