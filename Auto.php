<?php

class Auto
{

    private string $marke;
    private int $geschwindigkeit = 0;
    private string $fahrer;
    private Beifahrer|null $beifahrer;
    private int $kmstand;
    private string $reifen_vorne_links;
    private string $reifen_vorne_rechts;
    private string $reifen_hinten_links;
    private string $reifen_hinten_rechts;

    /**
     * @param string $fahrer
     * @param string $beifahrer
     * @param int $kmstand
     * @param string $reifen_vorne_links
     * @param string $reifen_vorne_rechts
     * @param string $reifen_hinten_links
     * @param string $reifen_hinten_rechts
     */
    public function __construct(string $fahrer, int $kmstand, string $marke, Beifahrer $beifahrer = null, string $reifen_vorne_links = "sommer", string $reifen_vorne_rechts = "sommer", string $reifen_hinten_links = "sommer", string $reifen_hinten_rechts = "sommer")
    {

        $this->fahrer = $fahrer;
        $this->marke = $marke;
        $this->beifahrer = $beifahrer;
        $this->kmstand = $kmstand;
        $this->reifen_vorne_links = $reifen_vorne_links;
        $this->reifen_vorne_rechts = $reifen_vorne_rechts;
        $this->reifen_hinten_links = $reifen_hinten_links;
        $this->reifen_hinten_rechts = $reifen_hinten_rechts;
    }

    /**
     * @return string
     */
    public function getFahrer(): string
    {
        return $this->fahrer;
    }

    /**
     * @return int
     */
    public function getGeschwindigkeit(): int
    {
        return $this->geschwindigkeit;
    }
    public function beschleunigen(int $kmh) : void
    {
        $this->geschwindigkeit += $kmh;
        if ($this->geschwindigkeit > 250) {
            $this->geschwindigkeit = 250;
        }
    }


    public function bremsen(int $kmh): void
    {
        $this->geschwindigkeit -= $kmh;
        if ($this->geschwindigkeit < 0){
            $this->geschwindigkeit = 0;
        }
    }

    public function einsteigenBeifahrer(Beifahrer $beifahrer): bool
    {
        if ($this->geschwindigkeit == 0 and $this->beifahrer == null){
            $this->beifahrer = $beifahrer;
            return true;
        } else{
            return false;
        }
    }

    /**
     * @return Beifahrer|null
     */
    public function getBeifahrer(): Beifahrer|null
    {
        return $this->beifahrer;
    }

    public function aussteigenBeifahrer(): bool
    {
        if ($this->geschwindigkeit == 0){
            $this->beifahrer = null;
            return true;
        } else{
            return false;
        }

    }

    /**
     * @return string
     */
    public function getMarke(): string
    {
        return $this->marke;
    }

    public function vollbremsung():void
    {
        $this->geschwindigkeit =0;
    }

    public function fahren(int $stunden):void
    {
        $this->kmstand += $this->geschwindigkeit * $stunden;
    }

    /**
     * @return int
     */
    public function getKmstand(): int
    {
        return $this->kmstand;
    }

}



